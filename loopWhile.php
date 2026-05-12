<?php 

//loop While
$hit = 1;
while($hit < 10){ //true 0 < 10
    //kode yang akan dijalankan jika kondisi bernilai true
    echo $hit . "<br>";
    $hit += 2; //$hit = $hit + 2 --> 1 + 2 = 3
}

//do...While
echo "<h2>Pengulangan do...While ...</h2>";

$hitung = 20;

do{
    //kode yang akan dieksekusi
    echo "Angka ke - " . $hitung . "<br>";
    $hitung--;//$hitung = $hitung - 1
}while($hitung >= 10) // false

?>