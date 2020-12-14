<?php
$FamilyName = $_POST['Family Name'];
$FirstName = $_POST['First Name'];
$MI = $_POST['Middle Name'];
$Alias = $_POST['Alias'];
$MN = $_POST['Mobile Number'];
$BPlace = $_POST['Birthplace'];
$Nat = $_POST['Nationality'];
$Rel = $_POST['Religion'];
$Occu = $_POST['Occupation'];
$CivStat = $_POST['Civil Status'];
$Sex = $_POST['Sex'];
$BDay = $_POST['Birth Day'];
$FMarks = $_POST['Face Marks'];
$SpName = $_POST['Spouse Name'];
$SpOccu = $_POST['Spouse Occupation'];
$VStat = $_POST['Voter Status'];
$VStat2 = $_POST['Voter Status 2'];
$CAddress = $_POST['City Address'];
$PAddress = $_POST['Provincial Address'];
$Email = $_POST['Email Address'];



	insertRecord($FamilyName, $FirstName, $MI, $Alias, $MN, $BPlace, $Nat, $Rel, $Occu, $CivStat, $Sex, $BDay, $FMarks, $SpName, $SpOccu, $VStat, $VStat2, $CAddress, $PAddress, $Email );





function insertRecord($FamilyName, $FirstName, $MI, $Alias, $MN, $BPlace, $Nat, $Rel, $Occu, $CivStat, $Sex, $BDay, $FMarks, $SpName, $SpOccu, $VStat, $VStat2, $CAddress, $PAddress, $Email ); {
require  "Database.php";

$command = "SELECT * FROM ResidentInfo ";
$stmt = $conn->prepare($command);
$stmt->execute([$username]);

if ($stmt->rowCount() == 0){
	try {
 
		$sql = "INSERT INTO ResidentInfo (Family Name, First Name, Middle Name, Alias, Mobile Number, Birthplace, Nationality, Religion, Occupation, Civil Status, Sex, Birthday, Face Marks, Spouse Name, Spouse Occupation, Voter Status, Voter Status Yes, City Address, Provincial Address, Email Address ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		   
		   
		// use exec() because no results are returned 
		   $conn->prepare($sql)->execute([$FamilyName, $FirstName, $MI, $Alias, $MN, $BPlace, $Nat, $Rel, $Occu, $CivStat, $Sex, $BDay, $FMarks, $SpName, $SpOccu, $VStat, $VStat2, $CAddress, $PAddress, $Email]);
	  
	  
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
