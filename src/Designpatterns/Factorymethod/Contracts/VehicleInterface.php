<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/25
 * Time: 18:09
 */

namespace Roberhuang\Designpatterns\Factorymethod\Contracts;

/**
 * Interface VehicleInterface
 * @package Roberhuang\Designpatterns\Factorymethod\Contracts
 */
interface VehicleInterface
{
    /**
     * @param int $speed
     */
    public function setMaxSpeed($speed);

    /**
     * @return int
     */
    public function getMaxSpeed();
}