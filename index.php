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

<form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
    <label>
        nama <br>
        <input name="nama" type="text" value="<?= null;?>">
    </label><br>
    <label>
        umur <br>
        <input name="umur" type="text" value="<?= null;?>">
    </label><br>
    <label>
        waktu (saat ini) <br>
        <input name="waktu" type="text" value="<?= null;?>">
    </label><br><br>
    <input type="submit" value="kirim">
    <input type="reset" value="ulangi">
</form>
<!-- <?= $_GET['word'];?> add : http://127.0.0.1:8000/?word=hello%20world -->

<p>Output</p>
<pre>
<?php

$nama = htmlspecialchars($_POST['nama']);
$umur = (int) htmlspecialchars($_POST['umur']);
$waktu = htmlspecialchars($_POST['waktu']);

function sapa(
    $nama = 'admin',
    $waktu = 'datang'
) {
    return htmlspecialchars("hallo $nama, selamat $waktu\n");
}

echo "default\t: ", sapa();
echo "filled\t: ", sapa($nama, $waktu);

?>
</pre>
<input type="color" name="" id="">

</body>
</html>