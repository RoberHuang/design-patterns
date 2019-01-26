<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/25
 * Time: 22:20
 */

namespace Roberhuang\Designpatterns\Abstractfactory\Eloquent;

use Roberhuang\Designpatterns\Abstractfactory\Contracts\VehicleInterface;

/**
 * Class Car
 * @package Roberhuang\Designpatterns\Abstractfactory\Eloquent
 */
abstract class Car implements VehicleInterface
{
    /**
     * @var int
     */
    protected $max_speed;

    /**
     * Car constructor.
     * @param $max_speed int
     */
    public function __construct($max_speed)
    {
        $this->max_speed = $max_speed;
    }
}