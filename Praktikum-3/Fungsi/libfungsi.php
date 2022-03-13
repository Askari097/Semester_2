<?php
function kelulusan($_nilai) {
    if ($_nilai > 55 ){ 
        return 'LULUS';
    }else {
        return 'TIDAK LULUS';
    }
}
?>
<?php
function grade($_nilai){
    if ($_nilai >= 85){
        return "A";
    }elseif ($_nilai >= 70){
        return "B";
    }elseif ($_nilai >= 56){
        return "C";
    }elseif ($_nilai >= 36){
        return "D";
    }elseif ($_nilai >= 10){
        return "E";
    }else{
        return "I(tidak ada nilai)";
    }
}
?>
<?php
function predikat($peringkat){
    if ($peringkat == "A"){
        return "Sangat Memuaskan";
    }elseif($peringkat == "B"){
        return "Memuaskan";
    }elseif($peringkat == "C"){
        return "Cukup";
    }elseif($peringkat == "D"){
        return "Kurang";
    }elseif($peringkat == "E"){
        return "Sangat Kurang";
    }
}
?>