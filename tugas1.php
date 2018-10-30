</!DOCTYPE html>
<html>
<head>
	<title>Loops Table</title>
	<!--Created By Ryfan-->
</head>
<body>
<table width = "50%" border = "1" cellpadding="0" cellspacing="0">
	<th  style='background-color: 00ff00;'>Nomor</th>
	<th  style='background-color: 00ff00;'>Keterangan</th>
	<?php 
	for($i=1;$i<10;$i++){
	if($i%2 == 0){
	$nama = 'Perempuan';
		$warna ='';
}		
		else if($i%2 == 1)
		{
		$nama = 'Laki - Laki';
		$warna ='#adfdad';
		
		}

	echo"<tr><td style='background-color: 00ff00;'><center>$i</td><td style='background-color:$warna;'><center>$nama</td></tr>";
}
	?>
</table>
</body>
</html>