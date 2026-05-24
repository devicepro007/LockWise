<?php
/*
 * Licensed under the GNU AGPLv3
 * Copyright (C) 2026 DPro7
 */
?>

<header>
    <div id="header-company">
        <a href="/">
            <img draggable="false" src="/images/full-logo.webp" alt="<?= htmlspecialchars($company_name) ?> logo"
                id="header-company-logo">
        </a>
    </div>

    <div id="header-navbar">
        <?php foreach ($pages as $name => $url):
            $id = "header-navbar-" . strtolower(str_replace(' ', '-', $name));
            ?>
            <a href="<?= htmlspecialchars($url) ?>" id="<?= $id ?>"
                class="header-navbar-page <?= $header_navbar_chosen === $name ? 'header-navbar-chosen' : '' ?>">
                <?= htmlspecialchars($name) ?>
            </a>
        <?php endforeach; ?>

        <a href="/pages/hamburger-menu.php" id="header-navbar-hamburger-menu-icon">≡</a>
    </div>
</header>