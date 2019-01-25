<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/25
 * Time: 17:49
 */

namespace Roberhuang\Designpatterns\Factorymethod\Eloquent;


class BicycleFactory extends FactoryMethod
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
            parent::PUBLIC => __NAMESPACE__ .'\PublicBicycle',
            parent::HIGHEND => __NAMESPACE__ .'\RacingBicycle'
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function createVehicle($type)
    {
        if (!array_key_exists($type, $this->type_list)) {
            throw new \InvalidArgumentException($type .' is Invalid');
        }
        $class_name = $this->type_list[$type];

        return new $class_name();
    }
}