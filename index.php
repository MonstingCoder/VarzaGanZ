<?php declare(strict_types = 1); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, PHP">
    <meta name="description" content="php roadmap">
    <meta name="author" content="monsco">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="2.5">
    
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

$mobil = [
    'avanza',
    'xenia',
    'yaris',
    'jazz',
];
$cars = [
    'brand' => 'nissan',
    'model' => 'gtr nismo',
    'year' => '1905',
];

define('laptop', [[
        'brand' => 'macbook pro 16 inch',
        'chip' => 'm2 max 38 core gpu',
        'memory' => '96 gb unified memory',
        'storage' => '8 tb',
    ], [
        'brand' => 'asus zenbook',
        'chip' => 'core ultra 7',
        'memory' => '32 gb on chip',
        'storage' => '1 tb',
    ], [
        'brand' => 'lenovo slim yoga',
        'chip' => 'core i7 12600p',
        'memory' => '16 gb lpddr5',
        'storage' => '1 tb',
    ], [
        'brand' => 'acer helios predator',
        'chip' => 'core i9 11950hx',
        'memory' => '64 gb ddr5x',
        'storage' => '2 tb',
    ], [
        'brand' => 'msi bravo',
        'chip' => 'ryzen 5 5500h',
        'memory' => '16 gb ddr4',
        'storage' => '512 gb',
    ],
]);

/*
    echo "brand\t\tchip\t\t\tstorage";
    for ($i = 0; $i < count(laptop); $i++) {
        echo "\n" . laptop[$i]['brand'] . "\t\t" . laptop[$i]['chip'] . "\t\t" . laptop[$i]['storage'];
    }
*/
// /*
    foreach(laptop as $arr) {
        foreach($arr as $key => $val) {
            echo "$key\t: $val\n";
        }

        echo "\n";
    }
// */

?>
</pre>
    
</body>
</html>