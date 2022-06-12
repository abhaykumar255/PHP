<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chop Function </title>
</head>
<style>
    body{
        background-color:yellow;
    }
    h1{
        text-align: center;
        font-size: 40px;
        background-color:black;
        color: red;
        opacity: 5;
    }
    .form{
        text-align: center;
        margin-top: 40px;
        font-size: 40px;
    }
    .btn{
        font-size: 40px;
        margin-top:40px;
        margin-bottom:50px;
        color:green;
        background:skyblue;
    }
    .btn:hover{
    background-color:pink;
    
    }
</style>
<body>
    <h1> Chop weill remove the Words From the right &#128512; </h1>
    <form action="" class="form" method="post">
        <label for="">Enter The String </label>
        <input type="text" name="user_number">
        <br>
        <br>
        <label for="">Enter The Words to be remove </label>
        <input type="text" name="user_number1">
        <br>
        <br>
        <button type="submit" name="submit" class="btn">Convert it !</button>
        <?php
        echo "<br>";
      if(isset($_POST['submit']))
       {
       $num_one=$_POST['user_number'];
       $num_one1=$_POST['user_number1'];
       if($num_one && $num_one1)
       {
        echo "After The Remove Words from right side : ".chop($num_one,$num_one1);
       }
       else
       {
           echo "Enter A string first";
       }
      
       
       }
       
    
      ?>
    </form>

</body>
</html>
