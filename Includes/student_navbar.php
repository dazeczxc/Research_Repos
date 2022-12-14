<?php
include('../Includes/conn.php'); 
session_start();

if(isset($_SESSION['student_id'])){
  $user_id = $_SESSION['student_id'];

  $query_student = "SELECT * FROM student WHERE student_id = $user_id";
  $run_query_student = mysqli_query($db, $query_student);
  $result_student = mysqli_fetch_assoc($run_query_student);

  $name = $result_student['student_name'];

}else{
  echo "<script>window.location.href='../index';</script>";
}
 

?>
 
 


 <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary px-3">
     <a class="navbar-brand" href="#">
         <div class="d-flex text-white">
             <div>
                 <img src="../Images/bupclogo.png" style="width: 60px; height: 60px;">
             </div>
             <div class="ml-2 mt-1">
                 <b><i>BUPC Research Paper Repository System</i></b>
                 <br>
                 <p style="font-size: 12px;"><b>Bicol University Polangui Campus</b></p>
             </div>
         </div>
     </a>

     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
         <ul class="navbar-nav ">

         <li class="nav-item">
                 <a class="nav-link" href="../index#">Return Home</a>
             </li>
              
         <li class="nav-item dropdown no-arrow">

            <a class=" nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $name ?>
                <img class="ml-2 rounded-circle" src="../Images/head.jpg" width="28rem;" height="28rem;">
                </a>

            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <a class="dropdown-item" href="../Includes/logout">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>

             </div>
            </li>

         </ul>
     </div>
 </nav>