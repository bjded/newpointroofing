<?php
$get_reviews = file_get_contents('scripts/reviews.json');
$reviews = json_decode($get_reviews, true);
$selected_reviews = array_rand($reviews, 2);
?>

<section id="reviews">
    <div class="container">
        <h2 class="container-heading">Recent Client Reviews</h2>
        <?php foreach ($selected_reviews as $key => $index) : ?>
            <div
                class="review"
                data-aos="<?= $key == 0 ? "fade-right" : "fade-left"; ?>"
                data-aos-duration="500">
                <div class="stars">
                    <?php for ($i = 0; $i < $reviews[$index]["stars"]; $i++) : ?>
                        <i class="fa-solid fa-star"></i>
                    <?php endfor; ?>
                </div>
                <p class="comment"><?= $reviews[$index]["comment"]; ?></p>
                <p class="person"><?= $reviews[$index]["person"]; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>