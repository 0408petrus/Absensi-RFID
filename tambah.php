<!-- Proses Penyimpanan -->
<?php
    include "koneksi.php";

    // Jika tombol diklik
    if(isset($_POST[ 'btnSimpan']))
    {
        // Baca Isi Kartu
        $nokartu = $_POST[ 'nokartu'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];

        // Simpan ke Tabel Karyawan
        $simpan = mysqli_query($konek, "insert into karyawan(nokartu,
        nama, alamat)values('$nokartu', '$nama', '$alamat')");

        //Jika berhasil tersimpan, tampilkan pesan Tersimpan,
        //kembali ke data karyawan
        
        if($simpan)
        {
            echo "
            <script> 
                alert('Tersimpan');
                location.replace('datakaryawan.php');
                </script>
            ";
        }
        else
        {
            echo "
            <script>
                alert('Gagal Tersimpan');
                location.replace('datakaryawan.php');
                </script>   
            ";
        }
    }

    //kosongkan tabel tmprfid
    mysqli_query($konek, "delete from tmprfid");
?>

<!DOCTYPE html>
<html>
<head>
    <?php include "header.php"; ?>
    <title>Tambah Data Guru</title>

    <!-- Pembacaan No Kartu Otomatis-->
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){
                $("#norfid").load('nokartu.php')
        }, 0);
        });
</script>
<head>
<body>
    <?php include "menu.php"; ?>

    <!-- isi -->
    <div class="container-fluid">
        <h3>Tambah Data Karyawan</h3>
        <!-- form input -->
        <form method="POST">
            <div id="norfid"></div>

            <div class="form-group">
                <label>Nama Guru</label>
                <input type="text" name="nama" id="nama" placeholder
                ="nama karyawan" class="form-control" style="width: 400px">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" placeholder="alamat" style="width: 400px"></textarea>
            </div>

            <button class="btn btn-primary" name="btnSimpan" id="btnSimpan
            ">Simpan</button>
        </form>
    </div>

    <?php include "footer.php"; ?>

</body>
</html>