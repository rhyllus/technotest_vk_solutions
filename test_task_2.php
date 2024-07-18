<?php

abstract class Animal {
  protected string $name;
  protected string $breed;
  public function __construct($name)
  {
    $this->name = $name;
  }
  abstract function makeSound() : string;

  public function getName() : string{
    return $this->name;
  }
}

class Dog extends Animal {
  protected string $breed;
  public function __construct(string $name, string $breed = "Unknown")
  {
    parent::__construct($name);
    $this->breed = $breed;
  }
  public function makeSound() : string
  {
    return "Woof";
  }
}

class Cat extends Animal {
  public function __construct(string $name, string $breed = "Unknown") {
    parent::__construct($name);
    $this->breed = $breed;
  }

  public function makeSound() : string
  {
    return "Meow";
  }
}

$rex = new Dog("Rex", "Labrador");
$stooped = new Dog("Stooped");
$murka = new Cat("Murka");

echo "Dog " . $rex->getName() . " says " . $rex->makeSound() . "\n";
echo "Dog " . $stooped->getName() . " says " . $rex->makeSound() . "\n";
echo "Cat " . $murka->getName() . " says " . $murka->makeSound() . "\n";

?>
