<?php 
//=============1==============
function task1 ($units){
    $bill;
    if ($units >= 50) {
        $bill = 50*2.5;
    } 
    if ($units >= 150) {
        $bill += 100*5;
    }
    if ($units >= 250) {
        $bill += 100*6.2;
    }
    if ($units > 250) {
        $x = $units - 250;
        $bill += $x*7.5;
    }
    echo $bill;
}

//=============2==============

function task2 ($x,$o,$y){
switch ($o) {
    case '+':
        return $x+$y;
        
    case '-':
        return $x-$y;
        
        
    case '*':
        return $x*$y;
        
        
    case '/':
        return $x/$y;

    default:
    return "error";
}
}
// echo task2(3,"+",5);
//=============3==============
function task3 (){
        $name = "Abd";
        $age = 20;
        if ($age >= 18) {
            echo $name . ", you can vote";
        } else {
            echo $name . ", you can not vote. ";
        }
    }
    task3();
//=============4==============
function task4 (){
    $number = 324; 
    if ($number > 0) 
    {
        echo $number . " is a positive number";
    } else if ($number < 0) 
    {
        echo $number . " is a negative number ";
    } else if ($number == 0) 
    {
        echo "zero";
    } else {
        echo "please enter a numeric value";
    }
}
task4();

?>