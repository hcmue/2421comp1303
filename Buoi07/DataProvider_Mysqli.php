<?php
define('DB_HOST', 'localhost');
define('DB_NAME', '2421comp1303');
define('DB_USER', 'root');
define('DB_PASS', '');
function executeData($sql_statement) {
    $result = true;
    try{
        $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        mysqli_query($link, "SET NAMES utf8");
        mysqli_query($link, $sql_statement);
    }
    catch (Exception $e) {
        echo "Lỗi: " . $e->getMessage();
        $result = false;
    }
    finally {
        mysqli_close($link);
    }
    return $result;
}

function fetchData($sql_statement) {
    $result = NULL;
    try{
        $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        mysqli_query($link, "SET NAMES utf8");
        $result = mysqli_query($link, $sql_statement);
    }
    catch (Exception $e) {
        echo "Lỗi: " . $e->getMessage();
        $result = NULL;
    }
    finally {
        mysqli_close($link);
    }
    return $result;
}
?>