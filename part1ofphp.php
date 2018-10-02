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

?>