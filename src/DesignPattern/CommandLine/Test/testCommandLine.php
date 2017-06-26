<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 17-6-26
 * Time: 下午11:18
 */

namespace DesignPattern\CommandLine\Test;
use DesignPattern\CommandLine\CommandLine;
use DesignPattern\CommandLine\Impl\AddAdCommand;
use DesignPattern\CommandLine\Impl\SetMaterialCommand;

require '../../../../vendor/autoload.php';

class testCommandLine extends \PHPUnit_Framework_TestCase
{
    /**
     * @var $commandLine CommandLine
     */
    public $commandLine;

    public function testAddAd()
    {
        $result = $this->commandLine->runCommand('addAdCommand',1201);
        $this->assertEquals("add ad : 1201 successful",$result);
//        $this->assertEq();
    }

    public function testSetMaterial()
    {
        $result = $this->commandLine->runCommand('setMaterialCommand',1201);
        $this->assertEquals("set material :1201 successful",$result);
    }

    public function testIllInput()
    {
        $result = $this->commandLine->runCommand('Fuck',1201);
        $this->assertEquals("add ad : 1201 successful",$result);
    }


    protected function setUp()
    {
        $this->commandLine = new CommandLine();
        $this->commandLine->addCommand(new AddAdCommand());
        $this->commandLine->addCommand(new SetMaterialCommand());
    }





}
