<?php
include_once 'DataProvider_Mysqli.php';

$sql_monhoc = "SELECT MaMon, TenMon FROM monhoc";
$result_monhoc = fetchData($sql_monhoc);
?>
<form method="POST" action="QLHocPhan.php">
    <h2>TẠO LỚP HỌC PHẦN</h2>
    <label for="MaMon">Môn học:</label>
    <select id="MaMon" name="MaMon">
        <?php
        while ($row = mysqli_fetch_array($result_monhoc)) {
            echo "<option value='" . $row[0] . "'>" . $row['TenMon'] . "</option>";
        }
        ?>
    </select><br>
    <label for="NamHoc">Năm học:</label>
    <input type="text" id="NamHoc" name="NamHoc"><br><br>
    <label for="HocKy">Học kỳ:</label>
    <input type="text" id="HocKy" name="HocKy"><br><br>
    <input type="submit" value="Thêm học phần">
    <input type="reset" value="Nhập lại">
</form>
<?php
if(isset($_POST['MaMon']) && isset($_POST['NamHoc']) && isset($_POST['HocKy'])) {
    $sqlInsert = "INSERT INTO `lophocphan` (`MaMon`, `NamHoc`, `HocKy`) VALUES ( '". $_POST['MaMon'] ."', '". $_POST['NamHoc'] ."', '". $_POST['HocKy'] ."');";
    echo $sqlInsert;
    $resultInsert = executeData($sqlInsert);
    if ($resultInsert) {
        echo "Insert successful.";
    } else {
        echo "Insert failed.";
    }
}
?>