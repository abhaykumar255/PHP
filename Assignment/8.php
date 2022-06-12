<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> String Position finder</title>
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
    <h1> String Position  Calculator &#128512; </h1>
    <form action="" class="form" method="post">
        <label for="">Enter The String </label>
        <input type="text" name="user_number">
        <br>
        <br>
        <label for=""> What to Search </label>
        <input type="text" name="user_number1">
        <br>
       
        <br>
        <button type="submit" name="submit" class="btn">Search It</button>
        <?php
        echo "<br>";
      if(isset($_POST['submit']))
       {
       $num_one=$_POST['user_number'];
       $num_one1=$_POST['user_number1'];
      
       if($num_one && $num_one1)
       {
        if(stripos($num_one,$num_one1))
        {
            echo  (stripos($num_one,$num_one1));
        }
        else{
            echo "Sorry ! String not found";
        }
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
