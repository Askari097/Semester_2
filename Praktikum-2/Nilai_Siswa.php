<?php
$_nama = $_POST['nama'];
$_matkul = $_POST['matkul'];
$_uts = $_POST['uts'];
$_uas = $_POST['uas'];
$_tugas = $_POST['tugas'];
$total = $_uts + $_uas + $_tugas;
$alphabet = $total/3;
if ($alphabet <= 55){
    $lulus = "Anda Tidak Lulus";
}else{
    $lulus = "Selamat Anda Lulus";
}
if ($alphabet >= 85){
    $grade = "A";
}elseif ($alphabet >= 70){
    $grade = "B";
}elseif ($alphabet >= 56){
    $grade = "C";
}elseif ($alphabet >= 36){
    $grade = "D";
}elseif ($alphabet >= 10){
    $grade = "E";
}else{
    $grade = "I(tidak ada nilai)";
}
if ($grade == "A"){
    $predikat = "Sangat Memuaskan";
}elseif($grade == "B"){
    $predikat = "Memuaskan";
}elseif($grade == "C"){
    $predikat = "Cukup";
}elseif($grade == "D"){
    $predikat = "Kurang";
}elseif($grade == "E"){
    $predikat = "Sangat Kurang";
}


echo 'Nama Mahasiswa : ' .$_nama;
echo '<br/>Mata Kuliah : ' .$_matkul;
echo '<br/>Nilai UTS : '.$_uts;
echo '<br/>Nilai UAS : '.$_uas;
echo '<br/>Nilai Tugas/Praktikum : '.$_tugas;
echo '<br/>Keterangan : ' .$lulus;
echo '<br/>Grade : '.$grade;
echo '<br/>predikat : '.$predikat;
?>