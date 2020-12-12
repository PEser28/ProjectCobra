<?php
$username = $_POST['uname'];
$password = $_POST['password'];


	insertRecord($username, $password );





function insertRecord($username, $password) {
require  "Database.php";

$command = "SELECT * FROM admindb WHERE username = ?";
$stmt = $conn->prepare($command);
$stmt->execute([$username]);

if ($stmt->rowCount() == 0){
	try {
 
		$sql = "INSERT INTO admindb (username, password ) VALUES (?,?)";
		   
		   
		// use exec() because no results are returned 
		   $conn->prepare($sql)->execute([$username, $password]);
	  
	  
		echo '<script>
						alert("Congratulations, you are now registered!");
						  </script>';
	  } catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	  }
}else {
	echo '<script>alert("Username Already Exists");</script>';
	echo '<script>
			window.history.go(-1);
				</script>';

}
  


$conn = null;
}

?>

?>