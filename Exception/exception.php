<?php

$a=12;
try{
    if($a>=10){
        echo $a;
    } else {
        throw new Exception("Enter value greater than 10");
    }
}

catch (Exception $ex){
    echo $ex->getMessage();
}
finally{
    echo "<br>inside finally";
} 