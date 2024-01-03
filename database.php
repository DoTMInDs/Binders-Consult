<?php
    // include('index.html');

    $db_server = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'binders_database';

    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    if(!$conn){
        die("Connection Failed: " . mysqli_connect_error());
    }

    if(isset($_POST["submit"])){

        $username = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        $sql = "INSERT INTO binders(username, email, message)
                VALUES('$username', '$email', '$message')";
        
        if(mysqli_query($conn, $sql)){
            header("Location: success.php");
        }
        else{
            echo"Error: " . $sql . "" . mysqli_error($conn);
            
        }
        mysqli_close($conn);
    }

?>