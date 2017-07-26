<?php

if (isset($_POST['data'])) {
    $data = json_decode($_POST['data']);
    $date = date("Y-m-d", time());
    $id = uniqid();

    //store data
    $sql = "INSERT INTO hrterstservice.event (id, created_at, country, type, count) VALUES (".$id.", '".$data['created_at']."', '".$data['country']."', '".$data['type']."', ".$data['count'].")";


//    $client = new \GuzzleHttp\Client();
//    $response = $client->post('http://127.0.0.1:8123', ['body' => $sql]);

}