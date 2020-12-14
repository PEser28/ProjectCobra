<?php

$FamilyName = $_POST['FamilyName'];
$FirstName = $_POST['FirstName'];
$MI = $_POST['MiddleName'];
$Alias = $_POST['Alias'];
$MN = $_POST['MobileNumber'];
$BPlace = $_POST['BirthPlace'];
$Nat = $_POST['Nationality'];
$Rel = $_POST['Religion'];
$Occu = $_POST['Occupation'];
$CivStat = $_POST['CivilStatus'];
$Sex = $_POST['Sex'];
$BDay = $_POST['BirthDay'];
$FMarks = $_POST['FaceMarks'];
$SpName = $_POST['SpouseName'];
$SpOccu = $_POST['SpouseOccupation'];
$VStat = $_POST['VoterStatus'];
$VoteStat = $_POST['VoteStat'];
$CAddress = $_POST['CityAddress'];
$PAddress = $_POST['ProvincialAddress'];
$Email = $_POST['EmailAddress'];

	insertRecord($FamilyName, $FirstName, $MI, $Alias, $MN, $BPlace, $Nat, $Rel, $Occu, $CivStat, $Sex, $BDay, $FMarks, $SpName, $SpOccu, $VStat, $VoteStat, $CAddress, $PAddress, $Email );


function insertRecord($FamilyName, $FirstName, $MI, $Alias, $MN, $BPlace, $Nat, $Rel, $Occu, $CivStat, $Sex, $BDay, $FMarks, $SpName, $SpOccu, $VStat, $VoteStat, $CAddress, $PAddress, $Email ) {
require  "Database.php";

$command = "SELECT * FROM residentinfo Where FamilyName = ?";
$stmt = $conn->prepare($command);
$stmt->execute([$FamilyName]);

if ($stmt->rowCount() == 0){
	try {
 
		$sql = "INSERT INTO residentinfo (FamilyName, FirstName, MI, Alias, MN, BPlace, Nat, Rel, Occu, CivStat, Sex, BDay, FMarks, SpName, SpOccu, VStat, VoteStat, CAddress, PAddress, Email) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		   
		   
		// use exec() because no results are returned 
		   $conn->prepare($sql)->execute([$FamilyName, $FirstName, $MI, $Alias, $MN, $BPlace, $Nat, $Rel, $Occu, $CivStat, $Sex, $BDay, $FMarks, $SpName, $SpOccu, $VStat, $VoteStat, $CAddress, $PAddress, $Email]);
	  
	  
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
