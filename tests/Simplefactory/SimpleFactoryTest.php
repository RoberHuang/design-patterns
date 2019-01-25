<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/23
 * Time: 22:46
 */

namespace Roberhuang\Designpatterns\Tests\Simplefactory;

use PHPUnit\Framework\TestCase;
use Roberhuang\Designpatterns\Simplefactory\Eloquent\SimpleFactory;

/**
 * Class SimpleFactoryTest
 * @package Roberhuang\Designpatterns\Tests\Simplefactory
 */
class SimpleFactoryTest extends TestCase
{
    protected $factory;

    protected function setUp()
    {
        $this->factory = new SimpleFactory();
    }

    public function getType()
    {
        return [
            ['bicycle'],
            ['car']
        ];
    }

    /**
     * @dataProvider getType
     */
    public function testCreateVehicle($type)
    {
        $obj = $this->factory->createVehicle($type);

        $this->assertEquals('100', $obj->run('100'));
        $this->assertInstanceOf('Roberhuang\Designpatterns\Simplefactory\Contracts\VehicleInterface', $obj);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testBadType()
    {
        $this->factory->createVehicle('train');
    }
}