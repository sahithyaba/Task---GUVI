<?php

header('Access-Control-Allow-Origin: *');

require '../vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");

$profiledb = $client -> profiledb;

$userCollection = $profiledb -> usersProfile;

$data = $userCollection->find(["username"=>$_GET["username"]]);

foreach($data as $dt)
{
    $profile=[
        "username"=>$dt["username"],
        "password"=>$dt["password"],
        "email"=>$dt["email"],
        "phoneNumber"=>$dt["phoneNumber"],
    ];
    if($dt["firstname"]!=null){
        $profile += array("firstname" => $dt["firstname"]);
    };
    if($dt["lastname"]!=null){
        $profile += array("lastname" => $dt["lastname"]);
    };
    if($dt["dob"]!=null){
        $profile += array("dob" => $dt["dob"]);
    };

    $redis = new Redis();
    $redis->connect('localhost', 6379);

    // retrieve the user ID from Redis using the session ID
    $userId = $redis->get('session:' . $sessionId);

    header('Content-type: application/json');
    echo json_encode($profile);
    break;
}

?>