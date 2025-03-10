<?php
$page_title = "Construction";
$page_banner_class = "construction";
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
            <p>In addition to our roofing services, New Point Roofing offers a wide range of construction services that can be completed alongside your roof work. Whether it’s building repairs, structural enhancements, or custom construction projects, we provide comprehensive solutions to meet your needs. Our experienced team ensures seamless integration of roofing and construction work, minimizing downtime and maximizing efficiency. We are equipped to handle both large and small-scale projects with the same level of care and precision. At New Point Roofing, we’re committed to delivering high-quality results that improve both the functionality and aesthetic of your commercial property.</p>
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