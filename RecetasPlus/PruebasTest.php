<?php
require_once 'DataDb.php';
require_once 'functions.php';
class PruebasTest extends PHPUnit_Framework_TestCase{
  
    public function test_Host() {
        $d = new DataDb();
    	$expect = 'sql313.epizy.com';
        $actual = $d->getHost();
        $this->assertEquals($expect, $actual);
    }    
  
   public function test_TypeRecipes(){
    	$test = new functions();
    	$expect = false;
    	$result = empty($test->getTypesRecipes("SELECT * FROM RECETAS WHERE TIPO_RECETA = 'Postre'"));
    	$this->assertEquals($expect, $result);
    }

	public function test_returnRecipe(){
    	$test = new functions();
    	$expect = false;
    	$result = empty($test->returnRecipe());
    	$this->assertEquals($expect, $result);
    }    
}
?>