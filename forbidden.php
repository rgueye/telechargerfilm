<?php
require_once '_defines.php';
require_once 'data/_main_data.php';
$site_data[PAGE_ID] = 'forbidden';
require_once 'view_parts/_page_base.php';
?>

<p style="color: white;">Accès non autorisé</p>

<?php
require_once 'view_parts/_page_bottom.php';
?>