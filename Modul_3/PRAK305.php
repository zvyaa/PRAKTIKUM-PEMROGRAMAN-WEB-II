<!DOCTYPE html>
<html>
<body>

    <form action="" method="POST">
        <input type="text" name="kata" required>
        <button type="submit" name="submit">submit</button>
    </form>
    <br>

    <?php
    if (isset($_POST['submit'])) {
        $kata = $_POST['kata'];
        $panjang = strlen($kata);
        
        echo "<h3>Input:</h3>";
        echo $kata;
        echo "<h3>Output:</h3>";
        
        for ($i = 0; $i < $panjang; $i++) {
            echo strtoupper($kata[$i]);
            
            for ($j = 1; $j < $panjang; $j++) {
                echo strtolower($kata[$i]);
            }
        }
    }
    ?>

</body>
</html>