<?php
try{
    $link = mysqli_connect('localhost', 'root', '', '2421comp1303');
    mysqli_query($link, "SET NAMES utf8");

    $sql_statement = "INSERT INTO monhoc (MaMon, TenMon, SoTinChi) VALUES ('COMP1026', 'Công nghệ phần mềm', 3)";
    $result = mysqli_query($link, $sql_statement);

}
catch (Exception $e) {
    echo "Lỗi: " . $e->getMessage();
}
finally {
    //đóng kết nối
    mysqli_close($link);
}
?>