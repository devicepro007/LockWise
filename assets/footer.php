<?php
/*
 * Licensed under the GNU AGPLv3
 * Copyright (C) 2026 DPro7
 */
?>

<footer>
    <section id="footer-top-section" class="footer-section">
        <div class="footer-div">
            <div>
                <h4>Pages:</h4>
                <?php foreach ($pages as $name => $url) { ?>
                    <a href="<?= $url ?>" target="_blank" rel="noopener noreferrer">
                        <?= $name ?>
                    </a><br>
                <?php } ?>
            </div>
        </div>
        <div class="footer-div">
            <div>
                <h4>Contact:</h4>
                <a href="tel:<?= $url_contact_phone_number ?>" target="_blank" rel="noopener noreferrer">
                    Call: <?= $display_contact_phone_number ?>
                </a><br>
                <a href="mailto:<?= $contact_email ?>" target="_blank" rel="noopener noreferrer">
                    Email: <?= $contact_email ?>
                </a><br>
                <a href="https://wa.me/<?= $url_contact_phone_number ?>" target="_blank" rel="noopener noreferrer">
                    Text via WhatsApp
                </a><br>
                <a href="/pages/contact.php" target="_blank" rel="noopener noreferrer">
                    Send a message
                </a>
            </div>
        </div>
        <div class="footer-div">
            <div>
                <h4>Service area:</h4>
                <a id="footer-google-maps-link" href="<?= $google_maps_url ?>" target="_blank"
                    rel="noopener noreferrer">
                    <?= $service_area ?><iframe id="footer-google-maps" src="<?= $google_maps_iframe_url ?>"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </a>
            </div>
        </div>
    </section>
    <section id="footer-bottom-section" class="footer-section">
        <div class="footer-bottom-div footer-div">
            <p>
                Family owned.<br>
                Local company, located in Oak Park, CA.<br><br>

                &copy; <?= date("Y") ?> DPro7.<br>
                All rights reserved.<br><br>

                Software licensed under the
                <a href="/LICENSE" target="_blank" rel="noopener noreferrer">
                    GNU AGPLv3
                </a>.
                <br>
                Source code available on
                <a href="https://github.com/devicepro007/LockWise" target="_blank" rel="noopener noreferrer">
                    GitHub
                </a>.
            </p>
        </div>
        <div class="footer-bottom-div footer-div">
            <p>
                Made by DPro7.<br>
                This website is open-source software<br>
                licensed under the GNU AGPLv3.
            </p>
            <a href="https://github.com/devicepro007" target="_blank" rel="noopener noreferrer">
                See DPro7's page
            </a>
        </div>
    </section>
</footer>