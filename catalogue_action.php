

<?php



$donnees = array(
    '1' => array( 'icone' => '<img src="images/images action/images (1).jpg" >'),
    '2' => array( 'icone' => '<img src="images/images action/557854.jpg-r_160_240-b_1_D6D6D6-f_jpg-q_x-xxyxx.jpg">'),
    '3' => array('icone' =>  '<img src="images/images action/images (2).jpg">'),
    '4' => array( 'icone' => '<img src="images/images action/images (4).jpg">'),
    '5' => array( 'icone' => '<img src="images/images action/images (5).jpg">'),
    '6' => array( 'icone' => '<img src="images/images action/images (6).jpg">'),
    '7' => array( 'icone' => '<img src="images/images action/372128.jpg-r_160_240-b_1_D6D6D6-f_jpg-q_x-xxyxx.jpg">'),
    '8' => array( 'icone' => '<img src="images/images action/images (8).jpg">'),
    '9' => array( 'icone' => '<img src="images/images action/images (9).jpg">'),
    '10' => array( 'icone' => '<img src="images/images action/images (10).jpg">'),
    '11' => array( 'icone' => '<img src="images/images action/images (11).jpg">'),
    '12' => array( 'icone' => '<img src="images/images action/images (12).jpg">'),
    '13' => array( 'icone' => '<img src="images/images action/téléchargement (7).jpg">'),
    '14' => array( 'icone' => '<img src="images/images action/téléchargement (3).jpg">'),
    '15' => array( 'icone' => '<img src="images/images action/téléchargement (6).jpg">'),
    '16' => array( 'icone' => '<img src="images/images action/téléchargement (1).jpg">'),
    '17' => array( 'icone' => '<img src="images/images action/téléchargement (2).jpg">'),
    '18' => array( 'icone' => '<img src="images/images action/téléchargement.jpg">'),
    '19' => array( 'icone' => '<img src="images/images action/085787.jpg-r_160_240-b_1_D6D6D6-f_jpg-q_x-xxyxx.jpg">'),
    '20' => array( 'icone' => '<a href="detail_sicario.php" ><img src="images/images action/261485.jpg-r_160_240-b_1_D6D6D6-f_jpg-q_x-xxyxx.jpg"></a>'),
    '23' => array( 'icone' => '<img src="images/images action/images.jpg">'),




);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <meta charset="UTF-8">
    <title>action et aventure</title>


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