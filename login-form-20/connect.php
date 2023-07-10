<?php
    ini_set("display_errors", "1");
    ini_set("display_startup_errors", "1");
    error_reporting(E_ALL);


    $servername="localhost";
    $username="root";
    $password="";
    $database_name="travel";

    //Database connection
    $conn = mysqli_connect($servername,$username,$password,$database_name);
    if(!$conn){
        die("Connection_failed" . mysqli_connect_error());
    }
    if(isset($_POST['save']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $dateofbirth=$_POST['dateofbirth'];
        $password = $_POST['password'];
        
        $sql_query = "INSERT INTO userprofile(firstname,lastname,username,email,dateofbirth,password)
        VALUES('$firstname','$lastname','$username','$email','$dateofbirth','$password)";

        if(mysqli_query($conn,$sql_query))
        {
            echo "new details added";
        }
        else
        {
            echo "error" . $sql . "" . mysqli_error($conn);
        }
        mysqli_close($conn);
        
    }
    ?>