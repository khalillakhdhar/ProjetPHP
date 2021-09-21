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
    $adresse="cité el Amel 444 rue des fleurs";
    $this->assertGreaterThan(8,$this->validateCas->verifAdresse($adresse));
}
/** @test */
public function testPhone()
{
    $tel="+24999888";
    $this->assertTrue($this->validateCas->verifTel($tel));
}
/** @test */
public function testlogAdmin()
{
    $login="admin";
    $this->assertSame("admin",$login);
}
/** @test */
public function verifMdpAdmin()
{
    $mdp="orsysFormation";
    $this->assertStringContainsStringIgnoringCase("orsys",$mdp);
}
}


?>