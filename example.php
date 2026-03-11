<?php
    //This is a line comment
    /*
    This is a block comment
    Developer: Johny Ramirez
    */
    
    echo "Hello world. We're here"; 
    $num1 = 20;
    $num2 = 10;
    $add = $num1 + $num2;
    echo "<br>";
    echo "<font color ='red'><b>The addition is: </b></font>". $add;
    if ($num1>$num2){
        echo "<br>You win";
    }else{
        echo "<br>You lose";
    }
?>