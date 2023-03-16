<?php

require '../vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");

$profiledb = $client -> profiledb;

$result1 = $profiledb -> createCollection('usersCollection');
var_dump($result1);

// $userCollection = $profiledb -> usersCollection;

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


// var_dump($_POST);

// if (isset($_POST['username'])) {
//     $username = $_POST["username"];
//  }
//  else{
//     echo "Username not found";
//  }

//  if (isset($_POST['password'])) {
//     $password = $_POST["password"];
//  }
//  else{
//     echo "Password not found";
//  }

// // Check form data
// var_dump($username,$password);

// $insertOneResult = $userCollection->insertOne(
//     ['userName'=>$username,'password'=>$password,'mobile'=>'1234567890']
// );

// printf("Inserted %d documents\n",$insertOneResult->getInsertedCount());

// if($insertOneResult->getInsertedId()){
//     echo "User Registered Successfully!";
// }
// else{
//     echo "Error: ";
// }

?>