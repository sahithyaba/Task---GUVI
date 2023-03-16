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

    if (empty($_POST['username'])) {
        $error[] = "Username field is required";
    }

    if (empty($_POST['password'])) {
        $error[] = "Password field is required";
    }

    if (count($error) > 0) {
        $resp['msg'] = $error;
        $resp['status'] = false;
        echo json_encode($resp);
        exit;
    }

    $statement = $db->prepare("select * from registered_users where username = :username");
    $statement->execute(array(':username' => $_POST['username']));
    $row = $statement->fetchAll(PDO::FETCH_ASSOC);
    if (count($row) > 0) {
        if (!password_verify($_POST['password'], $row[0]['password'])) {
            $error[] = "Password is not valid";
            $resp['msg'] = $error;
            $resp['status'] = false;
            echo json_encode($resp);
            exit;
        }
        echo json_encode($resp);
        
        exit;
    } else {
        $error[] = "Username does not exist";
        $resp['msg'] = $error;
        $resp['status'] = false;
        echo json_encode($resp);
        exit;
    }
?>