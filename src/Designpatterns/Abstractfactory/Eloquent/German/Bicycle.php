<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 2019/1/25
 * Time: 22:27
 */

namespace Roberhuang\Designpatterns\Abstractfactory\Eloquent\German;

use Roberhuang\Designpatterns\Abstractfactory\Eloquent\Bicycle as AbstractBicycle;

/**
 * Class Bicycle
 * @package Roberhuang\Designpatterns\Abstractfactory\Eloquent\German
 */
class Bicycle extends AbstractBicycle
{
    /**
     * @return int
     */
    public function getMaxSpeed()
    {
        echo '<br>The maximum speed of a bicycle made in German is '.$this->max_speed;

        return $this->max_speed;
    }
}