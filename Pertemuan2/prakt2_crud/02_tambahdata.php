<h2>FORM ISI DATA BARU</h2>
<form>
    nama : <input type="text" name="nm">
    <input type="submit" name="sub" value="Simpan Data Baru">
    <input type="submit" name="sub" value="Kembali ke Tampil Data">
    <?php
        if(isset($_GET['sub'])) { //mengecek udah ditekan atau belum, manfaat isset : utk mengidentifikasi apakah kita sudah mengklik tombol atau belum
            // KALO METHOD GET : DATA YANG DIAMBIL AKAN TAMPIL DI URL
            if ($_GET['sub']=="Kembali ke Tampil Data"){
                //echo "Anda mau kembali ke hal 01";
                header("location:01_tampildata.php");
            }
                // echo "<br>Pasti anda sebelumnya sudah ada di halaman ini"; 
            else{
                //echo "<br>Pasti anda sebelumnya ada di TAMPIL DATA";
                //echo "<br>Pasti anda telah menekan tombol";
                //echo "Anda mau menyimpan data";
                if (strlen($_GET['nm'])) { //strlen mengukur panjang string || Tujuannya mengecek data kosong atau tidak 
                    include "koneksi.php";
                    mysqli_query($kon,"INSERT INTO `mahasiswa` (`id`,`nama`) 
                                        VALUES (NULL, '".$_GET['nm']."')");
                    echo "<br>Data <b>".$_GET['nm']."</b> Telah Disimpan di Database";
                }
                else
                    echo "<br>Data Nama Tidak Boleh Kosong";
            }
        }
    ?>
</form>