<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Konsep Pewarisan</h1>
    <div class="" style="font-size: 24px;">
        <?php
        include_once "OrangBiasa.php";
        include_once "OrangInggris.php";
        include_once "Mahasiswa.php";

        $james = new OrangBiasa('James');
        $james->ucapSalam();
        echo "<br>";

        $parto = new OrangIngriss('Parto');
        $parto->ucapSalam(); //Override
        echo "<br>";

        $emely = new Mahasiswa('Emely');
        $emely->ucapSalam();
        echo "<br>";
        $emely->setNim('701230005');
        $emely->setProdi('Sistem Informasi');

        $nilaiEmely = new Nilai();
        $nilaiEmely->setTugas(90);
        $nilaiEmely->setUts(76);
        $nilaiEmely->setUas(78);

        $emely->setNilai($nilaiEmely);
        $emely->tampilkanData();
        ?>
    </div>
</body>

</html>