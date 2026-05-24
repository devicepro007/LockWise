<?php
/*
 * Licensed under the GNU AGPLv3
 * Copyright (C) 2026 DPro7
 */

$header_navbar_chosen = "Reviews";

$mysqli_vars = ["127.0.0.1", "u630546512_root", "RootKamil007!", "u630546512_main"];
$mysqli = new mysqli($mysqli_vars[0], $mysqli_vars[1], $mysqli_vars[2], $mysqli_vars[3]);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Fetch all reviews
$sql = "SELECT * FROM reviews ORDER BY date DESC";
$result = $mysqli->query($sql);

$reviews = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $reviews[] = $row;
    }
} else {
    die("Error fetching reviews: " . $mysqli->error);
}

$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Reliable property repair services including plumbing, electrical, drywall, flooring, fencing, and many more. Fast, professional, and dependable.">
    <link rel="icon" href="/images/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="/images/favicon.ico">
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/assets/additional.php" ?>
    <title>Reviews | Construction and repair | SoCal Prime Build</title>
</head>

<body>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/assets/header.php"; ?>

    <main>
        <section id="reviews-section" class="page-section section">
            <h1>Reviews</h1>
            <div class="reviews-div">

                <?php foreach ($reviews as $row): ?>
                    <div class="review-card card">
                        <?php
                        $id = "";
                        $name = "";
                        $service = "";
                        $rating = "";
                        $text = "";
                        $images = [];

                        $id = $row['date'];
                        $name = $row['name'];
                        $service = $row['service'];
                        $rating = $row['rating'];
                        $text = $row['text'];
                        ?>

                        <p><b><?= $name ?></b></p>
                        <p>Service: <?= $service ?></p>
                        <img draggable="false" class="stars-rating" src="/images/<?= $rating ?>-stars.svg"
                            alt="<?= $rating ?> stars">

                        <p><?= $text ?></p>

                        <div class="review-images-div">
                            <?php
                            if (!empty($row['images'])) {
                                $decoded = json_decode($row['images'], true);

                                if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                                    $images = $decoded;
                                }
                            }

                            foreach (array_slice($images, 0, 4) as $index => $img) {
                                ?>
                                <img draggable="false" class="review-image"
                                    src="/images/reviews/<?= $id ?>-<?= htmlspecialchars($img) ?>.jpg"
                                    alt="Review photo <?= $index + 1 ?>">
                                <?php
                            }
                            ?>

                            <!-- <img draggable="false" class="review-image" src="/images/High-Quality Workmanship.jpg"
                                alt="View more"> -->
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <?php require $_SERVER['DOCUMENT_ROOT'] . "/assets/footer.php"; ?>
</body>

</html>