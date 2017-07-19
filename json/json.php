<?php

//$url="http://localhost/kurs-API/?bank=".$_POST['bank'];
$url="http://localhost/web/json/?bank=".$_POST['bank'];
//$url="http://localhost/kurs-API/?bank=bankjatim";
$json = file_get_contents($url);
$data = json_decode($json, TRUE);
?>

<table style="text-align:left; color:white; font-weight:bold; width:100%">
<tr>
<td>Tanggal</td><td><?php echo $data['date']; ?> </td>
</tr>
<tr>
<td>Bank</td><td><?php echo $data['data'][0]['bank']; ?> </td>
</tr>
<tr>
<td>Mata Uang</td><td>
<?php 
$status = $data['data'][0]['status'];
 if ($status=="offline" ) {
 	echo "";
 }else{
 	echo $data['data'][0]['kurs']['mata_uang'];
?>
<tr>
<td>Jual</td><td><?php echo "Rp.". number_format ($data['data'][0]['kurs']['jual'],0,".", "."); ?> </td>
</tr>
<tr>
<td>Beli</td><td><?php echo "Rp.". number_format ($data['data'][0]['kurs']['beli'],0,".", "."); ?> </td>
 <?php } 

?>

</td>
</tr>

</table>