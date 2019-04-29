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
		
		
		
		$Student_name = $_POST['Student_name'];
		$student_ID = $_POST['student_ID'];
		$CGPA = $_POST['CGPA'];
		$error = 0;
		$msg = "";
		
		if($Student_name == ""){
			$error = $error+1;
			$user_error = "<span style='color:#f00'>* trip type required</span>";
			$msg .= "<p style='color:#f00'>* Username Required</p>";
		}
		if($student_ID == ""){
			$error = $error+1;
			$msg .= "<p style='color:#f00'>* password Required</p>";
		}
		if($CGPA == ""){
			$error = $error+1;
			$msg .= "<p style='color:#f00'>* email Required</p>";
		}
		
		if($error == 0){
		
			$insert = "INSERT INTO teacher_grade_submission
 VALUES('','$Student_name', '$student_ID','$CGPA')";
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


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking your ticket</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body style="background-color:#FFEFD5;">
	<div id="booking" class="section">
		<div class="section-center">

<h1>Grade Submission Form</h1>
									
								
<form action="" method="post">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form>
							<div class="form-group">
								<div class="form-checkbox">
									
								<input type="text" name="Student_name" placeholder="Student name">
                                <input type="text" name="student_ID" placeholder="Student ID">
                                <input type="text" name="CGPA" placeholder="Student CGPA">
                                <input type="submit" name="submit" value="Submit">
										
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>