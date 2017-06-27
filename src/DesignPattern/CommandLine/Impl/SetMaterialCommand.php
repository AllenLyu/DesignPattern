<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 17-6-26
 * Time: 下午11:06
 */

namespace DesignPattern\CommandLine\Impl;


use DesignPattern\CommandLine\Inter\Command;

class SetMaterialCommand implements Command
{


    function onCommand($command, $args)
    {
        if ($command!=='setMaterialCommand')
            return false;
        else
            $result = 'set material :'.$args.' successful';
            return $result;
    }
}