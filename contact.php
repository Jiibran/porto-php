<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<section class="contact">
    <div class="container">
        <h1 class="section-title">Contact Me</h1>
        
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
        
        <div class="contact-container">
            <div class="contact-info">
                <h3>Let's Connect</h3>
                <p>Feel free to reach out to me for any questions, collaborations, or just to say hello!</p>
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <p>muhammadjibrantariq@gmail.com</p>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <p>+6281290484512</p>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Karawang, West Java, Indonesia</p>
                    </div>
                </div>
                <div class="social-links">
                    <a href="https://github.com/Jiibran" class="social-icon" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/mjibrantariq/" class="social-icon" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="contact-form">
                <h3>Send Me a Message</h3>
                <form id="contactForm" action="process.php" method="POST">
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
                    <button type="submit" class="btn submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
