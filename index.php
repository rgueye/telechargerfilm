<?php
require_once '_defines.php';
require_once 'data/_main_data.php';
$site_data[PAGE_ID] = 'Accueil';
require_once 'view_parts/_page_base.php';
?>

<div id="main_an">
    <?php require_once "catalogue_action.php"?>
    <?php require_once "catalogue_animation.php"?>
<!--<img src="images/film-slate.jpg">-->
</div>

<?php
require_once 'view_parts/_page_bottom.php';
?>

