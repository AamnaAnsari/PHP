<!-- Abstract Class  -->
    <?php
abstract class Animal {
  
    abstract protected function makeSound();

    // Regular method
    public function sleep() {
        echo "Sleeping...";
    }
}

// Subclass must implement the abstract method
class Dog extends Animal {
    public function makeSound() {
        echo "Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow!";
    }
}

// Usage
$dog = new Dog();
$dog->makeSound(); 
$dog->sleep();     

echo "<br> <br>";

$cat = new Cat();
$cat->makeSound();
$cat->sleep();    

?>



