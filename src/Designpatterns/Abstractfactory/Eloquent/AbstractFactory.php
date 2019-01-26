<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/25
 * Time: 22:04
 */

namespace Roberhuang\Designpatterns\Abstractfactory\Eloquent;

/**
 * Class AbstractFactory
 * @package Roberhuang\Designpatterns\Abstractfactory\Eloquent
 */
abstract class AbstractFactory
{
    /**
     * @param $speed
     * @return mixed
     */
    abstract public function createCar($speed);

    /**
     * @param $speed
     * @return mixed
     */
    abstract public function createBicycle($speed);
}