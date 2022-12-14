<?php
 include_once("Includes/conn.php");
 include_once("Includes/navbar.php");




?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> BUPC | DIGITAL RESEARCH PAPER</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- bootsrap-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">

    <!-- Custom styles for this template-->
    <link href="Css/sb-admin-2.min.css" rel="stylesheet">
    <link href="Css/w3.css" rel="stylesheet">
    <link href="Css/custom.css" rel="stylesheet">

</head>

<body style="margin: 0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                
                <div class="card shadow text-gray-700" style="margin-top: 150px;">
                <?php
                    if (isset($_SESSION['SignupMessage'])) {
                        echo $_SESSION['SignupMessage'];
                        unset($_SESSION['SignupMessage']);
                    }

                    ?>
                <div class="card-header text-primary "><h2> Student Signup </h2></div>
                    <div class="card-body">
                        
                        <form action="Includes/server.php" method="POST">
                            
                                <div class="mb-3">
                                    <label>Name</label>
                                     <input type="text" name="student_name"  class="text-gray-700 form-control" placeholder="" required>
                                </div>

                                <div class="mb-3">
                                    <label>Section</label>
                                     <input type="text" name="student_section"  class="text-gray-700 form-control" placeholder="" required>
                                </div>

                                <div class="mb-3">
                                    <label>Department</label>
                                     <Select type="text" name="student_department"  class="text-gray-700 form-select" placeholder="" required>
                                         <option disabled selected hidden>Select Department</option>
                                         <?php 
                                         
                                          
                                            include("../Includes/conn.php");

                                            $dean_query = "SELECT * FROM department";
                                            $run_dean_query = mysqli_query($db, $dean_query);

                                            if(mysqli_num_rows($run_dean_query) > 0){
                                                while ($row= mysqli_fetch_array($run_dean_query)) {

                                                    $out = '<option value="'.$row["department_id"].'"> '.$row['department_name'].'</option>';
                                                    echo $out;
                                                
                                                }
                                            }else{
                                                
                                            }

                                         ?>
                                     </Select>
                                </div>

                                <div class="mb-3">
                                    <label>Email</label>
                                     <input type="email" name="student_username"  class="text-gray-700 form-control" placeholder="" required>
                                </div>
                                

                                <div class="mb-3">
                                <label>Password</label>
                                     <input type="password" name="student_password" value="" class="text-gray-700 form-control" placeholder=" " required>
                                </div>

                                <input type="hidden" name="student_status" value="Pending">

                                

                            
                            <input type="submit" name="student_signup" value="Signup" class="btn btn-primary col py-2">

                        </form>
                    </div>
                </div>
                <div class=" w3-center pb-5">
                    <p><h5>Already have an account? <a href="signin_student" >Signin</a></h5></p>
                </div>
            </div>
            <div class="col-lg-4"></div>

        </div>





    </div>
    <section>
        <div class="px-5"><div class="px-5"></div></div>
    </section>
</body>

</html>


<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Bootstrap core JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<?php
 include('Includes/footer.php');
?>

<script>
    $(document).ready(function() {
                    $("#flash-msg").delay(2000).fadeOut("slow");
                });
</script>