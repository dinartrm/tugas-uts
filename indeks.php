<?php
include("koneksi.php");
$queryHarga = "SELECT * FROM `harga_beras`"
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOI ZAKAT</title>
</head>

<body>
    <form method="post">
        <label for="nama">Nama</label>
        <input name="nama" type="text"></input><br>

        <label for="tanggungan">Tanggungan</label>
        <input name="tanggungan" type="number"></input><br>
        <select name="hb">
            <?php
            foreach ($db->tampil_Data_Banyak($queryHarga) as $key => $value) {
                ?>
                <option value="<?php echo $value['id'] ?>">
                    <?php echo $value['harga_beras'] ?>
                </option>

                <?php
                }
            ?>
        </select>

        <label for="NA">Nama amil</label>
        <input name="NA" type="text"></input>

        <button type="submit" name="btn-tambah">Tambah</button>
    </form>