<?php

//array 1 dimensi 
$mobil = array("Toyota", "Honda", "suzuki", "daihatsu", "wuling");
echo $mobil[1];

foreach ($mobil as $merk) {
    echo $merk;
    echo "<br>";
}

//array 2 dimensi 
$kendaraan = array(
    array ("Toyota", "Honda", "suzuki", "daihatsu", "wuling"),
    array("yamaha", "honda", "kawasaki")

);

echo $kendaraan [1][0];
echo "<br>";

    $motor = array ( 
        array("yamaha", "jupiter mx", 250, "biru"),
        array("honda", "beat", 123, "merah")   
    );

    foreach ($motor as $value) {
        echo "motor $value[0] $value[1] $value[2]cc warna $value[3]";
        echo "<br><br>" ;  
    }

    $manusia = array("nama" => "thias","umur"=>"26", "tinggi"=>168);
    echo $manusia['nama']



?>