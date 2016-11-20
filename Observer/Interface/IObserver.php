<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 11/20/16
 * Time: 11:05 PM
 */

//namespace Observer;


interface IObserver
{
    public function onChanged($sender,$args);
}