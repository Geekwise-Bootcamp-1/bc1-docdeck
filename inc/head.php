<?php
    $thisPage = substr($_SERVER['REQUEST_URI'], 7);
    $thisDay = explode(".", $thisPage);
    $pageDirectory = $url.'/pages';
    $pageArray = array_slice(scandir($pageDirectory), 2);
    $pageKey = array_search($thisPage, $pageArray);
    $lastPage = end($pageArray);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bootcamp 1 | <?php echo ucfirst($thisDay[0]); ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <?php include 'header.php'; ?>
