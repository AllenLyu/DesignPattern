<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 11/20/16
 * Time: 11:17 PM
 */

namespace DesignPattern\Observer\Impl;

use DesignPattern\Observer\Inter\IObserver;


class ListLog implements IObserver
{

    public function onChanged($sender, $args)
    {
        echo $args." add to list \n";
    }
}