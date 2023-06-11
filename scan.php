<!DOCTYPE html>
<html>
<head>
    <?php include "header.php"; ?>
    <title> Scan Kartu</title>

    <!-- Scanning Membaca Kartu RFID -->
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function(){
                $("#cekkartu").load('bacakartu.php')
            }, 2000);
    });
    </script>
</head>
<body>


    <?php include "menu.php"; ?>

    <!-- Isi -->

    <div class ="container-fluid" style="padding-top: 10%">
        <div id="cekkartu"></div>
    </div>

    <?php include "footer.php"; ?>

</body>
</html>
