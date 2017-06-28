<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 17-6-28
 * Time: 下午10:39
 */

namespace DesignPattern\SimpleFactory\Impl;


use DesignPattern\SimpleFactory\Inter\Advertisement;

class PcQianTiePian implements Advertisement
{

    public function getLocation()
    {
        return 'Pc QianTie is before video start';
    }
}