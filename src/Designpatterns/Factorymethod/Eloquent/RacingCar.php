<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/25
 * Time: 17:54
 */

namespace Roberhuang\Designpatterns\Factorymethod\Eloquent;

use Roberhuang\Designpatterns\Factorymethod\Contracts\VehicleInterface;

/**
 * Class RacingCar
 * @package Roberhuang\Designpatterns\Factorymethod\Eloquent
 */
class RacingCar implements VehicleInterface
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
        echo '<br>The speed of this racing car is '. $this->max_speed;
        return $this->max_speed;
    }
}