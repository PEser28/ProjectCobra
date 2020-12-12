<?php
require  "Database.php";

if(isset($_POST['logup'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$con = config::connect();
	$query = "SELECT * FROM admindb Where username = :username AND password = :password ";
	$statement = $con->prepare($query);
	$statement -> execute(
		array(
			'username' => $_POST['username'], 
			'password' => $_POST['password']
		)
	);
	$count = $statement->rowcount();
	if ($count > 0 ){
		header('Location:../PROJECTCOBRA/index1.html');
	} else {
		echo '<script>
				alert("WRONG CRENDENTIAL. PLEASE TRY AGAIN");
				window.history.go(-1);
			</script>';
	}
}


?>