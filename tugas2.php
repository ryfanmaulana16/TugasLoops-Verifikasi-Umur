</!DOCTYPE html>
<html>
<head>
	<title>birth Loops</title>
</head>
<body align = center>
Your Date of Birth<br>
<form method="post" action="tugas3.php">
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
			 	$x++;
			 } 
?>
</select>
<select name="hari">
<?php
$k=1;
while ($k < 32){

	echo "<option value = hari>$k</option>";
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
<p>
<font size="+1"><b>
</body>
</html>