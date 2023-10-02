<?php  

require_once 'Abstract.php';

class Segitiga extends Bentuk2D {

    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function namaBidang() {
        return "Segitiga ";
    }

    public function kelilingBidang() {
        $keliling = 3 * $this->alas;

        return $keliling;
    }

    public function luasBidang() {
        $luas = 0.5 * $this->alas * $this->tinggi;
        
        return $luas;
    }
}

?>