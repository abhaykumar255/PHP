<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$connection_check = mysqli_connect($servername, $username, $password);

// Check connection
if (!$connection_check) {
    die("Connection failed: ".mysqli_connect_error());
}
if(isset($_POST['save'])){
    $insert_query="INSERT INTO stu_record(name,last name) VALUES('$f_name',$l_name)";
    if(mysqli_query($connection_check,$insert_query)){
        echo "Data inserted";
    }
    else {
        echo "data not inserted";
    }
}

