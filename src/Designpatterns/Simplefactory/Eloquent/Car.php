<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/23
 * Time: 22:35
 */

namespace Roberhuang\Designpatterns\Simplefactory\Eloquent;


use Roberhuang\Designpatterns\Simplefactory\Contracts\VehicleInterface;

/**
 * Class Car
 * @package Roberhuang\Designpatterns\Simplefactory\Eloquent
 */
class Car implements VehicleInterface
{
    /**
     * @param mixed $speed
     *
     * @return mixed|void
     */
    public function run($speed)
    {
        // TODO: Implement driveTo() method.
        echo 'The speed of this car is '. $speed;

        return $speed;
    }
}