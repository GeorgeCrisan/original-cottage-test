<?php
//Code tested in PHP 7.0.8 Zend Engine v.3.0.0
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
$testObj2 =  new MethodOverloadingExample();
//var_dump($testObj);
//var_dump($testObj2);

// overload method ( dynamical create method)
$testObj->newMethod(' I am new to this object');
// overload static method
MethodOverloadingExample::secondNewMethod(' I am also new');



class RealOverloading
{

protected const initialNr = 0;

function __call($name,$arguments)
{

    if($name === 'addNumbers'){
    
  switch(count($arguments)){
    
    case 0:
    
      return self::initialNr;
    
    case 1:
    
      return $arguments[0] + self::initialNr;
    
    case 2:
    
      return $arguments[0] + $arguments[1];
    
    case 3:
    
      return $arguments[0] + $arguments[1] + $arguments[2];

      }

    }

elseif ($name === 'multiplyNumbers'){

      switch(count($arguments)){
      
      case 0:
      
        return 0;
      
      case 1:
      
        return $arguments[0];

      case 2:

        return $arguments[0] * $arguments[1];

      case 3:

        return $arguments[0] * $arguments[1] * $arguments[2];

      }

    }

  }

}

$obj = new RealOverloading();

//create method
var_dump($obj->addNumbers(5));

//overload method
var_dump($obj->addNumbers(5,6));
var_dump($obj->addNumbers(5,7,'7'));
var_dump($obj->multiplyNumbers(5));
var_dump($obj->multiplyNumbers(8,8));
var_dump($obj->multiplyNumbers(5,7,9));




class exampleSingleton{
     //Hold the class instance
   private static $instance;
       // Make constructor private
   private function __construct()
   {

   }

   public static function getInstance()
  {
    if (self::$instance == null)
    {
      self::$instance = new exampleSingleton();
    }
 
    return self::$instance;
  }
}

$object1 =  exampleSingleton::getInstance();
$object2 = exampleSingleton::getInstance();


echo(var_dump($object1));
echo(var_dump($object2));


//example of Singleton usage
// After establishing an database connection
// any attempt to create a new object out of the class will
//return the initial connection
//this will prevent creating new connections and therefore
//will prevent slowing down the system

class DbConnect
{
  private static $instance = null;
  private $connection;
  private $host = 'localhost';
  private $user ='db user-name';
  private $pass = 'db password';
  private $name = 'db name';


private function __construct()
  {
    $this->connection = ' handle db connection';
  } 

public static function getInstance(){

   if(!self::$instance){

     self::$instance = new DbConnect();
   }

   return self::$instance;
}

public function getConnection()
  {
  return $this->connection;
  }
}


$instance = DbConnect::getInstance();
$conn = $instance->getConnection();
var_dump($instance);

$instance = DbConnect::getInstance();
$conn = $instance->getConnection();
var_dump($instance);

$instance = DbConnect::getInstance();
$conn = $instance->getConnection();
var_dump($conn);

?>