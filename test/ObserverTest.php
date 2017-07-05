<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 11/20/16
 * Time: 11:18 PM
 */

namespace DesignPattern\Observer\Test;

use DesignPattern\Observer\Impl\AdvertisementList;
use DesignPattern\Observer\Impl\ListLog;

class ObserverTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AdvertisementList
     */
    private $list;


    public function setUp()
    {
        $this->list = new AdvertisementList();
        $this->list->addObserver(new ListLog());
    }

    public function testLog(){
//        $this->expectOutputRegex("Alibaba add to list \n");
        $this->expectOutputString("AliBaBa add to list \n");

        $this->list->addAdvertisement('AliBaBa');
    }
}
//require '../../../../vendor/autoload.php';
//testObserver::main();
//$dom = new \DOMElement('awe');
//var_dump($dom);