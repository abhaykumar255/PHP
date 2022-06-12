<?php

class Iphone{
    public $col = "aqua";
    public function calli(){
        echo "hell go to is the";
    }

}
$imax = new Iphone;
$imaxpro = new Iphone();
//you don't have to put dollar sign while calling the varibale in print function .
//echo $imax->col;
//we can change the variable from gthe outside of class while printing.
//$imax->col="red";
echo $imax->col;
echo $imaxpro->calli();
?>