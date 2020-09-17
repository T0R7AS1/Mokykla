<?php
namespace userApp;

class User
{
    public $kodas;
    public $vardas;
    public $pavarde;
    public $pareigos;
    public $pastas;
    public $uzmokestis;
    public $busena;

    public  function  __construct($kodas, $vardas,$pavarde, $pareigos, $pastas, $uzmokestis,$busena){
        $this->kodas=$kodas;
        $this->vardas=$vardas;
        $this->pavarde=$pavarde;
        $this->pareigos=$pareigos;
        $this->pastas=$pastas;
        $this->uzmokestis=$uzmokestis;
        $this->busena=$busena;

    }
    public function showProfile() {
        $data[] = $this->kodas;
        $data[] = $this->vardas;
        $data[] = $this->pavarde;
        $data[] = $this->pareigos;
        $data[] = $this->pastas;
        $data[] = $this->uzmokestis;
        $data[] = $this->busena;
        return $data;

    }
}