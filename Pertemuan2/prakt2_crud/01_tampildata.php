<h2>Data Mahasiswa</h2>
<form action="02_tambahdata.php">
    <input type="submit" value="Tambah Data Baru">
</form>
<?php
    /*
    //Tampilkan data yang ada di php my admin
    include "koneksi.php";
    $r=mysqli_query($kon,"SELECT * FROM mahasiswa");
    $i = 1;
    while($brs=mysqli_fetch_assoc($r)){
        //print_r($brs);
        echo $i++.".".$brs["nama"]."<br>";
    }*/

    //Menambah data baru
    include "koneksi.php";
    // fetch itu fungsi untuk mengkonversi resources hasil query ke bentuk array
    $r=mysqli_query($kon,"SELECT * FROM mahasiswa");
    $i = 1;
    while ($brs=mysqli_fetch_assoc($r)) {
        echo "<form action=\"03_aksi.php\">";
        echo $i++.".".$brs["nama"];
        echo " &nbsp;&nbsp;&nbsp;<input type=\"submit\" name=\"aksi\" value=\"Edit\">";
        echo " &nbsp;&nbsp;&nbsp;<input type=\"submit\" name=\"aksi\" value=\"Delete\">";
        echo "<p>";
        echo "<input type=\"hidden\" name=\"id\" value=\"".$brs["id"]."\">";
        echo "<input type=\"hidden\" name=\"nm\" value=\"".$brs["nama"]."\">";
        echo "</form>";
    }

    
?>