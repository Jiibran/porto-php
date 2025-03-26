<?php
// Load Composer's autoloader
if (!file_exists('vendor/autoload.php')) {
    error_log("Composer autoload.php not found. Please run 'composer install'");
    header("Location: contact.php?status=error&message=" . urlencode("Server configuration error. Please contact administrator."));
    exit;
}
require 'vendor/autoload.php';

use Mailgun\Mailgun;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';
    
    // Validate inputs
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    
    if (empty($subject)) {
        $errors[] = "Subject is required";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    // If no errors, process the form using Mailgun
    if (empty($errors)) {
        try {
            // Load configuration
            $config = require 'config.php';
            $mailgunConfig = $config['mailgun'];
            
            // Prepare email content
            $htmlContent = "<p><strong>Name:</strong> {$name}</p>";
            $htmlContent .= "<p><strong>Email:</strong> {$email}</p>";
            $htmlContent .= "<p><strong>Subject:</strong> {$subject}</p>";
            $htmlContent .= "<p><strong>Message:</strong></p>";
            $htmlContent .= "<p>{$message}</p>";
            
            // Try sending via Mailgun
            try {
                // Initialize Mailgun
                $mg = Mailgun::create($mailgunConfig['api_key']);
                
                // Send email
                $result = $mg->messages()->send($mailgunConfig['domain'], [
                    'from' => "{$mailgunConfig['from_name']} <{$mailgunConfig['from_email']}>",
                    'to' => $mailgunConfig['to_email'],
                    'subject' => "Contact Form: {$subject}",
                    'html' => $htmlContent,
                    'text' => "Name: {$name}\nEmail: {$email}\nSubject: {$subject}\nMessage: {$message}"
                ]);
                
                // Redirect with success message
                header("Location: contact.php?status=success");
                exit;
            } catch (Exception $e) {
                // Log the specific Mailgun error
                error_log("Mailgun API error: " . $e->getMessage());
                
                // Try using PHP mail() as fallback
                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                $headers .= "From: {$name} <{$email}>\r\n";
                
                if (mail($mailgunConfig['to_email'], "Contact Form: {$subject}", $htmlContent, $headers)) {
                    // PHP mail succeeded
                    header("Location: contact.php?status=success");
                    exit;
                } else {
                    // Both methods failed
                    throw new Exception("PHP mail() function also failed");
                }
            }
        } catch (Exception $e) {
            // Log the error (in a production environment)
            error_log("Email sending error: " . $e->getMessage());
            
            // Create a form submission file as last resort
            $formData = [
                'name' => $name,
                'email' => $email,
                'subject' => $subject,
                'message' => $message,
                'date' => date('Y-m-d H:i:s')
            ];
            
            // Save form data to a file
            $filename = 'form_submissions/submission_' . date('YmdHis') . '.txt';
            
            // Create directory if it doesn't exist
            if (!file_exists('form_submissions')) {
                mkdir('form_submissions', 0755, true);
            }
            
            if (file_put_contents($filename, json_encode($formData, JSON_PRETTY_PRINT))) {
                // Form data was saved to file
                header("Location: contact.php?status=success&note=" . urlencode("Your message was saved but email delivery may be delayed."));
            } else {
                // Everything failed
                header("Location: contact.php?status=error&message=" . urlencode("Failed to process your request. Please try again later or contact us directly via email."));
            }
            exit;
        }
    } else {
        // Redirect with validation error messages
        $error_str = implode(",", $errors);
        header("Location: contact.php?status=error&errors=" . urlencode($error_str));
        exit;
    }
} else {
    // Not a POST request, redirect to contact page
    header("Location: contact.php");
    exit;
}
?>
