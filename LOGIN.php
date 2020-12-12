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
	
	$results = $statement->fetch();
	

        if($results['username'] == $email and $results['password'] == $password) {
            header("Location: ../PROJECTCOBRA/index1.html");
        
        }


        if ($username == "" and $password == "") {
            echo '<script>
                alert ("Input your Username and Passsword");
            </script>';
            echo '<script>
                window.history.go(-1);
            </script>';
            }

        else if ($username == "") {
            echo '<script>
                alert ("Input your Username ");
            </script>';
            echo '<script>
                 window.history.go(-1);
            </script>';

        }
        else if ($password == "") {
            echo '<script>
                alert ("Input your Passsword");
            </script>';
            echo '<script>
                 window.history.go(-1);
            </script>';
        }
        
        else if ($username != $results['username'] and $password != $results['password']){
            echo '<script>
                alert ("wrong username and password");
            </script>';
            echo '<script>
             window.history.go(-1);
        </script>';

        }
        else if ($username != $results['username']) {
            echo '<script>
                alert ("wrong Username");
            </script>';
            echo '<script>
                 window.history.go(-1);
            </script>';
        }

        else if ($password != $results['password']) {
            echo '<script>
                alert ("wrong password");
            </script>';
            echo '<script>
                 window.history.go(-1);
            </script>';
        }

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