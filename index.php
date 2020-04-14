<?php
	require "header.php";
?>

	<main>
	<?php

	if(isset($_GET['error'])) {
		if ($_GET['error'] == "nouser") {
			echo '<p class="signuperror">Username does not exist!</p>';
		}
	}
	?>

	<?php
		if(isset($_SESSION['userId'])) {
			echo '<p>You are logged in!</p>';
		}
		else {
			echo '<p>You are logged out!</p>';
		}
	?>
	</main>

<?php
	require "footer.php";
?>