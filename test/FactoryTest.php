<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 11/20/16
 * Time: 10:43 PM
 */
namespace DesignPattern\Factory\Test;

use DesignPattern\Factory\Impl\Advertisement;
use DesignPattern\Factory\Impl\AdvertisementFactory;


class FactoryTest extends \PHPUnit_Framework_TestCase{

    /**
     * @var Advertisement
     */
    private $factory;

    public function setUp()
    {
        $this->factory = AdvertisementFactory::Create(1);
        $this->factory->setAdName('alibaba');
    }

    public function testName(){
        self::assertEquals('alibaba',$this->factory->getAdName());
    }

    public function testID(){
        self::assertEquals('1',$this->factory->getAdID());
    }

}
