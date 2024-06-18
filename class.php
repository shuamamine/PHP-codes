<?php
class student
{
    private $roll=1;
    private $name="Taylor";
    function __construct(){
        echo "Constructor called";
    }
    function display(){
        echo "Roll=".$this->roll;
    }
    
}
$s1=new student();
$s1->display();
?>