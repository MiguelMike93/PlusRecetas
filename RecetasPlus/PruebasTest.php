<?php
require_once 'DataDb.php';
class PruebasTest extends PHPUnit_Framework_TestCase{
  
    public function test_Host() {
    
        $d = new DataDb();
        
    $expect = 'localhost';
        $actual = $d->getHost();
        $this->assertEquals($expect, $actual);
    }
  
}
?>