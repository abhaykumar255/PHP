<?php
$uname = "admin";
$passwr = "admin";
session_start();
if(isset($_SESSION['u_name']))
{
    echo "welcome to home page";
    echo "<h1 align=center>".$_SESSION['u_name']."</h1>";
    echo "<a href=product.php>click for product details</a>";
    echo "<br><a href=logout.php><input type=button value=logout></a>";

}
else{
    if($_POST['fname']== $uname && $_POST['passw']==$passwr)
    {
       $_SESSION['u_name']=$uname;
       echo "<script>location.href='home.php'</script>";

    }
    else{
        echo "<script>alert(incorrect username or password!!)</script>";
        echo "<script>location.href='login.html'</script>";
    }
}

?>