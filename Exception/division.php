<?php
class MyException extends Exception{
    function errorMessage(){
        $errror="My number is ".$this->getMessage();
        return $errror;
    }
}

function division($n){
    try{
        if($n<=0){
            throw new Exception("<br> Enter the valid number");
        }
        if($n==3){
            throw new MyException("<br> Number is 3");
        }
        if($n==4){
            throw new MyException("<br> Number is 4");
        }

        $div=2/$n;
        echo "<br>".$div;
    }
    catch (Exception $ex){
        echo $ex->getMessage();
    }
    catch(MyException $e){
        echo $e->errorMessage();
    }

}
division(2);
division(0);
division(3);
division(4);

?>