<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/HangHoa.css" />
</head>
<body>
<?php
    include_once("DataProvider.php");
$sql_loai = "SELECT MaLoai, TenLoai FROM loaihoa";
$dsLoai = DataProvider::ExecuteQuery($sql_loai);
?>
Loại hoa:
<select id="cboLoaiHoa">
    <?php
    while($row = $dsLoai->fetch()){
        echo "<option value='{$row["MaLoai"]}'>{$row["TenLoai"]}</option>";
    }
    ?>   
</select>
<hr>
<h2>Danh sách hoa</h2>
<div id="dsHoa"></div>
<script src="./js/jquery-3.7.1.min.js"></script>
<script>
    function layHoa(){
        $.ajax({
            url: './Hoa.php',
            data: {
                mahoa: $("#cboLoaiHoa").val()
            },
            success: function(result){
                $("#dsHoa").html(result);
            }
        });
    }
    $(document).ready(function(){
        layHoa();
        $("#cboLoaiHoa").change(function(){
            layHoa();
        });
    });
</script>
</body>
</html>