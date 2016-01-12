<?php
require_once '_defines.php';
require_once 'data/_main_data.php';
$site_data[PAGE_ID] = 'formulaire';
require_once 'view_parts/_page_base.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/film.css" />
    <title>Film</title>
</head>
<body>
<h1>NETFILM</h1>
<h4>Se deconnecter</h4>
<div id="text"><h2>Entrez vos informations de paiement</h2>
<h3>Ne vous inquietez pas, nous vous enverrons un courriel de rappel trois jours avant la fin de votre essai gratuit.</h3>
<ul><li>Aucuns frais ne vous seront facturés avant la fin de votre essai gratuit le 16-01-22</li></ul>
<ul><li>Aucun contrat à long terme, annulez en ligne n'importe quand</li></ul>
<ul><li>Diffusion illimitée. Visionnez sur 4 écrans à la fois pour 11,99 $ par mois. HD et Ultra HD disponibles.</li></ul></div>
<div class="margin2px"><div id="blocLogin" class="blocTitreOrange"><h2>Déjà client</h2>
        <form method="post" action="/Commande/login_check"><fieldset class='auth'><ul>
                    <li><label for="username">Adresse e-mail&nbsp; </label><input class="lab1"  type="text" maxlength="30" size="20" name="_username" /></li><br />
                    <li><label for="password">Mot de passe&nbsp; </label><input  class="lab2" type="password" maxlength="30" size="20" name="_password"></li><br />
                    <li><div class="clear"></div></li><li><a href="/Accueil/Compte/motdepasse.php">&gt;&nbsp;Mot de passe oublié?&nbsp;</a></li><br />
                    <li class="boutonAlignCenter"><input id="bouttonSeConnecter" class="bouton" type="image" value="submit" src="images/bouton-connexion.png?"></li><br /></ul></fieldset></form></div>
    <h2>PREMIERE VISITE</h2>
        </html>

<?php
//require_once "view_parts/_header.php";
//var_dump($_POST); // Inspecter les données POST
$in_post = array_key_exists('register', $_POST); // En est en réception
//$in_post = ('POST' == $_SERVER['REQUEST_METHOD']); // On peut utiliser la méthode HTTP utilisée
/**
 * Validation du prenom
 */
$firstname_ok = false;
$firstname_msg = ''; // Message de feedback validation, affiché si non vide
if (array_key_exists('firstname', $_POST)) {
    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    // Validation du prenom : min 2 caractères
    $firstname_ok = (1 === preg_match('/^[A-Za-z]{2,}$/', $firstname));
    if ( ! $firstname_ok) { // Si le prénom n'est pas valide
        $firstname_msg = 'Le prénom ne doit contenir que des lettres (min 2).';
    }
//    var_dump($firstname);
//    var_dump($firstname_ok);
//    var_dump($firstname_msg);
}
/**
 * Validation du nom
 */
$lastname_ok = false;
$lastname_msg = ''; // Message de feedback validation, affiché si non vide
if (array_key_exists('lastname', $_POST)) {
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    // Validation du nom: min 2 caracteres
    $lastname_ok = (1 === preg_match('/^[A-Za-z]{2,}$/', $lastname));
    if ( ! $lastname_ok) { // Si le prénom n'est pas valide
        $lastname_msg = 'Le nom ne doit contenir que des lettres (min 2).';
    }
//    var_dump($lastname);
//    var_dump($lastname_ok);
}
/**
 * Validation du genre
 */
$gender_ok = array_key_exists('gender', $_POST);
$gender_msg = ''; // Message de feedback validation, affiché si non vide
if ( ! $gender_ok) { // Si le prénom n'est pas valide
    $gender_msg = 'Le sexe n\'est pas coché.';
}
/**
 * Validation du courriel
 */
$email_ok = false;
$email_msg = '';
if (array_key_exists('email', $_POST)) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $email_ok = (false !== $email);
    if ( ! $email_ok) { // Si le email n'est pas valide
        $email_msg = 'Le courriel n\'est pas valide.';
    }
//    var_dump($email);
//    var_dump($email_ok);
}
/**
 * Validation du pseudo
 */
$username_ok = false;
$username_msg = '';
if (array_key_exists('username', $_POST)) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // Validation du pseudo : min 4 caractères alpha ou chiffres
    $username_ok = (1 === preg_match('/^[a-zA-Z0-9]{2,}$/', $username));
    if ( ! $username_ok) { // Si le format du username n'est pas valide
        $username_msg = 'Le username ne doit contenir que des lettres (min 2).';
    } else {
        // Est ce que le username est libre ?
        require_once 'db/_user.php';
        $username_ok = ! username_exists($username);
        if ( ! $username_ok) {// Si le username est déjà utilisé
            $username_msg = "Le username" . $username . " est déjà pris";
        };
    }
//    var_dump($username);
//    var_dump($username_ok);
}
/**
 * Validation du mot de passe
 */
$password_ok = false;
$password_msg = '';
if (array_key_exists('password', $_POST)) {
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    // Validation du mot de passe: alpha, chiffres,caracteres speciaux, min de 4 caracteres
    $password_ok = (1 === preg_match('/^[a-zA-Z0-9%&$!*?]{4,}$/', $password));
    if ( ! $password_ok) { // Si le prénom n'est pas valide
        $password_msg = 'Le password ne doit contenir que des lettres et des caractères spéciaux (min 4).';
    }
//    var_dump($password);
//    var_dump($password_ok);
}
// validation confirmation mot de passe
$confirmpassword_ok= true;
$confirmpassword_msg = '';
if (array_key_exists('password', $_POST)) {
    $confirmpassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    // Validation du mot de passe: alpha, chiffres,caracteres speciaux, min de 4 caracteres
    $confirmpassword_ok = (1 === preg_match('/^[a-zA-Z0-9%&$!*?]{4,}$/', $confirmpassword));
    if ( ! $confirmpassword_ok) { // Si le prénom n'est pas valide
        $confirmpassword_msg = 'Le password ne doit contenir que des lettres et des caractères spéciaux (min 4).';
    }
//    var_dump($password);
//    var_dump($password_ok);
}
//validation  commentaires
$commentaires_ok= false;
$commentaires_msg = '';
if (array_key_exists('commentaires', $_POST)) {
    $commentaires = filter_input(INPUT_POST, 'commentaires', FILTER_SANITIZE_STRING);
    // Validation du commentaire ,caracteres speciaux, min de 300 caracteres
    $commentaires = (1 === preg_match('/^[a-zA-Z0-9%&$!*?]{300,}$/', $commentaires));
    if ( ! $commentaires_ok) { // Si le commentaire depasse 300 caracteres
        $commentaires_msg = 'Le nombre de caracteres ne doit pas depasser:(300 carac).';
    }
//    var_dump($password);
//    var_dump($password_ok);
}




if ($firstname_ok && $lastname_ok && $gender_ok && $email_ok && $username_ok && $password_ok && $commentaires_ok) {
    // On enregistre les données et s'en va sur une autre page
    require_once 'db/_user.php';
    $user_info = user_add($username, $password, $firstname, $lastname, $email,$commentaires,$gender);
    header("Location:index.php");
    exit;
}
?>

<form id="inscription" name="inscription" xmlns="http://www.w3.org/1999/html" method="post" novalidate="novalidate">
    <fieldset class='auth'><ul><li>
    <!--    Champ prenom-->
    <label for="firstname">Prénom :
    <input type="text" size="25" name="firstname" id="lab1"
           class="<?php echo $in_post && ! $firstname_ok ? 'error' : '';?>"
           value="<?php echo array_key_exists('firstname', $_POST) ? $_POST['firstname'] : '' ?>"
    />
    <?php if ($in_post && ! $firstname_ok) {
        echo "<p class='error_msg'>$firstname_msg</p>";
    } ?>
    </label><br />
    <!--    Champ nom-->
    <label for="lastname">Nom :
    <input type="text" size="25" name="lastname" id="lab2"
           class="<?php echo $in_post && ! $lastname_ok ? 'error' : '';?>"
           value="<?php echo array_key_exists('lastname', $_POST) ? $_POST['lastname'] : '' ?>"
    />
    <?php if ($in_post && ! $lastname_ok) {
        echo "<p class='error_msg'>$lastname_msg</p>";
    } ?>
    </label><br />
    <!--    Champ sexe-->
    <label>Genre :

    <input type="radio" name="gender" id="lab3" size="25" value="gender_male"/>H
        <?php echo (array_key_exists('gender', $_POST) && ($_POST['gender'] == 'gender_male')) ? 'checked="checked"' : '' ?></label><br />
    <label for="gender_female" >F</label><br />
    <input type="radio" name="gender" id="gender_female" value="gender_female"/>
        <?php echo (array_key_exists('gender', $_POST) && ($_POST['gender'] == 'gender_female')) ? 'checked="checked"' : '' ?>
    <?php if ($in_post && ! $gender_ok) {
        echo "<p class='error_msg'>$gender_msg</p>";
    } ?>

    <!--    Champ courriel -->
    <label for="email">Courriel :
    <input type="email" size="25" name="email" id="lab4"
           value="<?php echo array_key_exists('email', $_POST) ? $_POST['email'] : '' ?>"
           class="<?php echo $in_post && ! $email_ok ? 'error' : '';?>"
    />
    <?php if ($in_post && ! $email_ok) {
        echo "<p class='error_msg'>$email_msg</p>";
    } ?>
    </label><br />
    <!--    Champ pseudo -->
    <label for="username">Pseudo :
    <input type="text" name="username" size="25" id="lab5"
           value="<?php echo array_key_exists('username', $_POST) ? $_POST['username'] : '' ?>"
           class="<?php echo $in_post && ! $username_ok ? 'error' : '';?>"
    />
    <?php if ($in_post && ! $username_ok) {
        echo "<p class='error_msg'>$username_msg</p>";
    } ?>
    </label><br />
    <!--    Champ mot de passe -->
    <label for="password">Mot de passe:
    <input type="password" name="password" size="25" id="lab6"
           value="<?php echo array_key_exists('password', $_POST) ? $_POST['password'] : '' ?>"
           class="<?php echo $in_post && ! $password_ok ? 'error' : '';?>"
    />
    <?php if ($in_post && ! $password_ok) {
        echo "<p class='error_msg'>$password_msg</p>";
    } ?>
    </label><br />
    <label for="confirmpassword">Confirmer mot de passe :
    <input type="confirmpassword" name="confirmpassword" size="25" id="lab7"
           value="<?php echo array_key_exists('confirmpassword', $_POST) ? $_POST['confirmpassword'] : '' ?>"
           class="<?php echo $in_post && ! $confirmpassword_ok? 'error' : '';?>"
    />
                <!-- champ confirmer mot de passe  -->
    <?php if ($in_post && ! $confirmpassword_ok) {
        echo "<p class='error_msg'>$confirmpassword_msg</p>";
    } ?>

    </label><br />
                <!-- champ ville -->
                <label for="Residence"> Residence: </label> <br />   <select name="maselectbox" id="select01" > <optgroup label="Canada">
                        <option>Québec</option>
                        <option>Ontario</option>
                        <option>Colombie-Britannique</option> </optgroup>
                    <option>Montreal</option>
                    <optgroup label="États-Unis">
                        <option>Alabama</option>
                        <option>Floride</option>
                        <option>Texas</option>
                        <option>New York</option>
                        <option>Michingan</option>
                        <option>Atlanta</option></optgroup> </select>

              <label for="commentaires" > Commentaires:  <textarea rows="3" cols="40"  name="champ_text" id="lab8" value="<?php echo array_key_exists('commentaires', $_POST) ? $_POST['commentaires'] : '' ?>"
                                                                   class="<?php echo $in_post && ! $commentaires_ok ? 'error' : '';?>"></textarea> <?php if ($in_post && ! $commentaires_ok) {
                      echo "<p class='error_msg'>$commentaires_msg</p>";
                  } ?></label><br />

    <div><span id="champsObligatoires">*&nbsp;Champs obligatoires</span></div><div><input type="hidden" value="095c7362cd6ca7ade2742b5e73c678aec0e1df44" /><div class="separateur"></div>
    <!--    Submit -->

        <p>Paiement sécurisé</p>
        <p><img id="mastercard" src="images/mastercard-logo-69730E542B-seeklogo.com.gif" >
            <img id="ras" src="images/PP_Acceptance_Marks_for_LogoCenter_266x142.png?v1.5">
            <img id="visa" src="images/visa_logo_6.gif?v1.5"></p>
            <li class="boutonAlignCenter" id="ins"><input type="submit" name="register" id="register" value="S'inscrire" src="images/Bouton-Rouge.png"><li/>
            </li></ul></fieldset>

</body>

</form>

<?php require_once 'view_parts/_footer.php'; ?>