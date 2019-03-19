<?php 

$request = $_POST;
if(file_exists("gps.json")){
    // echo "文件存在";
    }
    else{
    echo "文件不存在";
    }
    $filename = "gps.json";
    
    $json = file_get_contents($filename);
    $data = json_decode($json);
    // echo $data[1]->number;
    echo "<br>";
    echo print_r($data);
    echo count($data);
    
    $data[] = [
        "number"=>"60995",
        "latitude"=>"22.76120184",
        "longitude"=> "100.9906388",
        "altitude"=> "1298.69",
        "update"=>"2017/9/4 12:06",
        "type"=> "9",
        "mark"=> ""
    ];
    // array_merge_recursive($data,$data);
    $newData = json_encode($data);
    file_put_contents($filename,$newData);
    echo "<br>";
    $json = file_get_contents($filename);
    $data = json_decode($json);
    echo count($data);