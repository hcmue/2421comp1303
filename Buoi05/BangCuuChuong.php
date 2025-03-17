<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng cửu chương</title>
</head>
<body>
    <form>
        Cửu chương:
        <input type="number" name="cuuchuong" value="2">
        <input type="submit" value="Xem">
    </form>
    <?php
    if(isset($_REQUEST["cuuchuong"])) {
        $cuuchuong = $_GET["cuuchuong"];
        echo "<h3>Bảng cửu chương $cuuchuong</h3>";
        for($i = 1; $i <= 10; $i++) {
            echo "$cuuchuong x $i = " . $cuuchuong * $i . "<br/>";
        }
    }
    ?>
</body>
</html>