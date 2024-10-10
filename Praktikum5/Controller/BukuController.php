<?php

require_once "Model/DaftarBukuModel.php";

class BukuController
{

    public function jalankan()
    {

        // menggunakan data model
        $dataModel = new DaftarBukuModel();

        // mengirim dataModel ke BukuView dan menampilkannya
        include "View/BukuView.php";

    }

}