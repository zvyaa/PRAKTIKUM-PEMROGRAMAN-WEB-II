<!DOCTYPE html>
<html>
<head>
    <style>
        img {
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body>

    <form action="" method="POST">
        Batas Bawah : <input type="number" name="bawah" value="<?= $_POST['bawah'] ?? '' ?>"><br>
        Batas Atas : <input type="number" name="atas" value="<?= $_POST['atas'] ?? '' ?>"><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>
    <br>

    <?php
    if (isset($_POST['cetak'])) {
        $bawah = $_POST['bawah'];
        $atas = $_POST['atas'];
        
        $i = $bawah;

        do {
            if (($i + 7) % 5 == 0) {
                echo "<img src='https://www.freepnglogos.com/uploads/star-png/star-vector-png-transparent-image-pngpix-21.png'> ";
            } else {
                echo $i . " ";
            }
            $i++;
        } while ($i <= $atas);
    }
    ?>

</body>
</html>