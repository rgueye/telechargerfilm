
<?php
$donnees = array( 'source' => 'images/image animation/11356.jpg')
?>
<!DOCTYPE html >
<html lang = "fr" >
<head >
    <meta charset = "UTF-8" >
    <title > Fichier HTML </title>
</head >
<body >
<?php
foreach($donnees as $key => $value)
{
    echo '<td>'.$value['icone'] .'</td>';
}

?>

<?php
foreach($donnees as $key => $value)
{
    echo '' ;
}
?>
</body >
</html >