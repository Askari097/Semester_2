<?php
class Dispenser{
    protected $volume;
    protected $hargasegelas;
    const volumegelas = 250;
    public $namaminuman;

    public function set_isi($vol){
        return $this->volume = $vol;
    }
    public function set_harga($harga){
        return $this->hargasegelas = $harga;
    }
    function gethasil(){
        return $this->volume - self::volumegelas;
    }
}

$Aqua = new Dispenser();
echo "Nama Minuman ".$Aqua -> namaminuman = 'Aqua';
echo "<hr>";
echo "Volume galon nya adalah ".$Aqua -> set_isi(1000);
echo "<br/>";
echo "Harga Segelas nya adalah ".$Aqua -> set_harga(3000);
echo "<br/>";
echo "Andi beli air 1 gelas yang volumenya ".Dispenser::volumegelas;
echo "<br/>";
echo "Hasil volume sekarang adalah ".$Aqua -> gethasil();
?>