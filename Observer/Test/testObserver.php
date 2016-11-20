<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 11/20/16
 * Time: 11:18 PM
 */

//namespace namespaceObserver;
require '../Class/AdvertisementList.php';
require '../Class/ListLog.php';
class testObserver
{
    public static function main(){
        $list = new AdvertisementList();
        $list->addObserver(new ListLog());



        $list->addAdvertisement('AliBaBa');
        $list->addAdvertisement('Baidu');
        $list->addAdvertisement('Tencent');
        $list->addAdvertisement('Storm');
    }
}

testObserver::main();