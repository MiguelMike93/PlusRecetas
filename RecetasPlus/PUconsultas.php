<?php
use PHPUnit\Framework\TestCase;
class PUConexion extends TestCase{
  
    public function testHost() {
    
        $d = new DataDb();
        
    $expect = 'localhost';
        $actual = $d->getHost();
        $this->assertEquals($expect, $actual);
    }
  
}
?>