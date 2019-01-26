<?php
ini_set('display_errors',1);            //错误信息
ini_set('display_startup_errors',1);    //php启动错误信息
error_reporting(-1);

require __DIR__.'/../vendor/autoload.php';

echo '简单工厂模式<br>';
try {
    $simple_factory = new \Roberhuang\Designpatterns\Simplefactory\Eloquent\SimpleFactory();
    $vehicle = $simple_factory->createVehicle('bicycle');
    $vehicle->run('red');
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '<br><br>工厂方法模式';
try {
    $factory = new \Roberhuang\Designpatterns\Factorymethod\Eloquent\CarFactory();
    $vehicle = $factory ->create(2, 100);
    $vehicle->getMaxSpeed();
    echo '<br>重置速度';
    $vehicle->setMaxSpeed(1);
    $vehicle->getMaxSpeed();

    $factory = new \Roberhuang\Designpatterns\Factorymethod\Eloquent\BicycleFactory();
    $vehicle = $factory ->create(1, 10);
    $vehicle->getMaxSpeed();
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '<br><br>抽象工厂模式';
$factory = new \Roberhuang\Designpatterns\Abstractfactory\Eloquent\ChineseFactory();
$bicycle = $factory->createBicycle(10);
$bicycle->getMaxSpeed();
$car = $factory->createCar(100);
$car->getMaxSpeed();

$factory = new \Roberhuang\Designpatterns\Abstractfactory\Eloquent\GermanFactory();
$bicycle = $factory->createBicycle(15);
$bicycle->getMaxSpeed();
$car = $factory->createCar(150);
$car->getMaxSpeed();