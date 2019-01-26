<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/25
 * Time: 22:27
 */

namespace Roberhuang\Designpatterns\Abstractfactory\Eloquent\German;

use Roberhuang\Designpatterns\Abstractfactory\Eloquent\Car as AbstractCar;

/**
 * Class Car
 * @package Roberhuang\Designpatterns\Abstractfactory\Eloquent\German
 */
class Car extends AbstractCar
{
    /**
     * @return int
     */
    public function getMaxSpeed()
    {
        echo '<br>The maximum speed of a car made in German is '.$this->max_speed;

        return $this->max_speed;
    }
}