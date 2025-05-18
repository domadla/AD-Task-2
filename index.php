<?php
require BASE_PATH . '/vendor/autoload.php';

require_once BASE_PATH . '/handlers/pageData.handler.php';
require_once BASE_PATH . '/components/templates/foot.component.php';
require_once BASE_PATH . '/components/templates/head.component.php';
require_once BASE_PATH . '/components/templates/nav.component.php';
?>

<?php
head('SixthString');
navHeader($navList);
?>

<main class="homepage-main">
    <h1>Welcome to SixthString!</h1>
    <p>Your one-stop shop for quality <strong>Acoustic</strong> and <strong>Electric guitars</strong>.</p>
    <p>Browse our collection and find the perfect guitar for your sound.</p>
</main>

<?php
footer();
?>