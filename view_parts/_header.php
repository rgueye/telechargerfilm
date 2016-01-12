<div id="header_ag">
    <h1><?= ucfirst($site_data[PAGE_ID]); ?></h1>
    <?php require_once '_login_out_form.php'; ?>
    <?php require_once '_main_menu.php'; ?>
<!--    corriger pour tomber dans le url SITE_URL internet quand il sera sur le domaine et en place -->
    <p><?php echo "<a href='" .LOCAL_URL.'/index.php'. "'>Accueil</a>"; ?> </p>
    <p><?php echo "<a href='" .LOCAL_URL.'/contact.php'. "'>Contact</a>"; ?> </p>
    <p><?php echo "<a href='" .LOCAL_URL.'/dashboard.php'."'>Nos films</a>"; ?> </p>
    <p><?php echo "<a href='" .LOCAL_URL.'/form.php'. "'>Inscription</a>"; ?> </p>

    <?php
    if ($site_data[USER_IS_LOGGED]) {?>

    <p><?php echo "<a href='" .LOCAL_URL.'/admin.php'. "'>Admin</a>"; ?> </p>
    <?php } ?>

</div>

<div id="header_ag2">

</div>