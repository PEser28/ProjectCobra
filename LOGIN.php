<?php
$email = $_POST['username'];
$password = $_POST['password'];

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

        elseif ($email == "") {
            echo '<script>
                alert ("Input your Username ");
            </script>';
            echo '<script>
                 window.history.go(-1);
            </script>';

        }
        elseif ($password == "") {
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

        elseif ($password != "password") {
            echo '<script>
                alert ("wrong password");
            </script>';
            echo '<script>
                 window.history.go(-1);
            </script>';
        }


    }
	
	
?>