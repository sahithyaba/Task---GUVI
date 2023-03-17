<?php
    // connect to the MySQL database
    $mysqli = new mysqli("localhost", "root", "1234", "users_details",3307);
    
    // check for errors
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    echo "Connected successfully";

    $error = array();
    $res = array();

    // retriving contents of the table
    $statement = mysqli_prepare($mysqli,"select * from registered_users where username = ?");
    mysqli_stmt_bind_param($statement,"s",$username);

    // executing the statements
    mysqli_stmt_execute($statement);

    // getting the result
    $res = mysqli_stmt_get_result($statement);

    $count = 0;

    while ($row = mysqli_fetch_array($res, MYSQLI_NUM)){
        $count++;
     }

    // echo $result;
    if ($count>0) {
        $resp['redirect'] = 'profile.php';
        $resp['status'] = true;
        echo json_encode($resp);        
        exit;

    } else {
        $error[] = "Invalid Username or Password";
        $resp['msg'] = $error;
        $resp['status'] = false;
        echo json_encode($resp);
        exit;
    }
?>