<?php
require_once('bootstrap.php');
class RemoteConnectTest extends PHPUnit_Framework_TestCase
{
    public function setUp(){ }
    public function tearDown(){ }
    public function testTest()
    {
        // test to ensure that the object from an fsockopen is valid
        $connObj = new dsk\test();
        $this->assertTrue($connObj->test() !== false);
    }
}
?>