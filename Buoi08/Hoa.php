<?php
include_once("DataProvider.php");
$sql_hoa = "SELECT MaHoa, TenHoa, GiaBan, Hinh FROM hoa";
if(isset($_REQUEST["mahoa"])){
    $sql_hoa .= " WHERE MaHoa=".$_REQUEST["mahoa"];
}
//echo $sql_hoa;
$dsHoa = DataProvider::ExecuteQuery($sql_hoa);
?>
    <div id="dsSanPham">
        <?php
        while($row = $dsHoa->fetch()){
            $chuoi=<<< EOF
<div class="hh-box">
            <div class="hh-box-promotion"></div>
            <div class="hh-box-qua"></div>
            <img src="./hoa/{$row['Hinh']}" class="hh-box-image" />
            <img src="./images/icon-new.png" class="hh-box-new" />
            <div class="hh-box-name">{$row['TenHoa']}</div>
            <div class="hh-box-gia">{$row['GiaBan']}</div>
        </div>
EOF;
            echo $chuoi;
        }
        ?>

    </div>
