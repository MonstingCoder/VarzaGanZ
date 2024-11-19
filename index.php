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
<pre><div class="output"><?php

    $form0 = [
        'gender' => [
            'Laki-laki',
            'Perempuan',
        ],
        'kelas' => []
    ]; for ($i = 1; $i <= 20; $i++) {
        $form0['kelas'][] = '3IA' . sprintf("%02d", $i);
    }

    // var_dump($form0);

?></div></pre>
<div class="others">
    <div class="form">
        <h1>
            MASUK
        </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <fieldset>
                <legend>
                    Data Siswa :
                </legend>
                <label>
                    Nama <br>
                    <textarea name="nama"></textarea>
                </label><br>
                <datalist id="kelas">
                    <?php foreach ($form0['kelas'] as $k):?>
                        <option value="<?= $k?>">
                            Kelas : <?= $k?>
                        </option>
                    <?php endforeach;?>
                </datalist>
                <label>
                    Kelas <br>
                    <input type="text" list="kelas" name="kelas">
                </label><br>
                <label>
                    Gender <br>
                    <select name="gender">
                        <option value="<?= null?>">
                            Pilih
                        </option>
                        <?php foreach($form0['gender'] as $g):?>
                            <option value="<?= $g?>">
                                <?= $g?>
                            </option>
                        <?php endforeach;?>
                    </select>
                </label><br>
                <label>
                    Password <br>
                    <input type="password" name="password">
                </label><br>
            </fieldset>
            <div class="button">
                <button type="submit">KIRIM</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </div>
    <div class="result">
        <h1>
            Data Siswa
        </h1>
        <table>
            <thead>
                <tr>
                    <?php foreach ($_POST as $key => $value):?>
                        <th>
                            <?= $key?>
                        </th>
                    <?php endforeach;?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($_POST as $k):?>
                        <td>
                            <?= $k?>
                        </td>
                    <?php endforeach;?>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>