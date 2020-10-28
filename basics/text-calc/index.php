<?php

    // command input [operation operand1 operand2]
    $cmd = $_GET['cmd'];
    
    // analyse 
    $arr = explode(" ", $cmd);
    if( sizeof($arr) < 3 ){
        echo "Command is missing Operands!";
        die();
    }

    $operator = $arr[0];
    $opr1 = $arr[1];
    $opr2 = $arr[2];

    // operation
    $answer = 0;
    switch($operator){
        case 'add':
            $answer = $opr1 + $opr2;
            break;
        case 'sub':
            $answer = $opr1 - $opr2;
            break;
        case 'mul':
            $answer = $opr1 * $opr2;
        break;
        case 'div':
            $answer = $opr1 / $opr2;
            break;
        case 'mod':
            $answer = $opr1 % $opr2;
            break;
        case 'pow':
            $answer = $opr1 ** $opr2; // pow(x,y)
            break;
        // cos, sin
        default:
            echo "Operation Invalid! use: add, sub, mul, div, mod, pow";
            die();
        break;
    }
    
    // output
    echo "<br> Command = $cmd";
    echo "<br> Answer = $answer";

?>

