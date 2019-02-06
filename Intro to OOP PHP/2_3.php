<?php
// DEFINE A CLASS
class User {
  // PROPERTIES (ATTRIBUTES)
  public $name;
  // METHODS (FUNCTIONS)
  public function sayHello(){
    return $this->name . " says hello";
  }
}

// INSTATIATE A USER OBJECT FROM THE USER CLASS
$user1 = new User();
$user1->name = 'Tom';
echo $user1->name;
echo "<br>";
echo $user1->sayHello();

echo "<br>";
// CREATE NEW USER
$user2 = new User();
$user2->name = 'Ron';
echo $user2->name;
echo "<br>";
echo $user2->sayHello();