<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 17-6-28
 * Time: 下午11:53
 */

namespace src\DesignPattern\SimpleFactory\Test;
require '../../../../vendor/autoload.php';


use DesignPattern\SimpleFactory\AdvertisementFactory;

class AdvertisementFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testAll()
    {
        $str = AdvertisementFactory::create('PcQianTiePian')->getLocation();
        $this->assertEquals('Pc QianTie is before video start', $str);
    }
}
