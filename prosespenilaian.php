<?php
$nama = $_POST['nama'];
$nilai = $_POST['nilai'];

echo "Nama Saya $nama, Nilai Saya  $nilai";

if ($nilai >= 100) {
    echo "nilai A"; 
} else if ($nilai >=85) {
    echo "nilai B"; 
} else if ($nilai >=70) {
    echo "nilai C"; 
} else if ($nilai >=50) {
    echo "nilai D"; 
} else { echo "nilai E <br>";

}

?>