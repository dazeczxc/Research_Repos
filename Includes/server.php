<?php

if (!isset($_SESSION)) {
	session_start();
}

include("conn.php");

//department ----------------------------------------------------

if (isset($_POST['deparmentSave'])) {
     
	$deparmentName = $_POST['departmentName'];
	 
 
	$query = "INSERT INTO department (department_name) VALUES ('$deparmentName')";
	$query_run = $query_run = mysqli_query($db, $query);

	if ($query_run) {
		$_SESSION['departmentMessage'] = '
			
		<div class="alert alert-success alert-dismissable" id="flash-msg">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		<h5>Department added successfully!</h5>
		</div>
	
	';

    echo "<script>window.location.href='../Admin/department';</script>";

	} else {
		$_SESSION['departmentMessage'] = '
		<div class="alert alert-danger alert-dismissable" id="flash-msg">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		<h5>Some error occured, please try again!</h5>
		</div>
	';
		echo "<script>window.location.href='../Admin/department';</script>";
	}
	mysqli_close($db);
}


if (isset($_POST['departmentEdit'])) {
	$departmentID = $_POST['departmentID'];
	$departmentName = $_POST['departmentName'];
 
	$query = "UPDATE department SET department_name = '$departmentName' WHERE department_id = $departmentID";
	$query_run = mysqli_query($db, $query);
	if ($query_run) {
		$_SESSION['departmentMessage'] = '
			
		<div class="alert alert-success alert-dismissable" id="flash-msg">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		<h5>Department updated successfully!</h5>
		</div>
	
	';

		echo "<script>window.location.href='../Admin/department';</script>";
	} else {
		$_SESSION['departmentMessage'] = '
		<div class="alert alert-danger alert-dismissable" id="flash-msg">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		<h5>Some error occured, please try again!</h5>
		</div>

	';

		echo "<script>window.location.href='../Admin/department';</script>";
	}
	mysqli_close($db);
}

if (isset($_POST['departmentDelete'])) {
	$departmentID = $_POST['departmentID'];
	$query = "DELETE FROM department WHERE department_id = $departmentID";
	$query_run = mysqli_query($db, $query);

	if ($query_run) {
		$_SESSION['departmentMessage'] = '
			
		<div class="alert alert-success alert-dismissable" id="flash-msg">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		<h5>Department deleted successfully!</h5>
		</div>
	';

		echo "<script>window.location.href='../Admin/department';</script>";
	} else {
		$_SESSION['departmentMessage'] = '
		<div class="alert alert-danger alert-dismissable" id="flash-msg">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		<h5>Some error occured, please try again!</h5>
		</div>
	';

		
		echo "<script>window.location.href='../Admin/department';</script>";
	}

	mysqli_close($db);
}

//dean ----------------------------------------------------

if (isset($_POST['deanSave'])) {
     
	$deanName = $_POST['deanName'];
	$deanDepartment = $_POST['deanDepartment'];

    $deanUsername = $_POST['deanUsername'];
	$deanPassword = $_POST['deanPassword'];

	$query = "INSERT INTO dean (dean_name, dean_department, dean_username, dean_password) VALUES ('$deanName', '$deanDepartment', '$deanUsername', '$deanPassword')";
	$query_run = $query_run = mysqli_query($db, $query);

	if ($query_run) {
		$_SESSION['deanMessage'] = '
			
		<div class="alert alert-success alert-dismissable" id="flash-msg">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		<h5>Dean added successfully!</h5>
		</div>
	
	';

    echo "<script>window.location.href='../Admin/dean';</script>";

	} else {
		$_SESSION['deanMessage'] = '
		<div class="alert alert-danger alert-dismissable" id="flash-msg">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		<h5>Some error occured, please try again!</h5>
		</div>
	';
		echo "<script>window.location.href='../Admin/dean';</script>";
	}
	mysqli_close($db);
}


if (isset($_POST['deanEdit'])) {
	$deanID = $_POST['deanID'];
    $deanName = $_POST['deanName'];
	$deanDepartment = $_POST['deanDepartment'];

	$deanUsername = $_POST['deanUsername'];
	$deanPassword = $_POST['deanPassword'];

	$query = "UPDATE dean SET dean_name = '$deanName', dean_department = '$deanDepartment', dean_username = '$deanUsername', dean_password = '$deanPassword' WHERE dean_id = $deanID";
	$query_run = mysqli_query($db, $query);
	if ($query_run) {
		$_SESSION['deanMessage'] = '
			
		<div class="alert alert-success alert-dismissable" id="flash-msg">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		<h5>Dean updated successfully!</h5>
		</div>
	
	';

		echo "<script>window.location.href='../Admin/dean';</script>";
	} else {
		$_SESSION['deanMessage'] = '
		<div class="alert alert-danger alert-dismissable" id="flash-msg">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		<h5>Some error occured, please try again!</h5>
		</div>

	';

		echo "<script>window.location.href='../Admin/dean';</script>";
	}
	mysqli_close($db);
}

if (isset($_POST['deanDelete'])) {
	$deanID= $_POST['deanID'];
	$query = "DELETE FROM dean WHERE dean_id = $deanID";
	$query_run = mysqli_query($db, $query);

	if ($query_run) {
		$_SESSION['deanMessage'] = '
			
		<div class="alert alert-success alert-dismissable" id="flash-msg">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		<h5>Dean deleted successfully!</h5>
		</div>
	';

		echo "<script>window.location.href='../Admin/dean';</script>";
	} else {
		$_SESSION['deanMessage'] = '
		<div class="alert alert-danger alert-dismissable" id="flash-msg">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		<h5>Some error occured, please try again!</h5>
		</div>
	';

		 
		echo "<script>window.location.href='../Admin/dean';</script>";
	}

	mysqli_close($db);
}

//signup student-------------------------------------------------
if(isset($_POST['student_signup'])){
    $stud_name = $_POST['student_name'];
    $stud_section = $_POST['student_section'];
    $stud_department = $_POST['student_department'];
    $stud_username = $_POST['student_username'];
    $stud_password = $_POST['student_password'];
    $stud_status = $_POST['student_status'];

    $stud_signup = "INSERT INTO student (student_name, student_section, student_department, student_username, student_password, student_status)
    VALUES ('$stud_name', '$stud_section', '$stud_department', '$stud_username', '$stud_password', '$stud_status')";
    $run_stud_query = mysqli_query($db, $stud_signup);

    if ($run_stud_query) {
		$_SESSION['SignupMessage'] = '
			
		<div class="alert alert-success alert-dismissable" id="flash-msg">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		<h5>Signup Successful, wait for your account to be confirmed by your Dean</h5>
		</div>
	';
	 
	echo "<script>window.location.href='../signup';</script>";

     }else{
        $_SESSION['SignupMessage'] = '
		<div class="alert alert-danger alert-dismissable" id="flash-msg">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		<h5>Some error occured, please try again!</h5>
		</div>
	';
	
	echo "<script>window.location.href='../signup';</script>";

    }
	mysqli_close($db);

}


//upload theisis ---------------------------
if(isset($_POST['upload_btn'])){
	$upload_name = $_POST['upload_name'];
	$upload_author = $_POST['upload_author'];
	$upload_abstract = $_POST['upload_abstract'];
  
 	$upload_file = $_FILES['upload_file']['name'];
	 $fileTmpName = $_FILES['upload_file']['tmp_name'];
	 $path = "../Upload/".$upload_file;

  
	$upload_student_id = $_POST['upload_student_id'];
	$upload_department = $_POST['upload_department'];
  
	$query = "INSERT INTO upload (upload_name, upload_abstract, upload_file, upload_author, upload_student_id, upload_department) VALUES 
	('$upload_name', '$upload_abstract', '$upload_file', '$upload_author', '$upload_student_id', '$upload_department')";
	  $query_run = $query_run = mysqli_query($db, $query);
  
	if ($query_run) {
		move_uploaded_file($fileTmpName,$path);

		  $_SESSION['UploadMessage'] = '
			  
		  <div class="alert alert-success alert-dismissable" id="flash-msg">
		  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		  <h5>Research Paper Submitted successfully!</h5>
		  </div>
	  
	  ';
  
	   
	  echo "<script>window.location.href='../Student/index.php';</script>";
  
	  } else {
		  $_SESSION['UploadMessage'] = '
		  <div class="alert alert-danger alert-dismissable" id="flash-msg">
		  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		  <h5>Some error occured, please try again!</h5>
		  </div>
	  ';
	  echo "<script>window.location.href='../Student/index';</script>";
	}
	  mysqli_close($db);
  
  }

?>
