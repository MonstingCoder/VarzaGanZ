<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        php basic
    </title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Code&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="title">
    OUTPUT
</div>
<div style="font-size: 10px; margin: 2%;">
    <?php
    define('super_bike', [
        'kawaski h2 hyper charge',
        'ducati panigalle v4 superlegera',
        'ninja zx25r turbo trickstar',
        'kawasaki zx4rr',
        'yamaha nmax 155 abs',
        'yamaha x-ride 115 twin turbo',
        'honda adv 165 abs',
    ]);
    define('rencana_modif', [
        'body' => [
            'speedo meter',
            'lampu sen',
            'suspensi depan',
            'rem belakang',
        ],
        'mesin' => [
            'naikkan rasio kompresi',
            'upgrade pembakaran',
            'upgrade knalpot',
            'servis injeksi',
            'ganti oli shell merah full sintetik',
            'kirian' => [
                'pasang roller 10 gram',
                'pasang per cvt 2000 rpm',
                'pasang per sentri 1500 rpm',
                'papas kipas pulley',
                'ganti venbelt senyap',
            ],
        ],
        'opsional' => [
            'pasang turbo',
            'bore-up tipis 135cc',
            'lampu depan' => [
                'lampu dekat hemat daya (always on)',
                'lampu sorot',
                'lampu super terang',
            ],
        ]
    ]);
    ?>

    <form action="<?= $_SERVER['PHP_SELF'];?>" method="get">
        <label>
            pilih motor yang ingin dibeli : <br>
            <select name="motor">
            <?php foreach (super_bike as $motor):?>
                <?php if ($motor == super_bike[5]):?>
                    <option value="<?= htmlspecialchars($motor);?>" selected>
                        <?= htmlspecialchars($motor);?>
                    </option>
                    <?php continue;?>
                <?php endif;?>
                <option value="<?= htmlspecialchars($motor);?>">
                    <?= htmlspecialchars($motor);?>
                </option>
            <?php endforeach;?>
            </select><br>
            <input onclick="alert('pembelian berhasil')" type="submit" value="beli">
        </label>
    </form>
</div>
<pre><div class="output"><?php

    $motor_pilihan = htmlspecialchars($_GET['motor']);
    echo "pilihan\t: $motor_pilihan\n";
    echo "status\t: akan segera dikirimkan ke alamat anda...\n";

?></div></pre>

</body>
</html>