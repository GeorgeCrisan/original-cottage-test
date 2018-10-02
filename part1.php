<?php
//class
class exampleClass 
{
  public function first_method($customString)
  {
    echo "String to echo $customString \n";
  }
}

 //create object by instantiating class
$exampleParent = new exampleClass;
$exampleParent->first_method('extra stuff');

 // class inheritance
class exampleSubClass extends exampleClass
{

}

$exampleChild = new exampleSubClass;
$exampleChild->first_method('more extra stuff');


class MethodOverloadingExample
{

  function __construct(){

  }

  protected  function printString()
  {
     echo "Super protected but not private string";
  }

  public function __call($name,$arguments)
  {
    echo "cal object method $name" . implode(', ', $arguments) . "\n";
  }

  public static function __callStatic($name, $arguments)
  {
         
     echo "cal static method $name" . implode(', ', $arguments) . "\n";
  }

}



$testObj = new MethodOverloadingExample();
// call method
$testObj->printString();
// overload method
$testObj->newMethod(' I am new to this object');
// overload static method
MethodOverloadingExample::secondNewMethod(' I am also new');

?>