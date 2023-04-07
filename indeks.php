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
    <link rel = "stylesheet" href = "style.css">
    <title>Zakat Zekat Zekat</title>
</head>

<body>
   <form method="post">
     <div class = "wrap">
        <div class="header">
            <h1> Data Pembayaran Zakat Zekat Zekat</h1>
            <p>Pembayaran Zakat Masyarakat Perumahan Melati Semuanya Indah </p>
        </div>
        <div class= "label">
        <fieldset>
            <legend> </legend>
            <p>
                <label for="nama">Nama</label> <br>
                <input name="nama" type="text" placeholder="Tulis Disini"></input><br>
            </p>
            <p>
                <label for="tanggungan">Tanggungan</label><br>
                <input name="tanggungan" type="number"></input><br>
            </p>
            <p>
                <label for="NA">Nama Amil</label> <br>
                <input name="NA" type="text"></input>
            </p>
            Harga Beras <select name="hb"> <br>
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
            
            <button type="submit" name="btn-tambah">Tambah</button>
        </fieldset>
            </div>
    </form>
    </div>
    <?php
    if (isset($_POST['btn-tambah'])) {
          $nama = htmlspecialchars($_POST['nama']);
          $tanggungan = htmlspecialchars($_POST['tanggungan']);
          $hb = htmlspecialchars($_POST['hb']);
          $idHb = $db->tampil_Data_Satu("SELECT * FROM `harga_beras` WHERE `id`= $hb ");
          $tb = intval($tanggungan) * intval($idHb['harga_beras']);
          $NA = htmlspecialchars($_POST['NA']);

          $queryInsert ="INSERT INTO `pembayaran_zakat`(`nama`, `tanggungan`, `harga_beras`, `total_bayar`, `nama_amil`) 
          VALUES ('$nama','$tanggungan','$hb','$tb','$NA')";
          $db->Insert($queryInsert);
    ?>
      <meta http-equiv="refresh" content="0; url= indeks.php">
    <?php
    }
    ?>
    
    <table class = "data-tabel">
        <caption class="title"><b>Data Manusia yang Sudah Membayar Zakat</b> </caption>
        <thead>
            <tr>
            <th>nama</th>
            <th>tanggungan</th>
            <th>harga_beras</th>
            <th>total_bayar</th>
            <th>nama_amil</th>
            </tr>
        </thead>
        <tbody>
              <?php
        $query = "SELECT *, harga_beras.harga_beras FROM pembayaran_zakat INNER JOIN harga_beras ON pembayaran_zakat.harga_beras=harga_beras.id";
        foreach ($db->tampil_Data_Banyak($query) as $value) {
            ?>
                <tr>
                    <td><?php echo $value['nama'] ?></td>
                    <td><?php echo $value['tanggungan'] ?></td>
                    <td><?php echo $value['harga_beras'] ?></td>
                    <td><?php echo $value['total_bayar'] ?></td>
                    <td><?php echo $value['nama_amil'] ?></td>
                </tr>

            <?php
        }
        ?>
        </tbody>
      
    </table>

   
</body>
</html>

