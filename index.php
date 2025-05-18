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



<?php
footer();
?>