<?php
require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH . '/utils/DisplayGuitars.utils.php';

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
    displayAcousticGuitars($productList, 'assets/img/');
    ?>
</section>

<?php
footer();
?>