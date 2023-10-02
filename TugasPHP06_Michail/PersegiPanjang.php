<?php  

require_once 'Abstract.php';

class PersegiPanjang extends Bentuk2D {

    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang() {
        return "Persergi Panjang ";
    }

    public function kelilingBidang() {
        $keliling = 2 * $this->panjang * $this->lebar;

        return $keliling;
    }

    public function luasBidang() {
        $luas = $this->panjang * $this->lebar;
        
        return $luas;
    }
}

?>