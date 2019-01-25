<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/25
 * Time: 18:25
 */

namespace Roberhuang\DesignPatterns\Tests\Factorymethod;

use PHPUnit\Framework\TestCase;
use Roberhuang\Designpatterns\Factorymethod\Contracts\VehicleInterface;
use Roberhuang\Designpatterns\Factorymethod\Eloquent\BicycleFactory;
use Roberhuang\Designpatterns\Factorymethod\Eloquent\CarFactory;
use Roberhuang\Designpatterns\Factorymethod\Eloquent\FactoryMethod;

/**
 * Class FactoryMethodTest
 * @package Roberhuang\DesignPatterns\Tests\Factorymethod
 */
class FactoryMethodTest extends TestCase
{
    protected $type = [
        FactoryMethod::PUBLIC,
        FactoryMethod::HIGHEND
    ];

    public function getFactory()
    {
        return [
            [new CarFactory()], [new BicycleFactory()]
        ];
    }

    /**
     * @test
     * @param FactoryMethod $factory
     * @dataProvider getFactory
     */
    public function createVehicle(FactoryMethod $factory)
    {
        foreach ($this->type as $type) {
            $obj = $factory->create($type, 100);

            $this->assertInstanceOf(VehicleInterface::class, $obj);
            $this->assertEquals(100, $obj->getMaxSpeed());
        }
    }

    /**
     * @test
     * @dataProvider getFactory
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage spaceship is Invalid
     */
    public function unknownType(FactoryMethod $factory)
    {
        $factory->create('spaceship');
    }
}