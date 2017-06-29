<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 17-6-28
 * Time: 下午10:46
 */

namespace DesignPattern\SimpleFactory;


use DesignPattern\SimpleFactory\Inter\Advertisement;

class AdvertisementFactory
{


    /**
     * @param $name
     * @return Advertisement
     */
    public static function create($name)
    {
        $adClassMap = array('PcQianTiePian'=>'\DesignPattern\SimpleFactory\Impl\PcQianTiePian',
            'WirelessQianTie'=>'\DesignPattern\SimpleFactory\Impl\WirelessQianTie',
            'PcZhongBo'=>'\DesignPattern\SimpleFactory\Impl\PcZhongBo');


        if (class_exists($adClassMap[$name])){
            return new $adClassMap[$name]();
        }else{
            return null;
        }
    }
}