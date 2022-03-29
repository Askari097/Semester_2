<?php
class Account{
    public $noaccount;
    public $nama;
    public $saldo;

    public function __construct($noaccount, $nama, $saldo){
        $this -> noaccount = $noaccount;
        $this -> nama = $nama;
        $this -> saldo = $saldo;
    }
public function daftar(){
    echo "{$this->noaccount} {$this->nama} {$this->saldo}";
}
}
class accountbank extends Account{
    public function nabung(){
        echo "{$this->nama} nabung {$this->saldo}";
    }
    public function tarik(){
        echo "{$this->nama} tarik uang {$this->saldo}";
    }
}

echo "<H3>Bank INI</H3>";
$pemilik1 = new accountbank("C001", "Ahmad", 1000000);
$pemilik1 -> nabung();
echo "<br/>";
$pemilik2 = new accountbank("C002", "Budi", 2500000);
$pemilik2 -> tarik();
$pemilik3 = new accountbank("C003", "Kurniawan", 2500000);


    $ar_accountbank = [$pemilik1, $pemilik2, $pemilik3];
?>

<hr>
<table width="100%" border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>No.Account</th>
            <th>Pemilik</th>
            <th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
            foreach ($ar_accountbank as $pemilik) {
        ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$pemilik->noaccount?></td>
                <td><?=$pemilik->nama?></td>
                <td><?=$pemilik->saldo?></td>
            </tr>
        <?php
        $nomor++;
            }
        ?>
    </tbody>
</table>