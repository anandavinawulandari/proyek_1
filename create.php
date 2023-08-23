<!DOCTYPE html>
<head>
<title>Form data barang</title>

<link rel="stylesheet" href="css/bootstrap.min.css">


</head>
<?php

include ('layout/header.php');
include ('layout/sidebar.php');
include ('layout/topbar.php'); 


?>
<body>
    <div class="container">
 
<?php
include "koneksi.php";
function input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id=input($_POST["id"]);
    $nama=input($_POST["nama"]);
    $jenis=input($_POST["jenis_barang"]);
    $harga=input($_POST["harga"]);
    $stok = input($_POST["stok"]);
    $gambar = input($_POST["gambar"]);


    $sql="insert into barang (id, nama_barang, jenis_barang, harga, stok, gambar) values
    ('$id','$nama','$jenis','$harga', '$stok', '$gambar')";

    $hasil=mysqli_query($kon,$sql);

    if ($hasil) {
        header("Location:barang.php");
    }else{
        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    }
}
?> 



    <h2>Input data barang</h2>
   
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <div class="form-group">
    <label>kode barang</label>
    <input type="text" name="id" class="form-control" placeholder="Masukkan kode barang" required />

    </div>
    <div class="form-group">
     <label>Nama Barang</label>
    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Barang" required />

    </div>
    <div class="form-group">
    <label>Jenis Barang : </label>
    <label><input type="radio" name="jenis_barang" value="Makanan">Makanan</label>
    <label><input type="radio" name="jenis_barang" value="Peralatan Dapur"> Peralatan Dapur</label>
    <label><input type="radio" name="jenis_barang" value="Peralatan Mandi"> Peralatan Mandi</label>
    </div>
    <div class="form-group">
    <label>Harga : </label>
    <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga Barang" required />
    <label>Stok : </label>
    <input type="text" name="stok" class="form-control" placeholder="Masukkan Stok" required />
    </div>
     <div class="form-group">
     <label>Gambar : </label>
     <form name="barang.php" enctype="multipart/form-data"
   action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
    <input type="file" name="gambar" accept="image/*" placeholder="Masukkan Gambar" required />
    </div>




    <div class=""></div>
    <br>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    


    </form>
    
    <?php
    include ('layout/footer.php'); 
    ?>
    </div>

    
</body>
</html>