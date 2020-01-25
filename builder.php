<?php

class Pizza{
    
    private $cheese;
    private $bacon;
    private $ananas;
    private $mushrooms;
    private $seafood;
    
    public function __construct($pizzaBuilder)
    {
        $this->cheese = $pizzaBuilder->cheese??false;
        $this->bacon = $pizzaBuilder->bacon??false;
        $this->ananas = $pizzaBuilder->ananas??false;
        $this->mushrooms = $pizzaBuilder->mushrooms??false;
        $this->seafood = $pizzaBuilder->seafood??false;
    }

}

class PizzaBuilder{
    public $cheese;
    public $bacon;
    public $ananas;
    public $mushrooms;
    public $seafood;
    
    public function addCheese():PizzaBuilder
    {
        echo "added cheese\n";
        $this->cheese = true;
        return $this;
    }
    public function addBacon():PizzaBuilder
    {
        echo "added bacon\n";
        $this->bacon = true;
        return $this;
    }
    
    public function addAnanas():PizzaBuilder
    {
        echo "added ananas\n";
        $this->ananas = true;
        return $this;
    }
    
    public function addMushrooms():PizzaBuilder
    {
        echo "added mushrooms\n";
        $this->mushrooms = true;
        return $this;
    }
    
    public function addSeafood():PizzaBuilder
    {
        echo "added seafood\n";
        $this->seafood = true;
        return $this;
    }
    
    public function build(){
        return new Pizza($this);
    }
}

 $pizza = (new PizzaBuilder())->addCheese()->addBacon()->addMushrooms()->addSeafood()->build();
 var_dump($pizza);