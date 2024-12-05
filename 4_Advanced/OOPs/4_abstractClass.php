<?php
abstract class Base
{
    //this is abstract function
    abstract function printData();
}
class Derived extends Base
{
    function printData()
    {
        echo "Derived class";
    }
}
$obj = new Derived();
$obj->printData();
