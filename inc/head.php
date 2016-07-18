<?php
    $thisPage = substr($_SERVER['REQUEST_URI'], 9);
    $thisDay = explode(".", $thisPage);
    $thisLesson = substr($thisDay[0], 6);
    $pageDirectory = $url.'/lessons';
    $pageArray = array_slice(scandir($pageDirectory), 2);
    $pageKey = array_search($thisPage, $pageArray);
    $lastPage = end($pageArray);

    function bin($bin, $output){
        echo '<a class="jsbin-embed" href="http://jsbin.com/'.$bin.'/embed?'.$output.'"></a>';
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootcamp 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body class="padify">
    <?php include 'header.php'; ?>
