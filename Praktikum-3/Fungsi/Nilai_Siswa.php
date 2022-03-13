<?php
include_once 'libfungsi.php';
$_nama = $_POST['nama'];
$_matkul = $_POST['matkul'];
$_uts = $_POST['uts'];
$_uas = $_POST['uas'];
$_tugas = $_POST['tugas'];
$total = $_uts + $_uas + $_tugas;
$_nilai = $total/3;
$hasil_ujian = kelulusan($_nilai);
$peringkat = grade($_nilai);
$_predikat = predikat($peringkat);


echo 'Nama Mahasiswa : ' .$_nama;
echo '<br/>Mata Kuliah : ' .$_matkul;
echo '<br/>Nilai UTS : '.$_uts;
echo '<br/>Nilai UAS : '.$_uas;
echo '<br/>Nilai Tugas/Praktikum : '.$_tugas;
echo '<br/>Keterangan : ' .$hasil_ujian;
echo '<br/>Grade : '.$peringkat;
echo '<br/>predikat : '.$_predikat;
?>