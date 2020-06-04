<?php
    $fname = "test.txt";
    $str = file_get_contents($fname);
    $str = explode("\r\n", $str);
    $tmp = [];
    foreach ($str as $k => $v) {
        $tmp[] =  explode("|", $v);
    }
    
    echo json_encode(["code" => 200, "data" => $tmp], true);
    
