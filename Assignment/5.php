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
        background-color:pink;
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
    <h1> String replace  Calculator &#128512; </h1>
    <form action="" class="form" method="post">
        <label for="">Enter The String </label>
        <input type="text" name="user_number">
        <br>
        <br>
        <label for=""> What to Replace </label>
        <input type="text" name="user_number1">
        <br>
        <label for=""> Replaced By</label>
        <input type="text" name="user_number2">
        <br>
        <br>
        <button type="submit" name="submit" class="btn">Replace It</button>
        <?php
        echo "<br>";
      if(isset($_POST['submit']))
       {
       $num_one=$_POST['user_number'];
       $num_one1=$_POST['user_number1'];
       $num_one2=$_POST['user_number2'];
       if($num_one && $num_one1 && $num_one2)
       {
        echo "the Original String is : ".$num_one."<br>";
        $res=str_ireplace($num_one1,$num_one2,$num_one);
        echo "the Replaced String is : ".$res."<br>";
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
