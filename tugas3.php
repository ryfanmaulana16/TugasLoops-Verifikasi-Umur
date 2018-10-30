</!DOCTYPE html>
<html>
<head>
	<title>birth Loops</title>
</head>
<body align = center>
Your Date of Birth<br>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<select name="Bulan">
<?php
/*$i=1;
$month = strtotime('2018-01-01');
while ($i <13){
	$month_name = date('F', $month);

	echo '<option value="'. $month_name.'">'.$month_name.'</option>';
	$month = strtotime('+1 month', $month);
	$i++;	
}*/
$mox = array("1" => "Januari",
			"2" => "Februari",
			"3" => "Maret",
			"4" => "April",
			"5" => "Mei",
			"6" => "Juni",
			"7" => "Juli",
			"8" => "Agustus",
			"9"	=> "September",
			"10" => "Oktober",
		    "11" => "November",
			"12" => "Desember",);
			$x= 1;
			while ($x <= 12) {
			 	echo '<option value="'.$mox[$x].'">'.$mox[$x].'</option>';
			 	$x = $x + 1;
			 } 
?>
</select>
<select name="hari">
<?php
$k=1;
while ($k < 32){

	echo "<option value = $k>$k</option>";
	$k++;	
}
?>
</select>
<select name="Tahun">
<?php
$Ryfan=1945;
while($Ryfan < 2001){
	echo "<option>$Ryfan</option>";
	$Ryfan++;
}
?>
</select>
<input type="submit" name="submit" value="submit">
<a href="">clear</a>
<p>
</p>
</form>
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
	$Tahun=$_POST["Tahun"];
	$Tanggal =$_POST["hari"];
	$Bulan=$_POST["Bulan"];
	$umur = 2018 - $Tahun;
	$blnskrg = date("m");
	$blninpt = array_search("$Bulan", $mox);

	if($blnskrg >$blninpt){
		$barbar= $blnskrg - $blninpt;
	}
	else if($blninpt > $blnskrg){
		$umur = $umur - 1;
		$www = $blninpt - $blnskrg;
		$barbar = 12 - $www;
	}
	if(($Bulan == "Februari" && $Tanggal > 28) || ($blninpt == (4||6||9||11) && $Tanggal > 30)){
	echo "<script>alert('Tolong Masukan Data Yang Valid !!');</script>";
}
   else{
   	echo "Tanggal Lahir anda adalah : $Tanggal $Bulan $Tahun, Usia anda saat ini $umur Tahun $barbar Bulan";
   }
	}
?>
