<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<section class="contact-hero">
    <div class="container">
        <div class="contact-header">
            <h1>Get In Touch</h1>
            <p class="contact-subtitle">Let's collaborate and create something amazing together</p>
        </div>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
        <div class="alert alert-success">
            <p>Pesan Anda berhasil terkirim! Terima kasih telah menghubungi saya.</p>
            <?php if (isset($_GET['note'])): ?>
            <p><small><?php echo htmlspecialchars($_GET['note']); ?></small></p>
            <?php endif; ?>
        </div>
        <?php elseif (isset($_GET['status']) && $_GET['status'] === 'error'): ?>
        <div class="alert alert-error">
            <?php if (isset($_GET['message'])): ?>
                <p><?php echo htmlspecialchars($_GET['message']); ?></p>
            <?php elseif (isset($_GET['errors'])): ?>
                <p>Mohon perbaiki kesalahan berikut:</p>
                <ul>
                <?php foreach(explode(',', $_GET['errors']) as $error): ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>Terjadi kesalahan. Silakan coba lagi.</p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
        <div class="contact-wrapper">
            <div class="contact-info-cards">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Me</h3>
                    <p>haidaratmajaya0406@gmail.com</p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Call Me</h3>
                    <p>087761845148</p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Location</h3>
                    <p>Karawang, West Java, Indonesia</p>
                </div>
                <div class="contact-card social">
                    <h3>Social Media</h3>
                    <div class="social-links">
                        <a href="https://github.com" class="social-icon" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://id.linkedin.com/in/haidar-putra-atmajaya-377270297" class="social-icon" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="contact-form-container">
                <div class="contact-form-header">
                    <h2>Send Me a Message</h2>
                    <p>I'll get back to you as soon as possible</p>
                </div>
                <form id="contactForm" action="process.php" method="POST" class="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" required>
                            <span class="error-message" id="nameError"></span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                            <span class="error-message" id="emailError"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                        <span class="error-message" id="subjectError"></span>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                        <span class="error-message" id="messageError"></span>
                    </div>
                    <button type="submit" class="btn btn-submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="map-section">
    <div class="map-overlay">
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253840.49136821455!2d107.15292451228656!3d-6.317027521084948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699cd00e42f607%3A0xd3ee2393c5e9efc0!2sKarawang%20Regency%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1636642891710!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
