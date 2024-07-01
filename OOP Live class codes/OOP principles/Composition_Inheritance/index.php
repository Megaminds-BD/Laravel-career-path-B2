<?php

/**
 * "Favor Composition over Inheritance"
 */

class Vehicle{
    public Engine $engine;
    public function __construct(Engine $engine) // Dependency injection
    {
        $this->engine = $engine;
    }

    public function start()
    {
        $this->engine->startEngine();
    }
}

class Car extends Vehicle {

}

class Engine {
    public function __construct(string $brand, string $model)
    {
    }

    public function startEngine()
    {
        //
    }
}

// Service container
// IoC Container

$car = app()->make(Car::class);
$car->start();








class A {
    public B $b;

    public function __construct(B $b) // Dependency Injection
    {
        $this->b = $b;
    }
}

class B {

}

$a = new A(new B());