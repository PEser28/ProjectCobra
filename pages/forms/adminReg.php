<?php
$username = $_POST['uname'];
$password = $_POST['password'];

  try {
 require 'database.php';
     
  $sql = "SELECT username, password FROM AdminDB";
  $result = $conn->query($sql);
  $results = $result->fetch();
  
if($results['username'] == $username){
		echo '<script>
				alert("Username is already taken");
				</script>';
		echo '<script>
				window.history.go(-1);
					</script>';
		}		

else  {
		insertRecord($username, $password);
       
	}
	
}catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

function insertRecord($username, $password) {
 try {
 require 'database.php';
     
  $sql = "INSERT INTO AdminDB (username, password) VALUES (?,?)";
     
     
  // use exec() because no results are returned 
     $conn->prepare($sql)->execute([$username, $password]);


  echo '<script>
  				alert("Congratulations, you are now registered!");
					</script>';
					
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
}

?>