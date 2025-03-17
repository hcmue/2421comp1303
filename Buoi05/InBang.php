<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$dong = isset($_POST["dong"]) ? $_POST["dong"] : 3;
$cot = isset($_POST["cot"]) ? $_POST["cot"] : 4;
?>
    <form method="post">
        <div>
            Số dòng: <input type="number" name="dong" value="<?php echo $dong; ?>">
        </div>
        <div>
            Số cột: <input type="number" min="1" name="cot" value="<?php echo $cot; ?>">
        </div>
        <button type="submit">Vẽ bảng</button>
    </form>
    <?php
    if(isset($_POST["dong"]) && isset($_POST["cot"])) {
        $dong = $_POST["dong"];
        $cot = $_POST["cot"];
        echo "Bảng $dong dòng x $cot cột";
        echo "<table border='1' cellspacing='0' cellpadding='5'>";
        for($i = 1; $i <= $dong; $i++) {
            echo "<tr>";
            for($j = 1; $j <= $cot; $j++) {
                echo "<td>$i-$j</td>";
            }
            echo "</tr>";
        }
        echo "</table>";   
    }
    ?>
</body>
</html>