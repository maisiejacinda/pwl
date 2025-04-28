<html>
<body>
    <form action="" method="post">
        Nama: <input type="text" name="fname" />
        <br>
        NIM: <input type="text" name="fnim" />
        <br><br>
        <input type="submit" value="submit" />
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['fname']) && !empty($_POST['fnim'])) {
            $nama = htmlspecialchars($_POST['fname']);
            $nim = htmlspecialchars($_POST['fnim']);
            echo "<h3>Hello, $nama - $nim</h3>";
        } else {
            echo "<h3>Harap isi semua kolom!</h3>";
        }
    }
    ?>
</body>
</html>
