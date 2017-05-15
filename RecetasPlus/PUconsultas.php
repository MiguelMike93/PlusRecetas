<?php
namespace Test;
use PHPUnit\Framework\;
include_once 'RecetasPlus/DataDb.php';
/*require_once 'PHPUnit/Autoload.php';*/
class PUConexion extends TestCase{
  
    public function testHost() {
    
        $d = new DataDB();
        
    $expect = 'localhost';
        $actual = $d->getHost();
        $this->assertEquals($expect, $actual);
    }
  
}
?>