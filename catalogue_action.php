

<?php



$donnees = array(
    '1' => array(
        'source' => 'images/images action/images(1).jpg',
        'lien' => '',
        'alt' => 'Rebelle',
    ),

    '2' => array(
        'source' => 'images/images action/557854.jpg-r_160_240-b_1_D6D6D6-f_jpg-q_x-xxyxx.jpg',
        'lien' => '',
        'alt' => '1',
    ),

    '3' => array(
        'source' =>  'images/images action/images(2).jpg',
        'lien' => '',
        'alt' => '2',
    ),

    '4' => array(
        'source' => 'images/images action/images(4).jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),

    '5' => array(
        'source' => 'images/images action/images(5).jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),

    '6' => array(
        'source' => 'images/images action/images(6).jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),

    '7' => array(
        'source' => 'images/images action/372128.jpg-r_160_240-b_1_D6D6D6-f_jpg-q_x-xxyxx.jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),

    '8' => array(
        'source' => 'images/images action/images(8).jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),

    '9' => array(
        'source' => 'images/images action/images(9).jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),

    '10' => array(
        'source' => 'images/images action/images(10).jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),


    '11' => array(
        'source' => 'images/images action/images(11).jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),

    '12' => array(
        'source' => 'images/images action/images(12).jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),

    '13' => array(
        'source' => 'images/images action/téléchargement (7).jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),

    '14' => array(
        'source' => 'images/images action/téléchargement (3).jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),

    '15' => array(
        'source' => 'images/images action/téléchargement (6).jpg',
        'lien' => '',
        'alt' => 'image indisponible'
    ),

    '16' => array(
        'source' => 'images/images action/téléchargement (1).jpg',
        'lien' => '',
        'alt' => 'image indisponible'
    ),

    '17' => array(
        'source' => 'images/images action/téléchargement (2).jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),

    '18' => array(
        'source' => 'images/images action/téléchargement.jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),

    '19' => array(
        'source' => 'images/images action/085787.jpg-r_160_240-b_1_D6D6D6-f_jpg-q_x-xxyxx.jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),

    '20' => array(
        'source' => 'images/images action/261485.jpg-r_160_240-b_1_D6D6D6-f_jpg-q_x-xxyxx.jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),

    '21' => array(
        'source' => 'images/images action/images.jpg',
        'lien' => '',
        'alt' => 'image indisponible',
    ),


//\'detail_sicario.php\'

);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <meta charset="UTF-8">
    <title>Action et aventure</title>


</head>
<body>
<h2>Action et aventure</h2>
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









</body>
</html>

-