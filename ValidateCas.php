<?php 
class ValidateCas
{


    public function validNotEmpty($chaine)
    {
        return $chaine!="";

    }
    public function isNumber($x)
    
    {
        return is_int($x); //permet de verifier que $x est entier
    }
    public function validateNom($nom)
    {
        return str_word_count($nom)>1;

    }
    public function verifCode($code)
    {
        if(!$this->isNumber($code))
        return false;
        else
        return strlen($code)===4;
    }
    function verifAdresse($adresse)
    {
        return strlen(trim($adresse));
    }
    function verifEtat($etat)
    {
        return $etat==1 || $etat==-1;
    }
    public function verifTel($tel)
    {
        if(strlen($tel)<=8)
        return false;
        else
            if(strpos('+',$tel)==0||strpos('00',$tel)==0)
            return true;
                else return false;
    }
    public function sansEspace($tel)
    {
        return strpos(' ',$tel)==-1;
    }

}
?>