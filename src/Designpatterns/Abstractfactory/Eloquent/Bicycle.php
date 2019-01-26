<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/25
 * Time: 22:25
 */

namespace Roberhuang\Designpatterns\Abstractfactory\Eloquent;

use Roberhuang\Designpatterns\Abstractfactory\Contracts\VehicleInterface;

/**
 * Class Bicycle
 * @package Roberhuang\Designpatterns\Abstractfactory\Eloquent
 */
abstract class Bicycle implements VehicleInterface
{
    /**
     * @var int
     */
    protected $max_speed;

    /**
     * Bicycle constructor.
     * @param $max_speed int
     */
    public function __construct($max_speed)
    {
        $this->max_speed = $max_speed;
    }
}