<?php
/**
 * Created by PhpStorm.
 * User: rgueye
 * Date: 2015-12-22
 * Time: 11:50
 */
$username = "";
$motdepasseEncrypte = encrypter_mdp($motdepasse);
$query_str = "SELECT * FROM $table_utilisateur WHERE username='$username' AND motdepasse='$motdepasseEncrypte'";