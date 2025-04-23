# template chung

```
<?php
$link = mysqli_connect('localhost', 'root', '', '2421comp1303');
// mysqli_query($link, "SET NAMES utf8");

$sql_statement = "";
$result = mysqli_query($link, $sql_statement);


// đối với câu lệnh select thì sẽ fetch data
$row = mysqli_fetch_row($result);//theo chỉ số [0], [1], [2],...
$row = mysqli_fetch_assoc($result); //theo tên cột ['id'], ['name'], ['age'],...
$row = mysqli_fetch_array($result, result_type); //theo cả chỉ số lẫn tên column

//giải phóng tài nguyên
mysqli_free_result($result)
//đóng kết nối
mysqli_close($link);
?>
```
