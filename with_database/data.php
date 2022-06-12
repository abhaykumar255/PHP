<?php
$First_name=$_POST['fname'];
$last_name=$_POST['sname'];

$ser_name="localhost";
$ser_user="root";
$ser_pass="";
$connection_check= mysqli_connect($ser_name,$ser_user,$ser_pass,"mydb");  // connection string
if(!$connection_check)
{
   // or we can use the die to print the message and exit the code
die("problem in connection".mysqli_connect_error());
}

if(isset($_POST['save']))
{
$insert_query="INSERT INTO stu_record(First_name,Last_name) VALUES('$First_name','$last_name')";

if(mysqli_query($connection_check,$insert_query))
{
echo "data inserted";
}
else
{
echo " data not inserted";
}

}

// for display the result

if(isset($_POST['display']))
{
   $display_query="SELECT First_name,Last_name FROM stu_record";
   $data=mysqli_query($connection_check,$display_query);
   if(mysqli_num_rows($data)>0)
   {
      echo "<table border =2px solid black>";
      echo "<tr>";
      echo "<th>First Name</th>";
      echo "<th>last Name</th>";
      echo "</tr>";
   while($row = mysqli_fetch_array($data))
   {

      echo "<tr>";
      echo "<td>". "<input type='text' name='uname' value =$row[First_name]>"."</td>";
      echo "<td>"."<input type='text' name='uname' value =$row[Last_name]>"."</td>";
      echo "<td><input type=submit name=update value=update></td>";
      echo "<td><input type=submit name=delete value=delete></td>";
      echo "</tr>";
   }
   }
   else
   {
   echo "no record found";
   }
}

if(isset($_POST['update'])){
   $change=$_POST['fname'];
   $base=$_POST['sname'];
   $update_query = "UPDATE stu_record SET First_name='$change' WHERE Last_name'='$base'";
   if(mysqli_query($connection_check,$update_query)){
      echo "Record Updated successfully👍";
   }
   else{
      echo "Unable to update";
   }
}


?>