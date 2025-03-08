<span id="top" class="sr-only">top</span>

<nav aria-label="Main Navigation">
    <div class="nav-logo-contact">
        <div class="logo">
            <a href="/" tabindex="-1">
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
                <span>Schedule a </span>Free Inspection</a>
        </div>
        <div id="mobile-toggle" class="open">
            <!-- <i class="fa-solid fa-bars"></i> -->
            <div class="toggle-line"><span class="sr-only">line</span></div>
            <div class="toggle-line"><span class="sr-only">line</span></div>
            <div class="toggle-line"><span class="sr-only">line</span></div>
        </div>
    </div>
    <ul>
        <?php if ($page_title == "Home") : ?>
            <li>
                <a href="#home" title="Home" class="active">
                    <i class="fa-solid fa-house-chimney"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#services" title="Services">
                    <i class="fa-solid fa-hammer"></i>
                    Services
                </a>
            </li>
            <li>
                <a href="#why-new-point" title="Why New Point">
                    <i class="fa-solid fa-handshake"></i>
                    Why New Point
                </a>
            </li>
            <li>
                <a href="#showcase" title="Showcase">
                    <i class="fa-solid fa-photo-film"></i>
                    Showcase
                </a>
            </li>
            <li>
                <a href="#contact" title="Contact Us">
                    <i class="fa-solid fa-paper-plane"></i>
                    Contact Us
                </a>
            </li>
        <?php else : ?>
            <li>
                <a href="/" title="Back to Home" class="back"><i class="fa-solid fa-left-long"></i>Back</a>
            </li>
            <li>
                <a href="residential" title="Residential" class="<?= $page_title == "Residential" ? "active" : ""; ?>">
                    <i class="fa-solid fa-house-chimney"></i>
                    Residential
                </a>
            </li>
            <li>
                <a href="commercial" title="Commercial" class="<?= $page_title == "Commercial" ? "active" : ""; ?>">
                    <i class="fa-solid fa-building"></i>
                    Commercial
                </a>
            </li>
            <li>
                <a href="construction" title="Construction" class="<?= $page_title == "Construction" ? "active" : ""; ?>">
                    <i class="fa-solid fa-hammer"></i>
                    Construction
                </a>
            </li>
        <?php endif; ?>
    </ul>
</nav>