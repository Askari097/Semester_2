<?php
require_once 'class_pasien.php';
require_once 'class_BMI.php';
require_once 'class_bmipasien.php';
require_once 'form.php';

$psn1 = new pasien("Ahmad Budi", "L");
// $psn1 -> tmp_lahir = "Jakarta";
// $psn1 -> tgl_lahir = "18-03-2003";
// $psn1 -> email = "askari097@gmail.com";

$psn2 = new pasien("Nurul Adzkiya", "P");
// $psn2 -> tmp_lahir = "Depok";
// $psn2 -> tgl_lahir = "8-04-200";
// $psn2 -> email = "dzkiya@gmail.com";

$bmi1 = new BMI(60,163);
$bmi2 = new BMI(55,175);

$bpsn1 = new bmipasien($bmi1,$psn1);
$bpsn1 -> tanggal = "2022-03-11";
$bpsn2 = new bmipasien($bmi2,$psn2);
$bpsn2 -> tanggal = "2022-04-14";

$ar_pasien = [$bpsn1,$bpsn2];

$_tanggal = $_POST['Tanggal'];
$_nama = $_POST['nama'];
$_gender = $_POST['gender'];
$_berat = $_POST['berat'];
$_tinggi = $_POST['tinggi'];

$psn3 = new pasien($_nama, $_gender);
$bmi3 = new BMI($_berat,$_tinggi);
$bpsn3 = new bmipasien($bmi3,$psn3);
$bpsn3 -> tanggal = $_tanggal;

array_push($ar_pasien, $bpsn3);



?>
<br><hr>
<div class="container">
<!-- <h1>Menghitung BMI</h1> -->
<table class="table">
    <thead class="thead-light">
        <tr>
            <th>No</th><th>Tanggal Periksa</th><th>kode pasien</th>
            <th>Nama Pasien</th><th>Gender</th><th>Berat(kg)</th><th>Tinggi(cm)</th>
            <th>Nilai BMI</th><th>Status BMI</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor=1;
            $kode='P000';
            foreach($ar_pasien as $obj){
        ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$obj->tanggal?></td>
                <td><?=$kode?></td>
                <td><?=$obj->pasien->nama?></td>
                <td><?=$obj->pasien->gender?></td>
                <td><?=$obj->bmi->berat?></td>
                <td><?=$obj->bmi->tinggi?></td>
                <td><?=$obj->bmi -> nilaibmi()?></td>
                <td><?=$obj->bmi -> statusbmi()?></td>
            </tr>
        <?php
            $nomor++;
            $kode++;
            }
        ?>
    </tbody>
</table>
</div>