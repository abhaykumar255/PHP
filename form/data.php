<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];

$server="localhost";
$username="root";
$pass="";

$conn=mysqli_connect($server,$username,$pass,"mydb");
if(!$conn){
    die ("problem in ".mysqli_connect_error());
}

if(isset($_POST['save'])){
    $insert="INSERT INTO FORM(First_name,Last_name) VALUES('$fname','$lname')";
    
    if(mysqli_query($conn,$insert)){
        echo "data inserted";
    }
    else{
        echo "data not inserted";
    }
}

if(isset($_POST['display'])){
    $display="SELECT * FROM FORM";
    $data=mysqli_query($conn,$display);
    if(mysqli_num_rows($data)>0){
        echo "<table border=2px solid black>";
        echo "<tr>";
        echo "<th> First Name </th>";
        echo "<th> Last Name </th>";
        echo "</tr>";

    while($row=mysqli_fetch_array($data)){
        echo "<tr>";
        echo "<td>"."<input type='text' name='ffname' value=$row[First_name]>"."</td>";
        echo "<td>"."<input type='text' name= llname' value=$row[Last_name]>"."</td>";
        echo "<td>"."<input type='submit' value='update' name='update'>"."</td>";
        echo "<td>"."<input type='submit' value='delete' name='delete'>"."</td>";
        echo "</tr>";

    }
    }
    else{
        echo "no record found";
    }
}

if(isset($_POST['update'])){
    $change=$_POST['ffname'];
    $base=$_POST['llname'];
    $updating = "UPDATE form SET First_name='$change' WHERE Last_name='$base'";
    //$updating="UPDATE form SET First_name='".$_POST['ffname']."', Last_name='".$_POST['llname']."' WHERE First_name='".$_POST['ffname']."' ";
    if(mysqli_query($conn,$updating)){
        echo "Record updated successfully👍";
    }
    else {
        echo "unable to update";
    }
}

if(isset($_POST['delete'])){
    $change=$_POST['ffname'];
    $deleted="DELETE FROM form WHERE First_name='$change'";
    if(mysqli_query($conn,$deleted)){
        echo "deleted successfully";
    }
    else{
        echo "not deleted";
    }
}

?>