<?php
/*
 * Licensed under the GNU AGPLv3
 * Copyright (C) 2026 DPro7
 */

$header_navbar_chosen = "Home";
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
        <!-- Hero -->
        <section class="hero">
            <h1>Better Locks. Safer Homes.</h1>
            <p>Premium door locks built for strength and peace of mind.</p>
            <a href="/pages/products.php" class="button">Explore our locks</a>
        </section>

        <!-- Who are we? -->
        <section class="section">
            <h2>Who are we?</h2>
            <div class="start-end-section-card card">
                <p>
                    <?= $company_name ?> is a United States-focused door hardware brand delivering secure, modern
                    locking
                    solutions for homes
                    and businesses nationwide. We design and source high-quality mechanical and smart locks built for
                    strength, reliability, and everyday ease of use. With direct-to-consumer pricing and fast shipping
                    across the United States,
                    <?= $company_name ?> makes dependable security simple and accessible.
                </p>
            </div>
            <div id="learn-more" class="section-button-div">
                <a href="/pages/about.php" id="learn-more-button" class="section-button button">Learn more</a>
            </div>
        </section>

        <!-- Homepage sections -->
        <?php foreach ($homepage_sections as $section_title => $section_cards): ?>
            <section class="homepage-section section">
                <h2><?= $section_title ?></h2>
                <div class="grid">
                    <?php foreach (array_slice($section_cards, 0, 4, true) as $card_title => $card_content): ?>
                        <div class="homepage-card card">
                            <img draggable="false"
                                src="<?= $section_title === 'What can we offer?' ? '/images/products/' . toID($card_title) . '.webp' : '/images/homepage-sections/' . toID($section_title) . '/' . toID($card_title) . '.svg' ?>"
                                alt='Image for "<?= $card_title ?>" | <?= $company_name ?>' />
                            <div class="homepage-card-container">
                                <div class="homepage-card-text">
                                    <h3><?= $card_title ?></h3>
                                    <p><?= $card_content ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <?php if (isset($homepage_sections_urls[$section_title])): ?>
                    <div class="section-button-div">
                        <a href="/pages/<?= $homepage_sections_urls[$section_title][0] ?>.php"
                            class="section-button button"><?= $homepage_sections_urls[$section_title][1] ?></a>
                    </div>
                <?php endif; ?>
            </section>
        <?php endforeach; ?>

        <!-- Interested in our locks? -->
        <section class="section">
            <h2>Interested in our locks?</h2>
            <div class="start-end-section-card card">
                <p>
                    Take the next step toward stronger security today. Choose the <?= $company_name ?> lock that fits
                    your needs and proceed directly to secure checkout. Built with durable materials, modern design, and
                    dependable performance, your protection upgrade starts now.
                    <br>Click below to buy our locks and secure your home or business with confidence.
                </p>
            </div>
            <div id="buy-on-amazon" class="section-button-div">
                <a target="_blank" rel="noopener noreferrer" href="<?= $amazon_page_url ?>" id="buy-on-amazon-button"
                    class="section-button button">Buy on Amazon</a>
            </div>
        </section>
    </main>

    <?php require $_SERVER['DOCUMENT_ROOT'] . "/assets/footer.php"; ?>
</body>

</html>