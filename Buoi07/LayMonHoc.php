<?php
$link = mysqli_connect('localhost', 'root', '', '2421comp1303');
mysqli_query($link, "SET NAMES utf8");

$sql_statement = "SELECT MaMon, TenMon, SoTinChi FROM monhoc";
$result = mysqli_query($link, $sql_statement);


// đối với câu lệnh select thì sẽ fetch data
// $row = mysqli_fetch_row($result);//theo chỉ số [0], [1], [2],...
// $row = mysqli_fetch_assoc($result); //theo tên cột ['id'], ['name'], ['age'],...
// $row = mysqli_fetch_array($result); //theo cả chỉ số lẫn tên column
// print_r($row);
// echo "<table cellpadding='10' cellspacing='0' border='1'>";
// while ($row = mysqli_fetch_assoc($result)) {
//     echo "<tr><td>". $row['MaMon'] . "</td>";
//     echo "<td>" . $row['TenMon'] . "</td>";
//     echo "<td>" . $row['SoTinChi'] . "</td>";
//     echo "</tr>";
// }
// echo "</table>";

echo "<select name='monhoc'>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row[0] . "'>" . $row['TenMon'] . "</option>";
}
echo "</select>";

//giải phóng tài nguyên
mysqli_free_result($result);
//đóng kết nối
mysqli_close($link);
?>