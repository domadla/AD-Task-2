<?php
require BASE_PATH . '/vendor/autoload.php';


require_once BASE_PATH . '/handlers/pageData.handler.php';
require_once BASE_PATH . '/components/cards/displaycard.component.php';
require_once BASE_PATH . '/components/templates/foot.component.php';
require_once BASE_PATH . '/components/templates/head.component.php';
require_once BASE_PATH . '/components/templates/nav.component.php';
?>

<?php
head('SixthString');
navHeader($navList);
?>

<section>
    <?php
    $AcousticGuitars = array_filter($productList, function ($guitar) {
        return isset($guitar['category']) && $guitar['category'] === 'Acoustic';
    });
    displayGuitarCards($AcousticGuitars, 'assets/img/');
    ?>
</section>

<?php
footer();
?>