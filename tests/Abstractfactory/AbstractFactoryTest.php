<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/26
 * Time: 9:50
 */

namespace Roberhuang\DesignPatterns\Tests\Abstractfactory;

use PHPUnit\Framework\TestCase;
use Roberhuang\Designpatterns\Abstractfactory\Contracts\VehicleInterface;
use Roberhuang\Designpatterns\Abstractfactory\Eloquent\AbstractFactory;
use Roberhuang\Designpatterns\Abstractfactory\Eloquent\ChineseFactory;
use Roberhuang\Designpatterns\Abstractfactory\Eloquent\GermanFactory;

/**
 * Class AbstractFactoryTest
 * @package Roberhuang\DesignPatterns\Tests\Abstractfactory
 */
class AbstractFactoryTest extends TestCase
{
    /**
     * @return array
     */
    public function getFactory()
    {
        return [
            [new ChineseFactory()],
            [new GermanFactory()]
        ];
    }

    /**
     * @param AbstractFactory $factory
     * @dataProvider getFactory
     */
    public function testCreateVehicle(AbstractFactory $factory)
    {
        $car = $factory->createCar(100);
        $bicycle = $factory->createBicycle(10);
        $this->assertInstanceOf(VehicleInterface::class, $car);
        $this->assertInstanceOf(VehicleInterface::class, $bicycle);

        $this->assertEquals(100, $car->getMaxSpeed());
    }
}