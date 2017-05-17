<?php
require_once 'DataDb.php';
class PruebasTest extends PHPUnit_Framework_TestCase{
  
    public function test_Host() {
        $d = new DataDb();
        $expect = '185.27.134.11';
        $actual = $d->getHost();
        $this->assertEquals($expect, $actual);
    }
    public function test_User() {
        $d = new DataDb();
        $expect = 'epiz_19830617';
        $actual = $d->getUsername();
        $this->assertEquals($expect, $actual);
    }
    public function test_DB() {
        $d = new DataDb();
        $expect = 'epiz_19830617_recetasPlusdb';
        $actual = $d->getDB();
        $this->assertEquals($expect, $actual);
    } 
}
?>
