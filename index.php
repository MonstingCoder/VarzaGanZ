<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, PHP">
    <meta name="description" content="php roadmap">
    <meta name="author" content="monsco">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="0.5"> -->
    
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

<p>Output</p>
<pre>
<?php

function isPrime($num) {

    if ($num == 2) return true; // selmatkan angka 2 dari elminasi
    if ($num < 2) return false; // eliminasi x < 3
    if (($num % 2) == 0) return false; // eliminasi x genap
    for ($i = 3; $i * $i <= $num; $i += 2)
        if (($num % $i) == 0) return false;

    return true;

    // $temp = 0;
    // for ($i = $num - 2; ($i % $num) == 0; $i -= 2) { // eliminasi x genap
    //     $temp = $i;
    // }
    
    // if ($temp == $num) return true;
    // return false;
    
    // angka prima : 9, 15, 21, 25, 27, 33, 35, 39, ...
    // beda         :  +6  +6  +4  +3  +6  +2  +4

}

/*
    echo "cek angka prima\n\n";
    for ($i = -20; $i <= 100; $i++) echo "$i : " . isPrime($i) . "\n";
*/

/*
    for ($i = -20; $i <= 1_000_000; $i++) {
        if (isPrime($i)) {
            echo "$i ADALAH BILANGAN PRIMA!\n";
            continue;
        }

        echo "$i bukan bilangan prima :(\n";
    }
*/

?>
</pre>
    
</body>
</html>