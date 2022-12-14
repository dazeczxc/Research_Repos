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

      echo '
        <div class="pb-3">
            <p class="card-text">
            Name: '.$result_stud['student_name'].' <br> 
            Section: '.$result_stud['student_section'].'<br>
            Department: '.$result_dept['department_name'].'<br> 
            Email: '.$result_stud['student_username'].'<br>  
            </p>
        </div>

        <div>

        <table >
            <tr>
                <td class="d-none student_id">'.$result_stud['student_id'].'</td>
                <td class="pl-2"><button type="button" class="px-3 btn btn-warning delete_btn " data-bs-dismiss="modal">Delete Student</button></td>
                <td class="pl-2"><button type="button" class="px-3 btn btn-primary confirm_btn " data-bs-dismiss="modal" >Confirm Student</button></td>
                </td>
            </tr>
        </table>   
        

         

        </div>
        
        
        
        
        
        </div>
      ';

 }
 ?>