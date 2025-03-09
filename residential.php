<?php
$page_title = "Residential";
$page_banner_class = "residential";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "php/head.php"; ?>
</head>

<body id="home">
    <?php require_once "php/navigation.php"; ?>
    <?php require_once "php/page-banner.php"; ?>

    <section class="text-content" data-aos="fade-in" data-aos-duration="1000">
        <div class="container">
            <h2><?= $page_title; ?></h2>
            <p>At New Point Roofing, we specialize in storm damage restoration, ensuring your property is restored to its best condition. As General Contractors, we handle every detail of the project from start to finish, so you can focus on what matters while we take care of the insurance and construction process.</p>
            <p>With 25 years of experience, we’ve been a trusted name in the industry for decades and will continue to be here to support you after the storm. We are known for providing top-quality roofing solutions, including composition and other premium options, all backed by our commitment to excellence. Our reputation for craftsmanship and customer satisfaction makes us one of the most highly-rated roofing contractors in the DFW area. Our goal is simple: to deliver the highest quality work and ensure you’re in a stronger position than before the storm. At New Point Roofing, we are dedicated to serving homeowners and communities with the highest level of care.</p>
        </div>
    </section>

    <?php require_once "php/stats.php"; ?>
    <?php require_once "php/contact.php"; ?>
    <?php require_once "php/footer.php"; ?>
    <?php require_once "php/scroll-to-top.php"; ?>

    <!-- JavaScript -->
    <?php require_once "php/scripts.php"; ?>
</body>

</html>