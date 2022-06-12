<?php
session_start();
if(isset($_SESSION['u_name']))
{
  session_destroy();
  echo "<script>location.href='login.html'</script>";
}
else
{
    echo "<script>location.href='login.html'</script>";
}




?>