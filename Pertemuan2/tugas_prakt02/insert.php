<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Tambah data mahasiswa</title>
</head>

<body style="margin: 10px;">
<h2 style="text-align: center;">Tambah Data Mahasiswa</h2>    

<form>

    <?php
    
    ?>

    <div class="form-group">
        <label for="exampleFormControlInput1">NIM</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nim" placeholder="">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Nama</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" placeholder="">
    </div>
    
    Jenis Kelamin
    <br>
    <label><input type="radio" name="jenis_kelamin" value="Laki - laki"> Laki - laki</label><br/>
    <label><input type="radio" name="jenis_kelamin" value="Perempuan" > Perempuan</label><br/>

    <br>
   <div class="form-group">
    <label for="exampleFormControlSelect1">Agama</label>
    <select class="form-control" id="exampleFormControlSelect1" name="agama">
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Hindu">Hindu</option>
      <option value="Buddha">Buddha</option>
    </select>
    </div>
   <br>
    Olahraga Favorite
    <div class="form-check">
         <label><input type="checkbox" name="olahraga_favorite[]" value="Sepak Bola"> Sepak Bola</label><br>
         <label><input type="checkbox" name="olahraga_favorite[]" value="Basket"> Basket</label><br>
         <label><input type="checkbox" name="olahraga_favorite[]" value="Futsal"> Futsal</label><br>
         <label><input type="checkbox" name="olahraga_favorite[]" value="Renang"> Renang</label><br>
         <label><input type="checkbox" name="olahraga_favorite[]" value="Badminton"> Badminton</label><br>
    </div>
   
    <br>
    <div class="form-group">
        <label for="exampleFormControlFile1">Upload Foto</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto">
    </div>


    <br>
    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    <a href="tampil_data.php" ><button type="button" class="btn btn-light">Kembali</button></a>
    <?php
        if (isset($_GET['submit'])){
            include "koneksi.php";
            $nim = $_GET['nim'];
            $nama = $_GET['nama'];
            $jk = $_GET['jenis_kelamin'];
            $agama = $_GET['agama'];
            $olahraga = implode(",",$_GET['olahraga_favorite']);
            $foto = $_GET['foto'];        
            mysqli_query($kon," INSERT INTO `mahasiswa` (`nim`, `nama`, `jenis_kelamin`, `agama`, `olahraga_favorite`, `foto`) VALUES ('$nim','$nama','$jk','$agama','$olahraga','$foto')");

            header("location:tampil_data.php");    
    //echo '<META HTTP-EQUIV="Refresh" Content="0; URL=tampil_data.php">';
    //exit;
            };
            
?>
   
</form>
</body>
</html>