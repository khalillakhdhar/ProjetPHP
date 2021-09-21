<?php
require("ValidateCas.php");
class ValidateDate
{
    public $shortMonth=array(4,6,8,11);
    public $longMonth=array(1,3,5,7,8,10,12);
    public function verifMonth($month)
    {
        
        return $month>=1 && $month<=12;
    }
    public function typeAnnee($annee)
    {
        if($annee%4==0)
        return true;
        else return false;

    }
    public function verifJour($jour)
    { 
        return $jour<=31 && $jour>=1;
    }
    public function validateAll($jour,$mois,$annee)
    {
        if($this->verifMonth($mois)&&$this->verifJour($jour))
        {
            if($mois==2)
            {
            if($this->typeAnnee($annee)&& $jour<=29)
         {
             return true;
         }  
         else if(!$this->typeAnnee($annee) && $jour<=28)
         return true;
         else
         {
             return false;
         }
        }
        if(in_array($mois,$this->shortMonth)&& $jour<=30)
        return true;
        else if(in_array($mois,$this->longMonth)&& $jour<=31)
        return true;
        else 
        return false;
        }    }
        public function verifResultat($resultat)
        {

            if($resultat==1 || $resultat==-1)
            return true;
            else 
            return false;
        }
}
?>