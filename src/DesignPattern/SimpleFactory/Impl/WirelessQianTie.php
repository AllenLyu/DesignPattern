<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 17-6-28
 * Time: 下午10:44
 */

namespace DesignPattern\SimpleFactory\Impl;


use DesignPattern\SimpleFactory\Inter\Advertisement;

class WirelessQianTie implements Advertisement
{

    public function getLocation()
    {
        return 'Wireless QianTie is before video (on Mobile device)';
    }
}