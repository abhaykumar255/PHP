<?php

$fileh=fopen("mytext.txt","w");
$file=fwrite($fileh,"hello Abhay");

$filer=fread($file,"r");
?>