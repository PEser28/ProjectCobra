<?php
$email = $_POST['username'];
$password = $_POST['password'];

try {
 require 'database.php';
     
  $sql = "SELECT username, password FROM AdminDB";
     
  // use exec() because no results are returned 
    $result = $conn->query($sql);
	$results = $result->fetch();
	
	

	if(isset($_POST['logup'])){

        if($email == "admin" and $password == "password") {
            header("Location: ../PROJECTCOBRA/index1.html");
        
        }


        if ($email == "" and $password == "") {
            echo '<script>
                alert ("Input your Username and Passsword");
            </script>';
            echo '<script>
                window.history.go(-1);
            </script>';
            }

        else if ($email == "") {
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
        
        else if ($email != "admin" and $password != "password"){
            echo '<script>
                alert ("wrong username and password");
            </script>';
            echo '<script>
             window.history.go(-1);
        </script>';

        }
        else if ($email != "admin") {
            echo '<script>
                alert ("wrong Username");
            </script>';
            echo '<script>
                 window.history.go(-1);
            </script>';
        }

        else if ($password != "password") {
            echo '<script>
                alert ("wrong password");
            </script>';
            echo '<script>
                 window.history.go(-1);
            </script>';
        }


    }
	} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
	
?>