<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color:aqua;
    }
    h1{
        text-align: center;
        font-size: 40px;
        background-color:black;
        color: yellow;
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
        color:red;
        background:yellow;
    }
    .btn:hover{
    background-color:blue;
    
    }
</style>
<body>
    <h1> String Length Calculator &#128512; </h1>
    <form action="" class="form" method="post">
        <label for="">Enter The String </label>
        <input type="text" name="user_number">
        
        <br>
        <button type="submit" name="submit" class="btn"> Find length</button>
        <?php
        echo "<br>";
      if(isset($_POST['submit']))
       {
       $num_one=$_POST['user_number'];
       if($num_one)
       {
       
       echo "The Length  of  String is :↠ ".strlen($num_one);
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
