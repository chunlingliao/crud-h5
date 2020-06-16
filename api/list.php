<?php
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
	header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept');
	 

    $fname = "test.txt";
    $str = file_get_contents($fname);
    $str = explode("\r\n", $str);
    $tmp = [];
    foreach ($str as $k => $v) {
        $tmp[] =  explode("|", $v);
    }
    
    echo json_encode(["code" => 200, "data" => $tmp], true);
    
