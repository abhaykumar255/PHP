<?php
class calculation{
    public $a,$b,$c;
    function sum(){
        $this->c=$this->a + $this->b;
        retrun $this->c;

    }
    function sub(){
        $this->c=$this-> a - $this->b;
        retrun $this->c;

    }
}
$c1=new calculation();
$c1->a=10;
$c1->b=20; 

$c2=new calculation();
$c2->a=50;
$c2->b=40;

echo $c1->sum() . "\n";
echo $c2->sub() . "\n";


?>