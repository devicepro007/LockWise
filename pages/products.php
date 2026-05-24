<?php
/*
 * Licensed under the GNU AGPLv3
 * Copyright (C) 2026 DPro7
 */

$header_navbar_chosen = "Products";
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
        <section id="our-products-section" class="page-section section">
            <h1>Our products</h1>

            <div id="products-layout-wrapper">
                <?php foreach ($products as $product_title => $product_data): ?>
                    <section id="product-column-<?= toID($product_title) ?>" class="product-white-wrapper">

                        <h2 id="product-title-<?= toID($product_title) ?>">
                            <?= $product_title ?>
                        </h2>

                        <img draggable="false" class="product-main-image"
                            src="/images/products/<?= toID($product_title) ?>.webp"
                            alt='Image for "<?= $product_title ?>" | <?= $company_name ?>' />

                        <!-- Showing "Best for" instead of the full description -->
                        <p class="product-best-for-text">
                            The best choice for <?= $product_data['best-for'] ?>
                        </p>

                        <div id="product-details-container-<?= toID($product_title) ?>" class="grid">
                            <?php foreach ($product_data['features'] as $card_title => $card_content): ?>
                                <div id="product-card-<?= toID($product_title) ?>-<?= toID($card_title) ?>">
                                    <div class="homepage-card-container">
                                        <div class="homepage-card-text">
                                            <h3>
                                                <?= $card_title ?>
                                            </h3>

                                            <p>
                                                <?= $card_content ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <?php if (isset($products_urls[$product_title])): ?>
                            <div class="section-button-div">
                                <a href="/pages/<?= $products_urls[$product_title][0] ?>.php" class="section-button button">
                                    <?= $products_urls[$product_title][1] ?>
                                </a>
                            </div>
                        <?php endif; ?>

                    </section>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <?php require $_SERVER['DOCUMENT_ROOT'] . "/assets/footer.php"; ?>
</body>

</html>