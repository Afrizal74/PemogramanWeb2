<?php
include "Orang.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello World Praktikum 2</h1>
    <div>
        <?php
        // proses instansiasi
        $mahasiswa = new Orang('Afrizaldi');

        // menggunakan setter dan getter
        $mahasiswa->setNama('Afrizaldi');
        $mahasiswa->setTglLahir('2005-04-07');
        $mahasiswa->setAlamat('Bagan Pete, Jambi');

        echo "<br>";
        echo "Data Mahasiswa " . $mahasiswa->getNama() . "<br>";
        echo "Nama : " . $mahasiswa->getNama() . "<br>";
        echo "Tgl Lahir : " . $mahasiswa->getTglLahir() . "<br>";
        echo "Alamat : " . $mahasiswa->getAlamat() . "<br>";

        // mahasiswa method
        $mahasiswa->ucapkanSalam();

        echo "<Br>";

        $mahasiswa2 = new Orang('Paduka Lord');

        $mahasiswa2->ucapkanSalam();
        ?>
    </div>
</body>

</html>