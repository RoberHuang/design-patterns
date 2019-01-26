<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/25
 * Time: 22:15
 */

namespace Roberhuang\Designpatterns\Abstractfactory\Eloquent;

/**
 * Class GermanFactory
 * @package Roberhuang\Designpatterns\Abstractfactory\Eloquent
 */
class GermanFactory extends AbstractFactory
{
    /**
     * @param $speed
     * @return German\Car
     */
    public function createCar($speed)
    {
        return new German\Car($speed);
    }

    /**
     * @param $speed
     * @return German\Bicycle
     */
    public function createBicycle($speed)
    {
        return new German\Bicycle($speed);
    }
}