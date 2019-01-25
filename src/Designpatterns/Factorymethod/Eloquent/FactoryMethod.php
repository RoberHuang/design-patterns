<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/25
 * Time: 17:16
 */

namespace Roberhuang\Designpatterns\Factorymethod\Eloquent;

/**
 * Class FactoryMethod
 * @package Roberhuang\Designpatterns\Factorymethod\Eloquent
 */
abstract class FactoryMethod
{
    const PUBLIC = 1;
    const HIGHEND = 2;

    /**
     * @param string $type
     *
     * @return Roberhuang\Designpatterns\Factorymethod\Contracts\VehicleInterface a new instance of VehicleInterface
     * @throws \InvalidArgumentException
     */
    abstract protected function createVehicle($type);

    /**
     * create a car.
     *
     * @param int $type
     * @param int $speed
     *
     * @return Roberhuang\Designpatterns\Factorymethod\Contracts\VehicleInterface a new instance of VehicleInterface
     */
    public function create($type, $speed = 100)
    {
        $vehicle = $this->createVehicle($type);
        $vehicle->setMaxSpeed($speed);

        return $vehicle;
    }
}