<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <?php
        require_once '_defines.php';
        require_once 'data/_main_data.php';
        $site_data[PAGE_ID] = 'Inscription';
        require_once 'view_parts/_page_base.php';
        require_once 'view_parts/_page_bottom.php';
        ?>
        <div id="logout">
            <?php
            require_once 'view_parts/_login_out_form.php';
            ?>
        </div>
