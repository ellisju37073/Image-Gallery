<?php require "inc/functions.inc.php" ?>
<!DOCTYPE html>
<html lang="en">
<!-- CTEC 127 / Bruce Elgort / February 2015 -->
<head>
	<meta charset="UTF-8">
	<title>Justin Ellis Gallery</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<h1>Ellis Image Gallery</h1>


	<?php 
		// check to see if file was uploaded
		$message = processSubmittedFile();
		//checks the error message for file uploads
		displayErrorMessage($message);
		// Delet the file if the URL contains ?file=
		deleteImage();

		require "inc/form.inc.html";
	?>
	<div class="container">
	<?php 
		showImages('uploads');
		showImages('vacation');
		showImages('pets');
	 ?>
	 </div>
</body>
</html>