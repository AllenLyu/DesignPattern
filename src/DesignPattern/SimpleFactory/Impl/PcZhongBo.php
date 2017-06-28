<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 17-6-28
 * Time: 下午10:41
 */

namespace DesignPattern\SimpleFactory\Impl;


use DesignPattern\SimpleFactory\Inter\Advertisement;

class PcZhongBo implements Advertisement
{

    public function getLocation()
    {
        return 'Pc ZhongBo is in the video';
    }
}