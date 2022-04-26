<?php
// home.php
session_start();
$pageTitle = 'Home';
require 'inc/header.inc.php';
require "inc/functions.inc.php";
?>
<div class="container mt-3">
    <div class="row">
    <div class="col-12 col-md-12">

<a href="register.php">Register</a>
<?php 
    if(isset($_SESSION['loggedin'])){
        echo '<a href="logout.php" id="logout">Logout</a>&nbsp;';
    } else {
        echo '<a href="login.php" id="login">Login</a>&nbsp;';
    }

?>

<h1>Welcome to Ellis Image Gallery <?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] : 'New User! Please register and login to use the convertor' ?></h1>
<?php 
if(!isset($_SESSION['loggedin'])){
    die();
}
?>
<?php 
		// check to see if file was uploaded
		$message = processSubmittedFile();
		//checks the error message for file uploads
		displayErrorMessage($message);
		// Delet the file if the URL contains ?file=
		deleteImage();

		require "inc/form.inc.html";
	?>
	<div class="container-image">
	<?php 
		showImages('uploads');
		showImages('vacation');
		showImages('pets');
	 ?>
	 </div>

</div> <!-- closing col -->
</div> <!-- closing row -->
</div> <!-- closing container div -->


<script defer src="js/script.js"></script>

<?php require 'inc/footer.inc.php' ?>