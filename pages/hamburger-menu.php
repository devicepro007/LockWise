<?php
/*
 * Licensed under the GNU AGPLv3
 * Copyright (C) 2026 DPro7
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/assets/additional.php" ?>
</head>

<body>
    <div id="header-hamburger-div">
        <?php foreach ($pages as $name => $url):
            $id = "header-hamburger-" . strtolower(str_replace(' ', '-', $name));
            ?>
            <a href="<?= htmlspecialchars($url) ?>" id="<?= $id ?>" class="header-hamburger-page">
                <?= htmlspecialchars($name) ?>
            </a>
        <?php endforeach; ?>
    </div>
</body>

</html>