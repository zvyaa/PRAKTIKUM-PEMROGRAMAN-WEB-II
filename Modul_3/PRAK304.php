<!DOCTYPE html>
<html>
<head>
    <style>
        img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>

    <?php
    $jumlah = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jumlah = $_POST['jumlah'];
    }

    if (isset($_POST['tambah'])) {
        $jumlah++;
    } elseif (isset($_POST['kurang'])) {
        $jumlah--;
    }

    if ($jumlah == 0): 
    ?>
        <form action="" method="POST">
            Jumlah bintang <input type="number" name="jumlah" required>
            <br>
            <button type="submit" name="submit">Submit</button>
        </form>
    <?php else: ?>
        Jumlah bintang <?= $jumlah ?>
        <br><br>
        
        <?php
        for ($i = 0; $i < $jumlah; $i++) {
            echo "<img src='https://www.freepnglogos.com/uploads/star-png/star-vector-png-transparent-image-pngpix-21.png'>";
        }
        ?>
        
        <br><br>
        <form action="" method="POST">
            <input type="hidden" name="jumlah" value="<?= $jumlah ?>">
            <button type="submit" name="tambah">Tambah</button>
            <button type="submit" name="kurang">Kurang</button>
        </form>
    <?php endif; ?>

</body>
</html>