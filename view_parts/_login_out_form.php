<?php

$error = false;
if (array_key_exists('username', $_POST) && array_key_exists('password', $_POST)) {

    $username = $_POST['username'];
    $password = $_POST['password'];



    //C'est ici qu'on va venir dans la base de données que l'utilisateur existe
    if ($username == "dieu" && $password == "qwerty") {
        $_SESSION[USER_IS_LOGGED] = true;
        $site_data[USER_IS_LOGGED] = true;
    } else {
        $error = true;
    }
}
if (array_key_exists('dologout', $_POST)) {
    $site_data[USER_IS_LOGGED] = false;
    session_destroy();
}
?>

<?php if(! $site_data[USER_IS_LOGGED]) {
//Si l'utilisateur
    ?>
    <form id="login" method="post" name="login">

        <?php if ($error == true) { ?>
            <p style="color: red">Connexion échouée</p>
        <?php } ?>


        <label for="username">Pseudo : </label>
        <input type="text" name="username" id="username" value=""/>
        <label for="password">Mot de passe : </label>
        <input type="password" name="password" id="password" />
        <input type="submit" name="dologin" id="dologin" value="Entrer"/>
    </form>
<?php } else { //Si l'utilisateur est connecté ?>
    <form id="logout" method="post" name="logout">
        <input type="submit" name="dologout" value="Quitter"/>
    </form>
<?php } ?>