<?php
switch (true) {
    case (!isset($_POST['id'])):
        echo json_encode(["code" => 400, "data" => [], "error" => "缺少參數"], true);
        exit();
}

$fname = "test.txt";
$o_str = file_get_contents($fname);
$str = explode("\r\n", $o_str);
$tmp = "";
foreach ($str as $k => $v) {
    $data =  explode("|", $v);
    if ($data[0] == $_POST['id']) {
        $tmp = str_replace("\r\n".$v, "", $o_str);
        $tmp = str_replace($v."\r\n", "", $tmp);
        file_put_contents($fname, $tmp);
    }
}




$str = file_get_contents($fname);
$str = explode("\r\n", $str);
$tmp = [];
foreach ($str as $k => $v) {
    $tmp[] =  explode("|", $v);
}

echo json_encode(["code" => 200, "data" => $tmp], true);
