<?php
require("ValidateDate.php");
class TestDate extends \PHPUnit\Framework\TestCase
{
    public $vd;
    /** @before */
    public function beforecode()
    {
        $this->vd=new ValidateDate();
    }
    /** @test */
    public function TestResult()
    {
        $result=-1;
        $this->assertTrue($this->vd->verifResultat($result));

    }

    /** @test */
    public function verification()
    {
         $jour=22;
         $mois=2;
         $annee=2020;
         $this->assertTrue($this->vd->validateAll($jour,$mois,$annee));

    }
    /** @afterClass */
    public function destroyAll()
    {
        $this->vd=null;
    }
}



?>