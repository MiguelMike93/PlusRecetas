<?php
namespace Test;
use PHPUnit\Framework\TestCase;
include_once 'DataDb.php';
/*require_once 'PHPUnit/Autoload.php';*/
class PUConexion extends PHPUnit_Framework_TestCase{
  
    public function testHost() {
    
        $d = new DataDB();
        
    $expect = 'localhost';
        $actual = $d->getHost();
        $this->assertEquals($expect, $actual);
    }
  
}
?>