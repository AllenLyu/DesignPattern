<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 17-6-26
 * Time: 下午11:09
 */

namespace DesignPattern\CommandLine;


use DesignPattern\CommandLine\Inter\Command;

class CommandLine
{

    /**
     * @var array
     */
    private $commands;

    public function addCommand($command)
    {
        $this->commands[] = $command;
    }

    public function runCommand($command,$args){

        foreach ($this->commands as $cmd) {
            /** @var Command $cmd */
            $result = $cmd->onCommand($command,$args);
            if ($result){
                return $result;
            }

        }


        return 'command not found';
    }
}