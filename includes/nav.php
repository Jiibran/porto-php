<header>
    <div class="container">
        <div class="logo">
            <h1>MJT</h1>
        </div>
        <nav>
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="menu">
                <li><a href="index.php" <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?>>Home</a></li>
                <li><a href="about.php" <?php if(basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"'; ?>>About Me</a></li>
                <li><a href="webprogramming.php" <?php if(basename($_SERVER['PHP_SELF']) == 'webprogramming.php') echo 'class="active"'; ?>>Pemrograman Web</a></li>
                <li><a href="contact.php" <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'class="active"'; ?>>Kontak</a></li>
            </ul>
        </nav>
    </div>
</header>
