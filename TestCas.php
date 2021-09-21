<?php
require("ValidateCas.php");
class TestCas extends \PHPUnit\Framework\TestCase
{
public $validateCas;
/** @before */
public function initialize()
{
$this->validateCas=new ValidateCas();
}
/** @test */
public function testNotEmpty()
{
    $chaine="teste teste";
    $this->assertTrue($this->validateCas->validNotEmpty($chaine));
}
/** @test */
public function TestNom()
{
    $nom ="admin admin";
    $this->assertTrue($this->validateCas->validateNom($nom));
}
/** @test */
public function testCode()
{
    $code=6033;
    $this->assertTrue($this->validateCas->verifCode($code));
}
/** @test */
public function testAdresse()
{
    $address="cité el Amel 444 rue des fleurs";
    
}

}


?>