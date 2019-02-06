<?php
  class User {
    private $name;
    private $age;

    public function __construct($name, $age){
      $this->name = $name;
      $this->age = $age;
    }

    // CREATE GETTER
    public function getName(){
      return $this->name;
    }

    // CREATE SETTER
    public function setName($name){
      $this->name = $name;
    }

    // __get MAGIC METHOD
    public function __get($property){
      if(property_exists($this, $property)){
        return $this->$property;
      }
    }

    // __set MAGIC METHOD
    public function __set($property, $value){
      if(property_exists($this, $property)){
        $this->$property = $value;
      }
      return $this;
    }
  }

$user1 = new User('Tom', 28);

// echo $user1->setName('Ron');
// echo $user1->getName();

$user1->__set('age', 29);
echo $user1->__get('age');