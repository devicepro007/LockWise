<?php
/*
 * Licensed under the GNU AGPLv3
 * Copyright (C) 2026 DPro7
 */

$header_navbar_chosen = "About";
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
            <h1>About us</h1>
            <div class="center-div">
                <div id="about-card" class="card">
                    <p>
                        <?= $company_name ?> was founded with a simple mission: deliver dependable, high-quality door
                        locks that
                        protect what matters most. We believe security should be straightforward, accessible, and built
                        to last.
                        <br><br>
                        Our focus is clear — provide strong, modern locking solutions for homes and businesses across
                        the United States. From reinforced deadbolts to streamlined smart lock systems, every product in
                        our lineup is selected to meet real-world security demands while maintaining clean, contemporary
                        design.
                        <br><br>
                        At
                        <?= $company_name ?>, strength isn’t a slogan — it’s engineered into every detail. Our locks
                        feature
                        reinforced internal components, corrosion-resistant materials, and precision mechanisms designed
                        for smooth operation and long-term reliability. We prioritize structural integrity and
                        consistent performance under daily use.
                        <br><br>
                        We also believe customers deserve clarity before making a security decision. That’s why we
                        provide transparent specifications, detailed comparisons, and straightforward information — so
                        you can choose with confidence.
                        <br><br>
                        Security begins at the door. Whether upgrading a home, protecting a rental property, or
                        reinforcing a commercial space,
                        <?= $company_name ?> delivers locking solutions built for strength,
                        reliability, and peace of mind.
                    </p>
                </div>
            </div>
        </section>
    </main>

    <?php require $_SERVER['DOCUMENT_ROOT'] . "/assets/footer.php"; ?>
</body>

</html>