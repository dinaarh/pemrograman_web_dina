<?php
//membuat fungsi
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam .", ";
    echo "Perkenalkan, nama saya ". $nama . "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Dinaa", "Hallo");

echo "<hr>";

$saya = "Dinaa";
$ucapanSalam = "Selamat Pagi";

//memanggil lagi tanpa mengisi parameter salam
perkenalan($saya);
?>