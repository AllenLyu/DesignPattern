<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 11/20/16
 * Time: 11:06 PM
 */

namespace DesignPattern\Observer\Inter;


interface IObservable
{
    function addObserver($observer);
}