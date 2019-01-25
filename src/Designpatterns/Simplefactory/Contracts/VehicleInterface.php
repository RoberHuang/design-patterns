<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/23
 * Time: 22:23
 */

namespace Roberhuang\Designpatterns\Simplefactory\Contracts;

/**
 * Interface VehicleInterface
 * @package Roberhuang\Designpatterns\Simplefactory\Contracts
 */
interface VehicleInterface
{
    /**
     * @param mixed $speed
     *
     * @return mixed
     */
    public function run($speed);
}