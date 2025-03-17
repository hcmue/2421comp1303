<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        Số phần tử: <input type="number" name="n" value="5">
        <button type="submit">Khởi tạo</button>
    </form>
    <?php
    $so_phan_tu = isset($_GET["n"]) ? $_GET["n"] : 5;
    $arr = array();
    for($i = 0; $i < $so_phan_tu; $i++) {
        $arr[] = rand(1, 100);
    }
    echo implode(", ", $arr);
    ?>
</body>
</html>