<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/25
 * Time: 18:05
 */

namespace Roberhuang\Designpatterns\Factorymethod\Eloquent;

use Roberhuang\Designpatterns\Factorymethod\Contracts\VehicleInterface;

/**
 * Class RacingBicycle
 * @package Roberhuang\Designpatterns\Factorymethod\Eloquent
 */
class RacingBicycle implements VehicleInterface
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
        echo '<br>The speed of this racing bicycle is '. $this->max_speed;
        return $this->max_speed;
    }
}