<?php
session_start();
//$site_data = array(); // Les variables du site
$site_data[USER_IS_LOGGED] = false; //L'utilisateur n'est pas connecté par défaut


//Si user_is_logged est dans le tableau de la session et que sa valeur est égale à true
if (array_key_exists(USER_IS_LOGGED, $_SESSION) && $_SESSION[USER_IS_LOGGED] == true) {
    $site_data[USER_IS_LOGGED] = true;

}