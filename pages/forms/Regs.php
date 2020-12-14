<?php

$FamilyName = $_POST['familyname'];
$FirstName = $_POST['firstName'];
$MiddleName = $_POST['middlename'];
$Alias = $_POST['alias'];
$MobileNumber = $_POST['mobilenumber'];
$BirthPlace = $_POST['birthplace'];
$Nationality = $_POST['nationality'];
$Religion = $_POST['religion'];
$Occupation = $_POST['occupation'];
$CivilStatus = $_POST['CivilStatus'];
$Sex = $_POST['Sex'];
$BirthDay = $_POST['birthday'];
$FaceMarks = $_POST['facemarks'];
$SpouseName = $_POST['spname'];
$SpouseOccupation = $_POST['spoccu'];
$VoterStat = $_POST['voter'];
$CityAddress = $_POST['cityadd'];
$ProvinceAddress = $_POST['provadd'];
$Email = $_POST['emd'];

	insertRecord($FamilyName, $FirstName, $MiddleName, $Alias, $MobileNumber, $BirthPlace, $Nationality, $Religion, $Occupation, $CivilStatus, $Sex, $BirthDay, $FaceMarks, $SpouseName, $SpouseOccupation, $VoterStat, $CityAddress, $ProvinceAddress, $Email );


function insertRecord($FamilyName, $FirstName, $MiddleName, $Alias, $MobileNumber, $BirthPlace, $Nationality, $Religion, $Occupation, $CivilStatus, $Sex, $BirthDay, $FaceMarks, $SpouseName, $SpouseOccupation, $VoterStat, $CityAddress, $ProvinceAddress, $Email ) {
require  "Database.php";

$command = "SELECT * FROM residentinfo Where FamilyName = ?";
$stmt = $conn->prepare($command);
$stmt->execute([$FamilyName]);

if ($stmt->rowCount() == 0){
	try {
 
		$sql = "INSERT INTO residentinfo (FamilyName, FirstName, MiddleName, Alias, MobileNumber, BirthPlace, Nationality, Religion, Occupation, CivilStatus, Sex, BirthDay, FaceMarks, SpouseName, SpouseOccupation, VoterStat, CityAddress, ProvinceAddress, Email) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		   
		   
		// use exec() because no results are returned 
		   $conn->prepare($sql)->execute([$FamilyName, $FirstName, $MiddleName, $Alias, $MobileNumber, $BirthPlace, $Nationality, $Religion, $Occupation, $CivilStatus, $Sex, $BirthDay, $FaceMarks, $SpouseName, $SpouseOccupation, $VoterStat, $CityAddress, $ProvinceAddress, $Email]);
	  
	  
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
