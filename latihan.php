<?php
$angka = 10;
$warna = "biru";


if ($angka >=85) {
    echo "nilai A"; 
} else if ($angka >=70) {
    echo "nilai B"; 
} else if ($angka >=60) {
    echo "nilai C"; 
} else if ($angka >=50) {
    echo "nilai D"; 
} else { echo "nilai E <br>"; 
} 

switch ($warna) {
    case 'merah':
        echo "warna merah terpilih";
        break;
    case 'kuning' : 
        echo "warna kuning dipilih";
        break;
    case 'biru' : 
        echo "warna biru dipilih";  
        break;  
    default:
        echo "warna tidak dikenali";
        break;
}


?>