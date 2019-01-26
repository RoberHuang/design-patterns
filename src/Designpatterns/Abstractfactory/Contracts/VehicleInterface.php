<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/25
 * Time: 22:17
 */

namespace Roberhuang\Designpatterns\Abstractfactory\Contracts;

/**
 * Interface VehicleInterface
 * @package Roberhuang\Designpatterns\Abstractfactory\Contracts
 */
interface VehicleInterface
{
    /**
     * @return int
     */
    public function getMaxSpeed();
}