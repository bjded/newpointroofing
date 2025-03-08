<nav aria-label="Main Navigation">
    <div class="nav-logo-contact">
        <div class="logo">
            <a href="index.php" tabindex="-1">
                <img
                    src="images/new-point-roofing-logo.svg"
                    alt="new point company logo" />
            </a>
        </div>
        <div class="contact">
            <a href="tel:8179939016" class="number">
                <i class="fa-solid fa-phone"></i>
                (817) 993-9016
            </a>
            <a href="#contact" class="btn btn-secondary">
                Schedule a Free Inspection
            </a>
        </div>
    </div>
    <ul>
        <?php if ($page_title == "Home") : ?>
            <li>
                <a href="#home" title="Home" class="active"><i class="fa-solid fa-house-chimney"></i>Home</a>
            </li>
            <li>
                <a href="#services" title="Services"><i class="fa-solid fa-hammer"></i>Services</a>
            </li>
            <li>
                <a href="#why-new-point" title="Why New Point"><i class="fa-solid fa-handshake"></i>Why New Point</a>
            </li>
            <li>
                <a href="#showcase" title="Showcase"><i class="fa-solid fa-photo-film"></i>Showcase</a>
            </li>
            <li>
                <a href="#contact" title="Contact Us"><i class="fa-solid fa-paper-plane"></i>Contact Us</a>
            </li>
        <?php else : ?>
            <li>
                <a href="index.php" title="Home" class="active"><i class="fa-solid fa-left-long"></i>Back to Home</a>
            </li>
            <li>
                <a href="residential.php" title="Residential Roofing"><i class="fa-solid fa-house-chimney"></i>Residential</a>
            </li>
            <li>
                <a href="commercial.php" title="Commercial Roofing"><i class="fa-solid fa-building"></i>Commercial</a>
            </li>
            <li>
                <a href="construction.php" title="Construction Services"><i class="fa-solid fa-hammer"></i>Construction</a>
            </li>
        <?php endif; ?>
    </ul>
</nav>