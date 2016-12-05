<?php
mysqli_connect("localhost","root","", "inaker") or DIE ("Belum terkoneksi dengan MySQL");
$provinsi = $_GET['IdProvinsi'];
$kota = mysqli_query(mysqli_connect("localhost","root","", "inaker"), "SELECT * FROM kota WHERE IdProvinsi='$provinsi'");
echo "<option value='0'> Pilih Kota </option>";
while($k = mysqli_fetch_array($kota)){
    echo "<option value=\"".$k['IdKota']."\">".$k['NamaKota']."</option>\n";
}?>
