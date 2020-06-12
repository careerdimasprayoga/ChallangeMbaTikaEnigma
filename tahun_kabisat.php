<!DOCTYPE html>
<html>
<head>
	<title>Tahun Kabisat</title>
</head>
<body>

<form method="POST" action="" style="margin: auto; width: 50%; border: 3px solid green; padding: 10px;">
	<h1>Tahun Kabisat</h1>
	<input type="number" name="tahun" placeholder="Tahun">
	<input type="submit" name="submit" value="Submit" /> 
	<?php
		if(isset($_POST['submit'])){
			$TAHUN = $_POST['tahun'];
			if ($TAHUN%4==0) {
			    echo "$TAHUN TAHUN KABISAT"; 
			}
			else if($TAHUN%4!=0) {
			    echo "$TAHUN BUKAN TAHUN KABISAT"; 
			}
		}
	?>
</form>

</body>
</html>