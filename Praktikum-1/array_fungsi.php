<?php
$ar_buah = ["p"=>"pepaya", "a"=>"apel", "m"=>"mangga", "j"=>"jambu"];
echo "<ol>";
foreach($ar_buah as $buah => $v){
    echo "<li> $buah - $v </li>";
}
echo "</ol>";
echo "<hr>";
sort ($ar_buah);
echo "<ol>";
foreach ($ar_buah as $buah => $k) {
    echo "<li> $buah - $k</li>";
}
echo "</ol>";
echo "<hr>";
arsort ($ar_buah);
echo "<ol>";
foreach ($ar_buah as $buah => $k) {
    echo "<li> $buah - $k</li>";
}
echo "</ol>";
echo "<hr>";
?>

<?php
    //Fungsi array_pop($array)//
    $tims = ["erwin","heru","ali","zaki"];
    array_pop($tims);
    foreach($tims as $person){
        echo $person.'<br/>';
    }
?>
<hr>
<?php
    //Fungsi array_push($array)//
    $tims = ["erwin","heru","ali","zaki"];
    array_push($tims, "wati");
    foreach($tims as $person){
        echo $person.'<br/>';
    }
?>
<hr>
<?php
    //Fungsi array_shift($array)//
    $tims = ["erwin","heru","ali","zaki"];
    array_shift($tims,);
    foreach($tims as $person){
        echo $person.'<br/>';
    }
?>
<hr>
<?php
    //Fungsi array_unshift($array)//
    $tims = ["erwin","heru","ali","zaki"];
    array_unshift($tims,"joko","wati");
    foreach($tims as $person){
        echo $person.'<br/>';
    }
?>