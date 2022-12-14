<?php  
 if(isset($_POST["student_id"]))  
 {  
      $output = '';  
      include('../Includes/conn.php');

      $stud_id = $_POST["student_id"];
 
      $query_stud = "SELECT * FROM student WHERE student_id = '$stud_id'";  
      $run_query_stud = mysqli_query($db, $query_stud);
      $result_stud = mysqli_fetch_assoc($run_query_stud);
      $dept = $result_stud['student_department'];

      $query_dept= "SELECT * FROM department WHERE department_id = '$dept'";  
      $run_query_dept = mysqli_query($db, $query_dept);
      $result_dept = mysqli_fetch_assoc($run_query_dept);

      $query_upload= "SELECT * FROM upload WHERE upload_student_id = '$stud_id'";  
      $run_query_upload = mysqli_query($db, $query_upload);
      

      echo '
        <div class="pb-3">
            <p class="card-text">
            <span class="text-gray-600">Name: </span>'.$result_stud['student_name'].' <br> 
            <span class="text-gray-600">Section: </span>'.$result_stud['student_section'].'<br>
            <span class="text-gray-600">Department: </span>'.$result_dept['department_name'].'<br> 
            <span class="text-gray-600">Email: </span>'.$result_stud['student_username'].'<br> 
            <span class="text-gray-600">Password: </span>'.$result_stud['student_password'].'<br><br>';

            if(mysqli_num_rows($run_query_upload) > 0){
                echo '<span class="text-gray-600">Uploaded Research: </span><br>';
                while($result_upload = mysqli_fetch_array($run_query_upload)){
                    echo ''.$result_upload['upload_name'].'<br>
                    ';
                }
            }


           echo '</p>
        </div>
 
      ';

      

 }
 ?>