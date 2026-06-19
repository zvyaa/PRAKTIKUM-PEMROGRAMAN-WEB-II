<!DOCTYPE html>
<html>
<head>
    <style>
        .gambar {
            width: 30px;
            height: 30px;
        }
        .kosong {
            width: 30px;
            height: 30px;
            visibility: hidden;
        }
    </style>
</head>
<body>

    <form action="" method="POST">
        Tinggi : <input type="number" name="tinggi" value="<?= isset($_POST['tinggi']) ? $_POST['tinggi'] : '' ?>"><br>
        Alamat Gambar : <input type="text" name="alamat_gambar" value="<?= isset($_POST['alamat_gambar']) ? $_POST['alamat_gambar'] : '' ?>"><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>
    <br>

    <?php
    if (isset($_POST['cetak'])) {
        $tinggi = $_POST['tinggi'];
        $alamat_gambar = $_POST['alamat_gambar'];
        
        $i = 0;
        while ($i < $tinggi) {
            $j = 0;
            while ($j < $i) {
                echo "<img src='$alamat_gambar' class='kosong'>";
                $j++;
            }
            
            $k = 0;
            while ($k < ($tinggi - $i)) {
                echo "<img src='$alamat_gambar' class='gambar'>";
                $k++;
            }
            echo "<br>";
            $i++;
        }
    }
    ?>

</body>
</html>