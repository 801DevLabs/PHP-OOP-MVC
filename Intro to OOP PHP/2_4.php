<?php
  class User {
    public $name;
    public $age;

    // CREATE A CONSTRUCTOR
    // RUNS WHEN AN OBJECT IS INSTANTIATED
    public function __construct($name, $age){
      echo 'Class: ' . __CLASS__ . ' instantiated. <br>';
      $this->name = $name;
      $this->age = $age;
    }

    public function sayHello(){
      return $this->name . " says hello";
    }

    // CREATE A DESCRTUCTOR
    // USED WHEN NO OTHER REFERENCES TO A CERTAIN OBJECT
    // USED FOR CLEANUP, CLOSING CONNECTIONS, ECT
    public function __destruct(){
      echo "destructor ran...";
    }
  }

$user1 = new User('Tom', 28);
echo $user1->name . ' is ' . $user1->age . ' years old.';
echo "<br>";
echo $user1->sayHello();

echo "<br><br>";
$user2 = new User('Ron', 53);
echo $user2->name . ' is ' . $user2->age . ' years old.';
echo "<br>";
echo $user2->sayHello();