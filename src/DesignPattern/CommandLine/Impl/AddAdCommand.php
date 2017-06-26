<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 17-6-26
 * Time: 下午11:01
 */

namespace DesignPattern\CommandLine\Impl;


use DesignPattern\CommandLine\Inter\Command;

class AddAdCommand implements Command
{

    function onCommand($command, $args)
    {
        if ($command!=='addAdCommand')
            return false;
        else
            $result = 'add ad : '.$args.' successful';
            return $result;
    }
}