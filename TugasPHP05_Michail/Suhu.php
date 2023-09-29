<?php  

class Suhu {
    private $satuanSuhuAwal;
    private $besaranSuhu;
    private $satuanSuhuTujuan;

    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan) {
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }

    public function konversi($besaranSuhu) {
        $this->besaranSuhu = $besaranSuhu;
        $hasilKonversi = 0;

        switch ($this->satuanSuhuAwal) {
            case 'Celcius' :
                if ($this->satuanSuhuTujuan == 'Fahrenheit') $hasilKonversi = ($this->besaranSuhu * 9/5) + 32;
                else if ($this->satuanSuhuTujuan == 'Rheamur') $hasilKonversi = $this->besaranSuhu * 4/5;
                break;
            case 'Fahrenheit' :
                if ($this->satuanSuhuTujuan == 'Celcius') $hasilKonversi = ($this->besaranSuhu - 32) * 5/9;
                break;
            case 'Rheamur':
                if ($this->satuanSuhuTujuan == 'Celcius') $hasilKonversi = $this->besaranSuhu * 5/4;
                break;
            default :
                $hasilKonversi = '';
        }

        return $hasilKonversi;
    }

    public function cetak() {
        echo 
        '<table border="1">' . "
            <tr>
                <th>Satuan Suhu Awal</th>
                <th>Besaran Suhu</th>
                <th>Satuan Suhu Tujuan</th>
                <th>Hasil Konversi Suhu</th>
            </tr> 
            <tr>
                <td>{$this->satuanSuhuAwal}</td>
                <td>{$this->besaranSuhu}</td>
                <td>{$this->satuanSuhuTujuan}</td>
                <td>{$this->konversi($this->besaranSuhu)}</td>
            </tr>
        </table>"
        ;

    }
}

?>