<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/25
 * Time: 17:55
 */

namespace Roberhuang\Designpatterns\Factorymethod\Eloquent;

use Roberhuang\Designpatterns\Factorymethod\Contracts\VehicleInterface;

/**
 * Class Bus
 * @package Roberhuang\Designpatterns\Factorymethod\Eloquent
 */
class Bus implements VehicleInterface
{
    /**
     * @var int
     */
    protected $max_speed;

    /**
     * @param int $speed
     */
    public function setMaxSpeed($speed)
    {
        $this->max_speed = $speed;
    }

    /**
     * @return int
     */
    public function getMaxSpeed()
    {
        echo '<br>The speed of this bus is '. $this->max_speed;
        return $this->max_speed;
    }
}