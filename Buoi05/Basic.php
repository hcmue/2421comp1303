<?php
$a = "Phát triển Ứng dụng";
$b = "Web";
$sv = "Lê Li La";
echo $a . " " . $b;

        $chuoi = <<<EODA
        Tôi là <b>$sv</b>.<br/>
        Hiện đang học lớp $a $b.
    EODA;
echo $chuoi;
$arr = array("a" => "apple", "b" => "banana", 1 => "bababa");
foreach ($arr as $key => $value) {
    echo "<br/>$key = $value";
}
echo "<br/>";
foreach($arr as $value) {
    echo "<br/>$value";
}
?>