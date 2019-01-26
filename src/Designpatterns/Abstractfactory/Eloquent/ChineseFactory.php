<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/25
 * Time: 22:12
 */

namespace Roberhuang\Designpatterns\Abstractfactory\Eloquent;

/**
 * Class ChineseFactory
 * @package Roberhuang\Designpatterns\Abstractfactory\Eloquent
 */
class ChineseFactory extends AbstractFactory
{
    /**
     * @param $speed
     * @return Chinese\Car
     */
    public function createCar($speed)
    {
        return new Chinese\Car($speed);
    }

    /**
     * @param $speed
     * @return Chinese\Bicycle
     */
    public function createBicycle($speed)
    {
        return new Chinese\Bicycle($speed);
    }
}