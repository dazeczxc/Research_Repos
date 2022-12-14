<?php

if (isset($_SESSION['dean_id'])) {

  echo "<script>window.location.href='Dean/index';</script>";
}

if (isset($_SESSION['id'])) {

  echo "<script>window.location.href='Admin/index';</script>";
}

if (isset($_SESSION['student_id'])) {

  echo "<script>window.location.href='Student/index';</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BUPC Research Paper Repository System</title>

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

  <style>
    /* service Box 3====================================*/
    .serviceBox_3 {
      padding: 15px 15px 25px;
      margin: 60px auto 0;
      text-align: center;
      cursor: pointer;
      border-radius: 4px;
      background: #fff;
      border: 1px solid #4e73df;
      border-bottom-width: 3px;
      position: relative;
      height: 250px;
    }

    .serviceBox_3 .service-icon {
      width: 70px;
      height: 70px;
      line-height: 70px;
      border-radius: 4px;
      border: 1px solid #4e73df;
      background: #fff;
      color: #4e73df;
      margin: -48px auto 20px;
    }

    .serviceBox_3,
    .serviceBox_3 i,
    .serviceBox_3 p,
    .service-icon,
    .serviceBox_3 :after,
    .serviceBox_3 h3:before,
    .service-icon:after,
    .service-icon,
    .service-content {
      transition: all 0.5s ease-in-out;
    }

    .serviceBox_3 p {
      margin: 0 0 15px;
    }

    .serviceBox_3 h3 {
      font-size: 20px;
      font-weight: normal;
      letter-spacing: 0.7px;
      position: relative;
      margin: 20px 0;
      padding: 10px 0;
      background: none;
      overflow: hidden;
    }

    .serviceBox_3 h3:before {
      content: "";
      background: #4e73df;
      width: 0;
      height: 2px;
      position: absolute;
      bottom: 0;
      left: 50%;
    }

    .serviceBox_3 h3:after {
      content: "";
      background: #4e73df;
      width: 0;
      height: 2px;
      position: absolute;
      bottom: 0;
      right: 50%;
    }

    .serviceBox_3:hover h3:after,
    .serviceBox_3:hover h3:before {
      width: 100%;
    }

    .serviceBox_3 i {
      display: inline-block;
      font-size: 3em;
      line-height: 70px;
    }

    .serviceBox_3:hover .service-icon {
      background: #4e73df;
      color: #fff;
    }

    .serviceBox_3 .read {
      color: #727CB6;
    }

    .serviceBox_3 .read:hover {
      color: #4e73df;
    }
  </style>

</head>

<body style="margin: 0">
  <?php
  include_once("Includes/navbar.php");

  ?>

  <!-- View upload details Modal -->
  <div id="view_upload_details_modal" class="modal fade" tabindex="-1" aria-labelledby="view_details_modal_reservation" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-gray-700" id="exampleModalLabel">BUPC Research Paper Repository System Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body" id="upload_details">

        </div>
      </div>
    </div>
  </div>
  <!-- End of View student Details Modal -->






  <section class="mt-5 pt-5 pb-4 " style="background-color: #f5f5f5;" id="#">

    <div class=" pt-4">
       <div class=" ml-5 mr-5">
        <div class="d-flex justify-content-md-center"><input class="col-lg-4 form-control mb-2" name="search_box2" id="search_box2" type="text" placeholder="Search" aria-label="Search"></div>
        <!--<button class="btn btn-primary" type="submit">Search</button>-->
        <div class="row">
            <div class="col-lg-4"></div>
        <div class=" col-lg-4" id="search_result"></div>
        <div class="col-lg-4"></div>
        </div>
      </div>
     </div>
     
  </section>

  <!--start info service-->
  <section >
    <div class="container pt-5">
      <div class="row  ">

        

        <div class="col-sm-3 col-md-3 col-lg-3">
          <div class="serviceBox_3">
            <div class="service-icon">
              <i class="fa fa-sort-amount-down"></i>
            </div>
            <h3>Steps in Submitting Research Paper</h3>
            <p>Read first before submitting your Research paper</p>
            <a class="read" href="steps_in_submit.php#steps">Read more</a>
          </div>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3">
          <div class="serviceBox_3">
            <div class="service-icon">
              <i class="fa fa-landmark"></i>
            </div>
            <h3>Deposit Your Work</h3>
            <p>Only Research Paper are accepted</p>
            <a class="read" href="signin_student">Click here to upload.</a>
          </div>
        </div>
        
        <div class="col-sm-3 col-md-3 col-lg-3">
          <div class="serviceBox_3">
            <div class="service-icon">
              <i class="fa fa-gavel"></i>
            </div>
            <h3>Digital Research Paper Policy</h3>
             <a class="read" href="research_policy.php#policy">Click here to read the policy of the system.</a>
          </div>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3">
          <div class="serviceBox_3">
            <div class="service-icon">
              <i class="fa fa-question-circle"></i>
            </div>
            <h3>FAQ</h3>
            <p>Frequently
                  Asked Questions.</p>
            <a class="read" href="FAQ.php#FAQ">Read more</a>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!--end info service-->

  <section id="FAQ"  >
  <div class="container pb-5 pt-5">
    <div class=" pt-5 pb-5">
        
        <div class="  pt-5">
            <h2 class="pt-2"><b>Frequently Ask Questions</b></h2>
            
        <p class=" text-justify" style="font-size: 1.2rem"><span style="font-weight: bold">What is Repository System?</span><br>
          An online database that provides access to digital collections such as theses and dissertations for online viewing and 
          provides the associate metadata regarding the documents (e.g. document 
          title, abstract, keywords).
          A type of digital repository designed to collect the work of a particular institution.<br><br>

          <span style="font-weight: bold">What is BUPC Research Paper Repository System </span><br>
          It is the official Institutional Repository of Bicol University Polanhgui Campus and as the flagship campus, it is also in charge of 
          the permanent records of the every department at the university. It identifies, acquires, maintains, preserves and allows access 
          to the digital institutional records and memory of the University.<br><br>

          <span style="font-weight: bold">Why should I submit my work to BUPC Research Paper Repository System?</span><br>
          Submitting your work has the following benefits:<br>

          ● Scholarly works are disseminated and made accessible to a broader audience while the copyright of the author and 
          the University is protected;<br>

          ● A comprehensive library of BUPC's academic output is created;<br>

          ● BUPC’s digital heritage is created and preserved for the benefit of current and future users;<br>

          ● The potential of BUPC’s intellectual/research output is uncovered for the benefit of a wider community;<br>

          ●Increased engagement of the academic community’s participation in electronic publishing and digital libraries, 
          maximizing their benefits in the pursuit of research, scholarship, and knowledge.


      </p>
    </div>
        
    
    
</div>
  </section>

 

  <section class=" pt-5" id="About" style="background: url(Images/bupc2.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;">
    <div class="container pt-5">
      <div class="row pt-5" style="margin-top: 80px">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 pt-5 px-5 text-white">
          <h1 style="font-size: 2.6rem; font-weight: bold">BUPC Research Paper Repository System</h1>

          <p class="px-3 text-white" style="font-size: 1.3rem">is the Online Repository for Research paper of Bicol University Polangui Campus. it identifies,
            acquires, maintains. preserves, and allows access to the research paper records of the university.</p>

        </div>


      </div>
    </div>
  </section>

  <section>
    <div class="container pt-5 mt-5 mb-5 pb-5">
      <div class="row pt-5">
        <div class="col-lg-1"> </div>
        <div class="col-lg-10 pt-4">
           
        </div>
      </div>

    </div>
  </section>

  <section>
    <div class="p-5 bg-primary text-white w3-center">
      Bicol University Polangui Campus
    </div>
  </section>

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

      load_data(1);

      function load_data(page, query = '') {
        $.ajax({
          url: "fetch_submission.php",
          method: "POST",
          data: {
            page: page,
            query: query
          },
          success: function(data) {
            $('#dynamic_content').html(data);
          }
        });
      }

      $(document).on('click', '.page-link', function() {
        var page = $(this).data('page_number');
        var query = $('#search_box').val();
        load_data(page, query);
      });


      $('#search_box').keyup(function() {
        var query = $('#search_box').val();
        load_data(1, query);
      });




      $(document).on('click', '.view_upload', function() {
        var upload_id = $(this).attr("id");
        if (upload_id != '') {
          $.ajax({
            url: "upload_details.php",
            method: "POST",
            data: {
              upload_id: upload_id
            },
            success: function(data) {
              $('#upload_details').html(data);
              $('#view_upload_details_modal').modal('show');
            }
          });
        }
      });

    });
  </script>

  <script>
    $(document).ready(function() {



      function load_data(page, query = '') {
        $.ajax({
          url: "fetch_search_result.php",
          method: "POST",
          data: {
            page: page,
            query: query
          },
          success: function(data) {
            $('#search_result').html(data);
          }
        });
      }


      $('#search_box2').keyup(function() {
        var query = $('#search_box2').val();
        load_data(1, query);
      });


      $(document).on('click', '.view_upload', function() {
        var upload_id = $(this).attr("id");
        if (upload_id != '') {
          $.ajax({
            url: "upload_details.php",
            method: "POST",
            data: {
              upload_id: upload_id
            },
            success: function(data) {
              $('#upload_details').html(data);
              $('#view_upload_details_modal').modal('show');
            }
          });
        }
      });


    });
  </script>