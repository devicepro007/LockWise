<?php
/*
 * Licensed under the GNU AGPLv3
 * Copyright (C) 2026 DPro7
 */

$header_navbar_chosen = "Contact";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/assets/additional.php" ?>
</head>

<body>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/assets/header.php"; ?>

    <main>
        <section id="about-section" class="page-section section">
            <h1>Congratulations!</h1>
            <div id="about-card" class="card">
                <p>Your message has been sent successfully.<br>We will get back to you as soon as possible!</p>
                <div class="section-button-div">
                    <a href="/index.php" class="section-button button">Go back</a>
                </div>
            </div>
        </section>
    </main>

    <?php require $_SERVER['DOCUMENT_ROOT'] . "/assets/footer.php"; ?>
</body>

</html>