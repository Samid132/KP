<?php
include "./../views/config.php";

$propinsi = $_GET['propinsi'];
$kota = mysql_query("SELECT * FROM master_kota WHERE provinsi_id='$propinsi' order by kota_nama");
echo "<option>- Pilih Kota/Kabupaten -</option>";
while($k = mysql_fetch_array($kota))
{
    echo "<option value=\"".$k['kota_id']."\">".$k['kota_nama']."</option>\n";
}
?>
