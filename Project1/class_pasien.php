<?php
class pasien{
    public $nama;
    public $kode;
    public $tmp_lahir;
    public $tgl_lahir;
    public $gender;
    public $email;

    function __construct($nama,$gender){
        $this -> nama = $nama;
        $this -> gender = $gender;
    }
}
?>