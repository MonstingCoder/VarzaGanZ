<?php declare(strict_types = 1); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, PHP">
    <meta name="description" content="php roadmap">
    <meta name="author" content="monsco">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="2.5"> -->
    
    <title>Belajar PHP Dasar</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap">

<style>

    body {
        background-color: black;
        color: cyan;
        font-family: 'Fira Code', monospace;
        font-size: 140%;
        margin: 20px;
    }

    p {
        color: red;
        font-size: 160%;
        text-align: center
    }

</style>
</head>
<body>

<form method="post" action="<?= $_SERVER['PHP_SELF'];?>">
    <label>Nama Depan :
        <input type="text" name="fname">
    </label><br>
    <label>Nama Belakang :
        <input type="text" name="lname">
    </label><br>
    <input type="submit">
</form><br>
<?= $_REQUEST['fname']; ?> <?= $_REQUEST['lname']; ?>

<!--
<p>Output</p>
<pre>
    <?php

    $myVar = 10;
    var_dump($myVar);

    function change() {
        $GLOBALS['myVar'] = 19;
    }
    change();
    var_dump($myVar);

    ?>
</pre>
-->

</body>
</html>