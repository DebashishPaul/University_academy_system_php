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
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$father_name = $_POST['father_name'];
		$mother_name = $_POST['mother_name'];
		
		$error = 0;
		$msg = "";
		
		if($Date_of_Admission == ""){
			$error = $error+1;
			$user_error = "<span style='color:#f00'>* trip type required</span>";
			$msg .= "<p style='color:#f00'>* Username Required</p>";
		}
		if($firstname == ""){
			$error = $error+1;
			$msg .= "<p style='color:#f00'>* password Required</p>";
		}
		if($middlename == ""){
			$error = $error+1;
			$msg .= "<p style='color:#f00'>* email Required</p>";
		}
		if($lastname == ""){
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
		
		if($error == 0){
		
			$insert = "INSERT INTO teacher_from VALUES('','$Date_of_Admission', '$firstname', '$middlename','$lastname', '$father_name','$mother_name')";
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
    <h3>Teacher Application Form</h3>
    <form action="" method="post">
    <input type="date" class = "form-control" name="Date_of_Admission">
    <input type="text" class = "form-control" placeholder = "First Name" name="firstname">
    <input type="text" class = "form-control" placeholder = "Middle Name" name="middlename">
    <input type="text" class = "form-control" placeholder = "Last Name" name="lastname">
	<input type="text" class = "form-control" placeholder = "Father's Name" name="father_name">
	<input type="text" class = "form-control" placeholder = "Mother_Name" name="mother_name">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>