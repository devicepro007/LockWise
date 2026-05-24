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

    <main id="contact-main">
        <section id="contact-section" class="page-section section">
            <h1>Contact us</h1>
            <div class="center-div">
                <div id="contact-card" class="card">
                    <form class="form" action="/send-message.php" method="post">
                        <label class="first-label" for="name-input">Name:</label>
                        <input required id="name-input" class="name-input" type="text" name="name-input"
                            placeholder="Your name" />
                        <label for="email-input">Email:</label>
                        <input required id="email-input" class="email-input" type="email" name="email-input"
                            placeholder="Your email" />
                        <label for="phone-input">Phone:</label>
                        <input required id="phone-input" class="phone-input" type="tel" name="phone-input"
                            placeholder="Your phone number" />
                        <label for="address-input">Address:</label>
                        <input required id="address-input" class="address-input" type="text" name="address-input"
                            placeholder="Your address" />
                        <label for="message-input">Message:</label>
                        <textarea required id="message-input" spellcheck="true" name="message-input"
                            placeholder="Your message" rows="6"></textarea>
                        <button class="button" type="submit" value="Submit">Send</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <?php require $_SERVER['DOCUMENT_ROOT'] . "/assets/footer.php"; ?>
</body>

</html>