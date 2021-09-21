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
    
}
?>