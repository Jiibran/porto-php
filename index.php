<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <span class="hero-intro">Hello, I'm</span>
                <h1>Haidar Putra Atmajaya</h1>
                <h2>Informatika Student</h2>
                <p>Welcome to my personal website! I'm a student at Universitas Singaperbangsa Karawang passionate about mobile development and data analysis.</p>
                <div class="hero-actions">
                    <a href="about.php" class="btn btn-primary">About Me</a>
                    <a href="contact.php" class="btn btn-outline">Get In Touch</a>
                </div>
            </div>
            <div class="hero-image-container">
                <div class="hero-background"></div>
                <div class="profile-img">
                    <img src="assets/images/profil.jpg" alt="Haidar Putra Atmajaya">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="skills-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">My Expertise</h2>
            <p class="section-subtitle">The skills and technologies I specialize in</p>
        </div>
        <div class="skills-container">
            <div class="skill-card featured">
                <div class="skill-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="skill-content">
                    <h3>Mobile Development</h3>
                    <p>Android, Kotlin, Flutter, React Native</p>
                </div>
            </div>
            <div class="skill-column">
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="skill-content">
                        <h3>Data Analysis</h3>
                        <p>Python, Tableau, SQL, Data Visualization</p>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <div class="skill-content">
                        <h3>Cloud Computing</h3>
                        <p>AWS, Google Cloud, Azure</p>
                    </div>
                </div>
            </div>
            <div class="skill-card">
                <div class="skill-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="skill-content">
                    <h3>UI/UX Research</h3>
                    <p>User Testing, Prototyping, Figma</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="experience-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Experience</h2>
            <p class="section-subtitle">My professional journey so far</p>
        </div>
        <div class="experience-cards">
            <div class="experience-card">
                <div class="experience-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="experience-content">
                    <div class="experience-date">2023 - Present</div>
                    <h3>Mobile App Developer</h3>
                    <p>Developing mobile applications for Android and iOS platforms as part of university projects.</p>
                </div>
            </div>
            <div class="experience-card">
                <div class="experience-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="experience-content">
                    <div class="experience-date">2023</div>
                    <h3>Data Analyst Intern</h3>
                    <p>Analyzed business data and created visualizations to support decision-making processes.</p>
                </div>
            </div>
            <div class="experience-card">
                <div class="experience-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="experience-content">
                    <div class="experience-date">2022 - 2023</div>
                    <h3>IT Support Volunteer</h3>
                    <p>Provided technical support for campus events and helped manage digital infrastructure.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Interested in working together?</h2>
            <p>Let's build something amazing together. Reach out and let's discuss your project.</p>
            <a href="contact.php" class="btn btn-accent">Contact Me</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
