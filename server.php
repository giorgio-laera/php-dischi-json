<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title = $_POST['title'];
$artist = $_POST['artist'];
$cover = $_POST['cover'];
$year = $_POST['year'];
$genre = $_POST['genre'];

$string_discs = file_get_contents('./discs.json');

$discs = json_decode($string_discs, true);

$discs[] = [  
    "title"  => $title ,
    "artist" => $artist ,
    "cover"  => $cover ,
    "year"   => $year ,
    "genre"  => $genre 
    ];

$string_discs = json_encode($discs);
file_put_contents('./discs.json', $string_discs);

header('Location: ./index.php');
//aggiunti comandi per permettere di cambiare file json
// cd /Applications/XAMPP/xamppfiles/htdocs/php_boolean/dischi-json
// chmod 777 discs.json
// chmod 777 .
?>
