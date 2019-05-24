<?php

interface CarService {
    public function getCost();
    public function getDescription();
};

class BasicService implements CarService {
    public function getCost()
    {
        return 10;
    }

    public function getDescription() {
        return 'basic';
    }

}

class Oil implements CarService {
    private $carservice;

    public function __construct(CarService $carService)
    {
        $this->carservice = $carService;
    }

    public function getCost()
    {
        return 5 + $this->carservice->getCost();
    }

    public function getDescription() {
        return $this->carservice->getDescription() . ' with oil';
    }

}

class window implements CarService {
    private $carservice;

    public function __construct(CarService $carService)
    {
        $this->carservice = $carService;
    }

    public function getCost()
    {
        return 2 + $this->carservice->getCost();
    }

    public function getDescription() {
        return $this->carservice->getDescription() . ' with window';
    }

}

$car = new window(new Oil(new BasicService));

echo $car->getCost();