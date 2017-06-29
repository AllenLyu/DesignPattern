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

    private $testArray = array('PcQianTiePian'=>'Pc QianTie is before video start',
        'WirelessQianTie'=>'Wireless QianTie is before video (on Mobile device)',
        'PcZhongBo'=>'Pc ZhongBo is in the video');




    public function testAll()
    {

        foreach ($this->testArray as $item=>$output) {
            $str = AdvertisementFactory::create($item)->getLocation();
            $this->assertEquals($output, $str);
        }

    }
}
