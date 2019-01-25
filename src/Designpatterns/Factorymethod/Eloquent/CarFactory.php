<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/25
 * Time: 17:36
 */

namespace Roberhuang\Designpatterns\Factorymethod\Eloquent;

/**
 * Class CarFactory
 * @package Roberhuang\Designpatterns\Factorymethod\Eloquent
 */
class CarFactory extends FactoryMethod
{
    /**
     * {@inheritdoc}
     */
    protected function createVehicle($type)
    {
        switch ($type) {
            case parent::PUBLIC:
                return new Bus();
                break;
            case parent::HIGHEND:
                return new RacingCar();
                break;
            default:
                throw new \InvalidArgumentException($type .' is Invalid');
        }
    }
}