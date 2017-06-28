<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 17-6-28
 * Time: 下午10:46
 */

namespace DesignPattern\SimpleFactory;


use DesignPattern\SimpleFactory\Inter\Advertisement;
use DesignPattern\SimpleFactory\Impl\PcQianTiePian;

class AdvertisementFactory
{
    /**
     * @param $name
     * @return Advertisement
     */
    public static function create($name)
    {
        if (class_exists($name)){
            return new $name();
        }else{
            return null;
        }
    }
}