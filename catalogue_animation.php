<?php

?>
<?php


$donnees = array(

    '1' => array(
//
        'source' => 'images/image animation/71080.jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),
    '2' => array(
        'source' => 'images/image animation/68207.jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),
    '3' => array(
        'source' => 'images/image animation/71080.jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),

    '4' => array(
        'source' => 'images/image animation/71083.jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),
    '5' => array(
        'source' => 'images/image animation/71084.jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),
    '6' => array(
        'source' => 'images/image animation/71086.jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),
    '7' => array(
        'source' => 'images/image animation/71090.jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),
    '8' => array(
        'source' => 'images/image animation/71092.jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),
    '9' => array(
        'source' => 'images/image animation/71094.jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),
    '10' => array(
        'source' => 'images/image animation/75752.jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),
    '11' => array(
        'source' => 'images/image animation/83371.jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),
    '12' => array(
        'source' => 'images/image animation/95477.jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),
    '13' => array(
        'source' => 'images/image animation/95480.jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),
    '14' => array(
        'source' => 'images/image animation/95481.jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),
    '15' => array(
        'source' => 'images/image animation/95482.jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),


);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <meta charset="UTF-8">
    <title>Animation</title>


</head>
<body style="background-color: bisque">
<h2>Enfants</h2>
<div id="main_an">
    <ul>
        <?php
        foreach ($donnees as $cle => $value) { ?>
            <li>
                <a href="<?php echo $donnees[$cle]['lien'] ?>">
                    <img src="<?php echo $donnees[$cle]['source'] ?>"
                         alt="<?php echo $donnees[$cle]['alt'] ?>"/>
                </a>

            </li>
        <?php }
        ?>

    </ul>
</div>




</body>
</html>

