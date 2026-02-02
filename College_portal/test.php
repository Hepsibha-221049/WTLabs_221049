<?php
echo "$_SERVER[DOCUMENT_ROOT]";
echo "<br>";
$y=20;

function test() {
    $x=10;
    echo $x;
    echo "<br>";
}
test();
#global scope
// using global keyword
// using GLOBALS array
function test2(){
    global $y;
    echo $y;
    echo "<br>";
}

test2();

#GLOBALS
function test3(){
    echo $GLOBALS['y'];
    echo "<br>";
}
TEST3();
var_dump($y);
echo "<br>";
function counter(){
    static $count=0;
    $count++;
    echo $count;
    echo "<br>";
}
counter();
counter();
counter();