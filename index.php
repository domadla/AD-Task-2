<?php
require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH . '/utils/htmlEscape.utils.php';

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

<section class="grid grid-cols-3">
    <?php displayGuitarCards($productList); ?>
</section>

<?php
footer();
?>