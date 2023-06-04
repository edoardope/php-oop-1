<?php
class Genere
{
    public $genere;

    public $secondary_genere;

    function __construct($_genere, $_secondary_genere)
    {
        $this->genere = $_genere;
        $this->secondary_genere = $_secondary_genere;
    }
}
;
?>