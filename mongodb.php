<?php

require 'vendor/autoload.php';

$client = new MongoDB\Driver\Client("mongodb://localhost:27017");

$profiledb = $client -> profiledb;

$result1 = $profiledb -> createCollection('userCollection');
var_dump($result1);

// $userCollection = $profiledb -> userCollection;

// $insertOneResult = $userCollection->insertOne(
//     ['userName'=>'Sahi','dob'=>'12/12/12','mobile'=>'1234567890']
// );

// printf("Inserted %d documents\n",$insertOneResult->getInsertedCount());
// var_dump($insertOneResult->getInsertedId());

// $data = $userCollection->find();

// foreach($data as $dt)
// {
//     var_dump($dt);
// }

?>