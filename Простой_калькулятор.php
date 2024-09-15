<?php

function math_Opeartion($arg_one, $arg_two, $symbol){
    if ($symbol == "+") {
        echo $arg_one + $arg_two;
    }elseif ($symbol == "-") {
        echo $arg_one - $arg_two;
    }elseif ($symbol == "/") {
        echo $arg_one / $arg_two;
    }elseif ($symbol == "*") {
        echo $arg_one * $arg_two;
    }elseif ($symbol == "sin") {
        echo sin($arg_one);
    }elseif ($symbol == "cos") {
        echo cos($arg_one);
    }elseif ($symbol == "tan") {
        echo tan($arg_one);
    }elseif ($symbol == "ctan") {
        echo 1/tan($arg_one);
    }elseif ($symbol == "sqr") {
        echo $arg_one * $arg_one;
    }elseif ($symbol == "sqrt") {
        echo sqrt($arg_one);
    }elseif ($symbol == "log") {
        echo log($arg_one);
    }elseif ($symbol == "abs") {
        echo abs($arg_one);
    }elseif ($symbol == "pi") {
        echo pi();
    }
}
math_Opeartion(2,2,"+");
