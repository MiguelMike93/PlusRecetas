<?php
require_once 'DataDb.php';
//require_once 'functions.php';
class PruebasTest extends PHPUnit_Framework_TestCase{
  
    public function test_Host() {
        $d = new DataDb();
    	$expect = 'sql313.epizy.com';
        $actual = $d->getHost();
        $this->assertEquals($expect, $actual);
    }    
  
}
?>