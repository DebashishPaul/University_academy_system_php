<?php
class apps{
		
		public $hostname = "localhost";
		public $username = "root";
		public $password = "";
		public $database = "academic_information_system";
		public $links;
		
		public function __construct(){
			$this->links = mysqli_connect($this->hostname,$this->username,$this->password,$this->database);
			if($this->links->connect_error){
				echo "no connected";
			}else{
				echo "connected";
			}
		}
		
		public function insert($insert){
			$insert = $this->links->query($insert);
			if($insert){
				throw new exception;
			}
		}


	}



if(isset($_POST['submit'])){
		
		
		
		$Date_of_Admission = $_POST['Date_of_Admission'];
		$first_name = $_POST['first_name'];
		$middle_name = $_POST['middle_name'];
		$last_name = $_POST['last_name'];
		$father_name = $_POST['father_name'];
		$mother_name = $_POST['mother_name'];
        $date_of_birth=$_POST['date_of_birth'];
		
		$error = 0;
		$msg = "";
		
		if($Date_of_Admission == ""){
			$error = $error+1;
			$user_error = "<span style='color:#f00'>* trip type required</span>";
			$msg .= "<p style='color:#f00'>* Username Required</p>";
		}
		if($first_name == ""){
			$error = $error+1;
			$msg .= "<p style='color:#f00'>* password Required</p>";
		}
		if($middle_name == ""){
			$error = $error+1;
			$msg .= "<p style='color:#f00'>* email Required</p>";
		}
		if($last_name == ""){
			$error = $error+1;
			$msg .= "<p style='color:#f00'>* address Required</p>";
		}
		if($father_name == ""){
			$error = $error+1;
			$msg .= "<p style='color:#f00'>* Image Required</p>";
		}
		if($mother_name == ""){
			$error = $error+1;
			$msg .= "<p style='color:#f00'>* Image Required</p>";
		}
    if($date_of_birth == ""){
			$error = $error+1;
			$msg .= "<p style='color:#f00'>* Image Required</p>";
		}
		
		if($error == 0){
		
			$insert = "INSERT INTO student_application_form VALUES('','$Date_of_Admission', '$first_name', '$middle_name','$last_name', '$father_name','$mother_name','$date_of_birth')";
			if($insert){
				try{
					$object = new apps;
					$object->insert($insert);
					echo "Not inserted";
				}catch(exception $e){
					echo "inserted";
					
				}
			}
		
		
		}else{
			echo $msg;
		}
	}




?>

<!DOCTYPE>
<html>
<head>
    
</head>
<body>
    <h1>University Academic Information Center</h1>
    <h3>Students Application Form</h3>
    <form action="" method="post">
    <input type="date" class = "form-control" name="Date_of_Admission">
    <input type="text" class = "form-control" placeholder = "First Name" name="first_name">
    <input type="text" class = "form-control" placeholder = "Middle Name" name="middle_name">
    <input type="text" class = "form-control" placeholder = "Last Name" name="last_name">
	<input type="text" class = "form-control" placeholder = "Father's Name" name="father_name">
	<input type="text" class = "form-control" placeholder = "Mother_Name" name="mother_name">
	<input type="date" class = "form-control" name="date_of_birth">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>