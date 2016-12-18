<?php
require_once 'registroDocente.php';

class testDocente extends PHPUnit_Framework_TestCase
{
    public $test;
    public function setUp()
    {

        $this->test = new registroDocente('dampeon');
    }

    public function testName(){
        $campeon = $this->test->getName();
        $this->assertTrue(true);
    }
}