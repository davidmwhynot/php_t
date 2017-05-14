<?php
  class Person {
    private $name;
    private $email;
    public static $ageRequirement = 18;
    private static $ageLimit = 40;
    public function __construct($name, $email) {
      echo __CLASS__ . ' created';
      $this->name = $name;
      $this->email = $email;
    }
    public function __destruct() { // this is VERY useful for adding data to a database or something
      echo __CLASS__ . ' ' . $this->name . ' destroyed<br>';
    }
    public function getName() {
      return $this->name;
    }
    public function setName($name) {
      $this->name = $name;
    }
    public function getEmail() {
      return $this->email;
    }
    public function setEmail($email) {
      $this->email = $email;
    }
    public static function getAgeLimit() {
      return self::$ageLimit;
    }
  }
  class Customer extends Person {
    private $balance;
    public function __construct($name, $email, $balance) {
      parent::__construct($name, $email);
      echo '<br>' . __CLASS__ . ' created';
      $this->balance = $balance;
    }
    public function getBalance() {
      return $this->balance;
    }
    public function setBalance($balance) {
      $this->balance = $balance;
    }
  }
  echo Person::$ageRequirement . '<br>';
  echo Person::getAgeLimit() . '<br>';
  $person1 = new Person('Bill','bill@gmail.com');
  echo '<br>';
  // $person1->name = 'John Doe';
  // echo $person1->name;
  $person1->setName('Steve');
  echo $person1->getName();
  echo '<br>';
  $person1->setEmail('steve@gmail.com');
  echo $person1->getEmail();
  echo '<br>';
  $person2 = new Person('Bob','bob@gmail.com');
  echo '<br>';
  echo $person2->getName();
  echo '<br>';
  echo $person2->getEmail();
  echo '<hr>';
  $customer1 = new Customer('David','davidmwhynot@gmail.com', 300);
  echo '<br>';
  echo $customer1->getBalance();
  echo '<br>';
?>
