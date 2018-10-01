<?php
   // class in php
class exampleClass
{
    public function echo_string($inputString)
    {

      echo "echo from the method $inputString";

    }
}


class exampleSubClass extends exampleClass
{


}

//Object Parent class
$exampleParent = new exampleClass;

// call method 
$exampleParent->echo_string("test \n");

//Object Child class
$exampleChild = new exampleSubClass;

//call method inherited from parent
$exampleChild->echo_string("test again \n");

?>