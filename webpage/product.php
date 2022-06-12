<?php
session_start();
if(isset($_SESSION['u_name']))
{
    echo "welcome to details page";
    echo "<h1 align=center>".$_SESSION['u_name']."</h1>";
    echo "<a href=home.php>click for Home</a>";
    echo "<br><a href=logout.php><input type=button value=logout></a>";
}
else
{
    echo "<script>location.href='login.html'</script>";
}



?>