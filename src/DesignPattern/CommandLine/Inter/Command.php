<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 17-6-26
 * Time: 下午10:57
 */

namespace DesignPattern\CommandLine\Inter;


interface Command
{
    function onCommand($command,$args);
}