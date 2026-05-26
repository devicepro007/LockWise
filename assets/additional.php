<?php
/*
 * Licensed under the GNU AGPLv3
 * Copyright (C) 2026 DPro7
 */

function toID($string)
{
    $string = strtolower($string);
    $string = preg_replace('/[^a-z0-9]+/', '-', $string);
    $string = trim($string, '-');
    return $string;
}
$website_version = "v1.0.1";
$company_name = "LockWise";
$url_contact_phone_number = "+14242809537";
$display_contact_phone_number = "+1 (424) 280-9537";
$contact_email = "info@lockwiseusa.com";
$service_area = "The United States of America";
$google_maps_url = "https://maps.app.goo.gl/ABeKb7Fw3ZmeYjYk7";
$google_maps_iframe_url = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d65148589.467419095!2d155.04196380153644!3d4.708364202134552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2saz!4v1772051108632!5m2!1sen!2saz";
$amazon_page_url = "https://www.amazon.com/";
$social_media_links = [
    "Instagram" => "https://www.instagram.com/kvas.az"
];
$products = [
    "Lock 1" => [
        "description" => "An advanced smart lock featuring voice scan unlock, 3D face recognition, semiconductor fingerprint access, IC/NFC card support, live video calling with active intercom, Tuya WiFi app control, HD color screen monitoring, multilingual support, and multiple emergency power options for complete smart home security.",
        "best-for" => "modern smart homes, busy families, Airbnb hosts, offices, and users seeking premium multi-access security with remote communication features.",
        "features" => [
            "Access methods" => "Voice scan unlock, password entry, semiconductor fingerprint, IC card, NFC unlock, mechanical key backup, and 3D face recognition",
            "Connectivity" => "WiFi Tuya app remote control, live video calling, active intercom, and monitoring from anywhere",
            "Security features" => "Motion sensor alerts, low battery alarm, doorbell function, and enhanced smart security monitoring",
            "Display & visibility" => "HD color screen with color night vision support",
            "Power & backup" => "5000mAh lithium battery with USB-A and USB-C emergency power support",
            "Language support" => "Supports 16 interface languages including English, Brazilian Portuguese, Indonesian, Turkish, Russian, Arabic, Portuguese, Thai, Spanish, Vietnamese, French, Hebrew, Kazakh, Uzbek, German, and Chinese",
            "Smart integration" => "Supports smart home automation, remote access workflows, and voice assistant integration"
        ]
    ],
    "Lock 2" => [
        "description" => "An advanced smart lock featuring voice scan unlock, 3D face recognition, semiconductor fingerprint access, IC/NFC card support, live video calling with active intercom, Tuya WiFi app control, HD color screen monitoring, multilingual support, and multiple emergency power options for complete smart home security.",
        "best-for" => "modern smart homes, busy families, Airbnb hosts, offices, and users seeking premium multi-access security with remote communication features.",
        "features" => [
            "Access methods" => "Voice scan unlock, password entry, semiconductor fingerprint, IC card, NFC unlock, mechanical key backup, and 3D face recognition",
            "Connectivity" => "WiFi Tuya app remote control, live video calling, active intercom, and monitoring from anywhere",
            "Security features" => "Motion sensor alerts, low battery alarm, doorbell function, and enhanced smart security monitoring",
            "Display & visibility" => "HD color screen with color night vision support",
            "Power & backup" => "5000mAh lithium battery with USB-A and USB-C emergency power support",
            "Language support" => "Supports 16 interface languages including English, Brazilian Portuguese, Indonesian, Turkish, Russian, Arabic, Portuguese, Thai, Spanish, Vietnamese, French, Hebrew, Kazakh, Uzbek, German, and Chinese",
            "Smart integration" => "Supports smart home automation, remote access workflows, and voice assistant integration"
        ]
    ]
];
$pages = [
    "Home" => "/",
    "Products" => "/pages/products.php",
    "About" => "/pages/about.php",
    "Contact" => "/pages/contact.php"
];
$homepage_sections = [
    "Why choose us?" => [
        "Engineered for strength" => "Every $company_name product is built with reinforced internal components and durable materials to ensure your doors stay secure. Our locks are rigorously designed to withstand daily use and provide lasting protection for your home or business.",
        "Modern design" => "Our locks combine sleek, contemporary aesthetics with proven reliability. Each model is carefully crafted to function smoothly, resist wear over time, and complement the style of any door, giving you security without compromising on design.",
        "Made in the United States" => "$company_name locks are designed and assembled in the United States, ensuring high-quality craftsmanship and strict adherence to durability standards. Every lock is produced with precision and care to deliver consistent performance you can trust.",
        "Nationwide free delivery" => "No matter where you live in the United States, $company_name delivers your locks quickly and free of charge. Our nationwide shipping ensures your chosen lock arrives safely and promptly, making it simple and convenient to upgrade the security of your doors."
    ],
    "What can we offer?" => [],
    "What is the buying process?" => [
        "Step 1 – Browse & compare" => "Explore all available $company_name locks on our detailed products page. Compare features, finishes, sizes, and technical specifications to find the perfect lock that fits your home or business needs.",
        "Step 2 – Choose your model" => "Decide which $company_name lock is right for you. Review key details, compare functionality and style, and ensure the model you select matches your door type and desired security level.",
        "Step 3 – Purchase Securely" => "Currently, you can buy your chosen lock directly on Amazon for fast and reliable shipping, and secure checkout. Soon, you’ll also be able to purchase directly from our website for even more convenience."
    ],
    "What makes our locks reliable?" => [
        "High-Quality materials" => "Each LockWise lock is crafted from premium, durable materials chosen for strength and longevity. From hardened steel cores to corrosion-resistant finishes, every component is designed to withstand daily use and provide reliable protection.",
        "Reliable design" => "Our locks are engineered for consistent performance and ease of use. Thoughtful design ensures smooth operation, resistance to wear, and compatibility with standard doors, giving you security you can count on every day.",
        "Rigorous testing" => "Before reaching your door, every LockWise model undergoes thorough testing to ensure durability, reliability, and safety. From mechanical stress to environmental exposure, we make sure each lock performs flawlessly under real-world conditions.",
        "Precision engineering" => "$company_name combines advanced design with careful assembly to ensure smooth operation, tight tolerances, and reliable functionality. Every component is designed to work in harmony for maximum security and user convenience."
    ]
];
// Populate the "What can we offer?" section directly from the array
foreach ($products as $product_name => $data) {
    $homepage_sections["What can we offer?"][$product_name] = $data['description'];
}
$homepage_sections_urls = [
    "Why choose us?" => ["contact", "Contact us"],
    "What can we offer?" => ["products", "More about our locks"]
];
?>
<link rel="stylesheet" href="/css/style.css" />
<title>Premium door locks made in the United States | <?= $company_name ?></title>
<meta name="description"
    content="Smart locks for homes, offices, and businesses—secure keyless access, remote control, and modern protection designed for convenience and peace of mind.">
<link rel="icon" href="/images/favicon.ico">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="manifest" href="/site.webmanifest" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<meta name="viewport" content="initial-scale=1, viewport-fit=cover, user-scalable=no" />
<meta property="og:site_name" content="<?= $company_name ?>">
<meta property="og:locale" content="en_US">
<meta property="og:title"
    content="Premium smart locks made in the US with a modern, reliable design | <?= $company_name ?>">
<meta property="og:description"
    content="Smart locks for homes, offices, and businesses—secure keyless access, remote control, and modern protection designed for convenience and peace of mind.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://lockwiseusa.com/">
<meta property="og:image" content="/images/og-image.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:alt" content="<?= $company_name ?> | Construction and repair services">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title"
    content="Premium smart locks made in the US with a modern, reliable design | <?= $company_name ?>">
<meta name="twitter:description"
    content="High quality smart locks for with secure keyless access, remote control, and modern protection designed for convenience and peace of mind.">
<meta name="twitter:image" content="/images/og-image.jpg">