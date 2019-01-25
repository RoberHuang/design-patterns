<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/23
 * Time: 22:29
 */

namespace Roberhuang\Designpatterns\Simplefactory\Eloquent;

use Roberhuang\Designpatterns\Simplefactory\Contracts\VehicleInterface;

/**
 * Class Bicycle
 * @package Roberhuang\Designpatterns\Simplefactory\Eloquent
 */
class Bicycle implements VehicleInterface
{
    /**
     * @param mixed $speed
     *
     * @return mixed|void
     */
    public function run($speed)
    {
        // TODO: Implement driveTo() method.
        echo 'The speed of this bicycle is '. $speed;

        return $speed;
    }
}