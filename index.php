<!DOCTYPE html>
<html>
<head>
	<title>endec</title>
</head>
<body>
	<?php 
	if(!empty($_POST))
	{
		$texte = @$_POST['texte'];
		$textd = @$_POST['textd'];
		include 'endec.php';

		$endec = new endec();
		$resulte = $endec->encrypt($texte);
		$resultd = $endec->decrypt($textd);
		
	}
	?>
	<h1>endec</h1>
	<form action="" method="post">
		<h5>encrypt</h5>
		<input type="text" name="texte" placeholder="input text">
		<br>
		<input type="submit" value="encrypt">
		<?php
		if(!empty($resulte))
		{
			echo '<p>'.$resulte.'</p>';
		} 
		?>
	</form>
	<form action="" method="post">
		<h5>decrypt</h5>
		<input type="text" name="textd" placeholder="input text">
		<br>
		<input type="submit" value="decrypt">
		<?php
		if(!empty($resultd))
		{
			echo '<p>'.$resultd.'</p>';
		} 
		?>
	</form>
</body>
</html>