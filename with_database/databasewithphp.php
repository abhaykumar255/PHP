<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button{
            -webkit-appearance: none;
            margin: 0;
        }
        table{
            background-color: #eee;
            border-collapse: collapse;

        }
        label,input{
            height: 30px;
            width: 280px;
        }

    </style>
</head>
<body>
<form action="Reg.php", method="post" align="center">
    <table align="center">
        <tr>
    <td><label>Name&nbsp;&nbsp;</label></td>
    <td><input type="text" name="user_name"></td></tr>

      <tr>  <td><label>Age</label></td>
    <td><input type="number" name="user_age"></td></tr>

    <tr><td><label>Mobile</label></td>
    <td><input type="number" name="user_mobile"></td></tr>

   <tr><td colspan="2" align="center"> <input type="submit" name="submit-btn" value="Submit">
    <input type="submit" name="display-btn" value="Display"></td></tr>

    </table>
</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $ser_name = "localhost";
    $ser_user = "root";
    $ser_pass = "";
    $connection_check = mysqli_connect($ser_name, $ser_user, "", 'user_info');

    if (!$connection_check) {

        die("Problem in connection" . mysqli_connect_error());
    }

    if (isset($_POST['submit-btn'])) {

        $User_Name = $_POST['user_name'];
        $User_Age = $_POST['user_age'];
        $User_Mobile = $_POST['user_mobile'];

        $insert_query = "INSERT INTO `user`(`Name`,`Age`,`Mobile`) VALUES('$User_Name','$User_Age','$User_Mobile')";

        if (mysqli_query($connection_check, $insert_query)) {
            echo "<h1 style='color: green'>Data inserted successfully👍</h1>";
            header("refresh:3,url=Reg.php");
        } else {
            echo "Data not inserted👎";
        }
    }
    if (isset($_POST['display-btn'])) {
        $display_query = "SELECT Name,Age,Mobile from user";
        $data = mysqli_query($connection_check, $display_query);
        if (mysqli_num_rows($data) > 0) {
            echo "<table>
              <tr><th>Name</th><th>Age</th><th>Mobile</th></tr>     ";
            while ($row = mysqli_fetch_array($data)) {
                echo "<form action='Reg.php' method='post'>";
                echo "<tr>";
                echo "<td>" . "<input type='text' name='uname' value =$row[Name]>" . "</td>";
                echo "<td>" . "<input type='text' name='uage' value =$row[Age]>" . "</td>";
                echo "<td>" . "<input type='text' name='u_mob' value =$row[Mobile]>" . "</td>";
                echo "<td>"."<input type='submit' name='update' value='update'>"."</td>";
                echo "<td>"."<input type='submit' name='delete' value='delete'>"."</td>";
                echo "</tr>";
                echo "</form>";
            }

        } else {
            echo "<h1 style='color: red'>No record found</h1>";
            header("refresh:5,url=Reg.php");
        }
    }
    if(isset($_POST['update']))
    {
        $change = $_POST['uname'];
        $base = $_POST['u_mob'];
        $update_query = "UPDATE user SET Name='$change' WHERE Mobile='$base'";
        if(mysqli_query($connection_check,$update_query))
        {
           // echo "<script>alert('Record Updated')</script>";
            echo "<h1 style='color: green'>Record Updated successfully👍</h1>";
            header("refresh:3,url=Reg.php");
        }
        else{
            echo "<h1 style='color: red'>Unable to update</h1>";
            header("refresh:5,url=Reg.php");
        }
    }
}
?>
</body>
</html>