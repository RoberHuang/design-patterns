<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/23
 * Time: 22:10
 */

namespace Roberhuang\Designpatterns\Simplefactory\Eloquent;

/**
 * Class SimpleFactory
 * @package Roberhuang\Designpatterns\Simplefactory\Eloquent
 */
class SimpleFactory
{
    /**
     * @var array
     */
    protected $type_list;

    /**
     * You can inject your own vehicle type here.
     */
    public function __construct()
    {
        $this->type_list = [
            'bicycle' => __NAMESPACE__ .'\Bicycle',
            'car' => __NAMESPACE__ .'\Car'
        ];
    }

    /**
     * Create a car.
     * @param string $type
     * @return \Roberthuang\Designpatterns\Simplefactory\Contracts\VehicleInterface a new instance of VehicleInterface
     * @throws \InvalidArgumentException
     */
    public function createVehicle($type)
    {
        if (!array_key_exists($type, $this->type_list)) {
            throw new \InvalidArgumentException($type .' is Invalid');
        }
        $class_name = $this->type_list[$type];

        return new $class_name();
    }

}