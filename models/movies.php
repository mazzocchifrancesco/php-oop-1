<?php
class Movie
{
    public $titolo;
    public $anno;
    public $regista;
    public $voto_pubblico;


    public function __construct($_titolo, $_anno, $_regista, $_voto_pubblico)
    {
        $this->titolo = $_titolo;
        $this->anno = $_anno;
        $this->regista = $_regista;
        $this->voto_pubblico = $_voto_pubblico;
    }

    public function getFullInfo()
    {
        $result = $this->titolo . ", " . $this->regista . " , " . $this->anno . " , " . $this->voto_pubblico . "/10";
        return $result;
    }
}
