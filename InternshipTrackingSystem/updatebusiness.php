<?php
	
	$host     = "localhost";
	$port     = 3306;
	$socket   = "";
	$user     = "";
	$password = "";
	$dbname   = "internship";

	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('Could not connect to the database server' . mysqli_connect_error());
		
		$companyid=$_POST['companyid'];
		$business = $_POST['BUSINESSNAME'];
		$EMAIL = $_POST['EMAIL'];
		$PHONENUMBER = $_POST['PHONENUMBER'];
		$STREET = $_POST['STREET'];
		$CITY = $_POST['CITY'];
		$ZIP = $_POST['ZIP'];
		$ADMINISTRATOR = (int)$_POST['ADMINISTRATORID'];
		
		
		//$sql = "INSERT INTO business (Name,Email,Phone_Number,Street,City,ZIP,AdministratorID) VALUES ('$business','$EMAIL',$PHONENUMBER,'$STREET','$CITY',$ZIP,$ADMINISTRATOR)";	
		
	
		$sql =	"update business set Name='$business',Email='$EMAIL',Phone_Number=$PHONENUMBER,Street='$STREET',City='$CITY',ZIP=$ZIP,AdministratorID=$ADMINISTRATOR where companyid=$companyid";
				
		//$sql =	"update internship set Title='$TITLE',Work_Hour=$WORKHOURS,Business_Type='$BUSINESSTYPE',Pay='$PAY',Start_Date=$STARTDATE,End_Date=$ENDDATE,Semester='$SEMESTER',Number_Of_Position=$NUMBEROFPOSITIONS,
				//Student_Eval=$STUDENTEVALUATION,Supervisor_Eval=$SUPERVISOREVALUATION,CompanyID=$COMPANYID,AdministratorID=$ADMINISTRATORID,SupervisorID=$SUPERVISORID where internshipID=$internshipid";
	
//$query = mysqli_query($sql,$con) or die(mysqli_error("Could not write information to the database"));
			
		 
			/*if (mysql_affected_rows($con) == 0) {
				echo 'Your account was not created.';
			} else {
				echo 'Your account was created successfully';
			*/
			
			if ($con->query($sql) === TRUE) {
								echo "<div name=\"message\">Updated Successfully</div>"; 
				} else {
					echo "Error: " . $sql . "<br>" . $con->error;
				}
		
	

	
	$con->close();
?>