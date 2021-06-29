<?php


namespace Eduweb;


class Car
{
    protected $make = '';
    protected $model = '';
    protected $speed;
    protected $color = 'red';
    protected $attributes = [];

    public function __construct(string $make, string $model, Speed $speed)
    {
        $this->make = $make;
        $this->model = $model;
        $this->speed = $speed;
    }

    public function drive() : void {
        echo "\nDriving\n";
    }

//    /**
//     * @param Speed|int $speed
//     */
//    public function setSpeed($speed): void
//    {
//        $this->speed = $speed;
//    }

    public function slowDown() : void
    {
        $this->getSpeed()->slowDown();
    }
    /**
     * @return Speed
     */
    public function getSpeed(): Speed
    {
        return $this->speed;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

//    public function __set($name, $value) : void
//    {
//        $this->attributes[$name] = $value;
//    }
//
//    public function __get(string $name)
//    {
//        return $this->attributes[$name] ? : null;
//    }

    public function __call(string $name, array $arguments)
    {
        var_dump($name, $arguments);
    }

}