<?php
session_start();
if(!empty($_SESSION["adm"]))
{
$uid=$_SESSION["adm"];

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Resume - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>
  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">
  <style>
  body{font-weight: 500;font-family: "Times New Roman", Times, serif;size: 1.75rem;letter-spacing: 1px;}
  h1 h2 h3 h4 h5 h6{word-spacing: 30px; font-weight: 500;font-family: "Times New Roman", Times, serif;size: 1.75rem;letter-spacing: 1px;}
  .comment {
      width:auto;
      height:auto;
      
      }
    .white{background:#fff;}
  </style>

</head>

<body id="page-top">

  <div class="container">
     <div class="container-fluid bg-light ">

          <ul class="nav justify-content-end white mr-4 py-3">
              <li class="nav-item">
                <a class="nav-link active" href="#">Share</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Download</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            
          </ul>

          <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top" id="sideNav">
          <!-- <button style="float:left;" type="button" name="" class="btn ">Edit</button>  -->
         

              <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <!-- <span class="d-none d-lg-block">
                  <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
                </span> -->
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            
              <div class="collapse navbar-collapse" id="navbarSupportedContent" >
              
              <div class="card m-4 profile-card section-card">
                        
               <button class="btn" name="edit"  data-toggle="modal"  data-target=".bd-example-modaldks">
                  <i class="fas fa-pen d-flex float-right" aria-hidden="true"> </i>
                  </button>
                 
                  <div id="profile-modal" class="profile-body "><div class="card-header bg-white">
                    <div class="dp-block d-flex flex-column align-items-center justify-content-center">
                      <div>
                        <label class="display-picture btn btn-transparent p-0" for="dp-selector">
                          <input class="d-none" id="dp-selector" type="file"><i class="fa fa-user-circle fa-10x" aria-hidden="true"></i>
                          <img class="img-fluid d-none" id="display-picture" width="180px"></label>
                        </div>
                        <div class="name-area"><h5>
                        
                        <?php include("connection.php");
                            $query= mysqli_query($con,"select * from admin");
                            $count= mysqli_num_rows($query);
                             if($count>=1)
                                {
                                  $e=mysqli_fetch_row($query);
                                  echo " $e[2]  "."  $e[3]  ";
                                  echo"<br>";
                                
                                }
                     ?>   
                        
                        </h5>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="profile-details">
                      <p class="details-item">
                        <span class="email text-muted"><i class="fas fa-envelope pr-2" aria-hidden="true"></i>
                     <?php include("connection.php");
                            $query= mysqli_query($con,"select * from admin");
                            $count= mysqli_num_rows($query);
                             if($count>=1)
                                {
                                  $e=mysqli_fetch_row($query);
                                  echo"$e[1]";
                                  echo"<br>";
                                
                                }
                     ?>   
                     </span></p>
                          <p class="details-item">
                            <span class="phone text-muted">
                              <i class="fas fa-mobile-alt pr-2" aria-hidden="true">
                              </i>  <?php include("connection.php");
                            $query= mysqli_query($con,"select * from admin");
                            $count= mysqli_num_rows($query);
                             if($count>=1)
                                {
                                  $e=mysqli_fetch_row($query);
                                  echo"$e[4]";
                                  echo"<br>";
                                
                                }
                     ?>  </span></p>
                            <p class="details-item">
                              <span class="location text-muted">
                              <i class="fas fa-map-marker-alt pr-2" aria-hidden="true"></i>  <?php include("connection.php");
                            $query= mysqli_query($con,"select * from admin");
                            $count= mysqli_num_rows($query);
                             if($count>=1)
                                {
                                  $e=mysqli_fetch_row($query);
                                  echo"$e[6]";
                                  echo"<br>";
                                
                                }
                     ?>  </span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>              
<!-- d -->
<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=585ff81b-8a84-4f54-ae4c-005c7e8126da"> </script>
<!-- End of  Zendesk Widget script -->


 <!-- d -->
              </div>
          </nav>
         
     <!--f-->
          <!--f-->
        <!-- pro -->
          <div class='card experience-card card my-md-4 ml-md-0 mr-md-4 m-4'>
                  <div class='card-body'>
                <h4> Profile Overview 
                      <button style='float:right; ' type='submit' class='btn ' data-toggle='modal' data-target='#exampleModal'>
                      <i class="fas fa-pen d-flex float-right" aria-hidden="true"></i>
                      </button>
                   
                </h4>
                <?php
                              include("connection.php");
                              $query=mysqli_query($con,"select * from profile_overview");
                              $count=mysqli_num_rows($query);
                                if ($count>=1)
                                  {
                                  $r=mysqli_fetch_array($query);
                                  echo $r['name'];
                                  }
                    ?>
                      <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                  <form action="" method="post">
                    <h5 class="modal-title">Add Profile Overview</h5>
                    <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  *Some Words About You (Max 500 Characters)
                  <div class="card ">
                     <?php
                              include("connection.php");
                              $query=mysqli_query($con,"select * from profile_overview");
                              $count=mysqli_num_rows($query);
                                if ($count>=1)
                                  {
                                  $r=mysqli_fetch_array($query);
                                  echo ' <textarea  type="text" class="comment" Required name="loc"   placeholder="Type your comment here." required> '.$r['name'].' </textarea>
                                        ';
                                        echo '</div>
                                        </div>
                                        <div class="modal-footer">
                                          
                                          <button type="submit" name="click" class="btn btn-primary">UPDATE changes</button>
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </form>
                                        </div>';
                                  }
                                  else{
                                       
                                  }
   
                     ?>
                     
                  <!-- </div>
                  </div>
                  <div class="modal-footer">

                    <button type="submit" name="click" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                  </div> -->
                </div>
              </div>
            </div>
    
            <?php
            // include("connection.php");
            // $query=mysqli_query($con,"select * from profile_overview");
            // $count=mysqli_num_rows($query);
            //    if ($count>=1)
            //     {
            //     $r=mysqli_fetch_array($query);
            //     echo $r['name'];

            //     echo "
               
            //        <div class='modal' tabindex='-1' role='dialog' id='exampleModal>
            //     <div class='modal-dialog' role='document'>
            //       <div class='modal-content'>
            //         <div class='modal-header'>
            //         <form action='' method='post'>
            //           <h5 class='modal-title'>Add Profile Overview</h5>
            //           <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
            //             <span aria-hidden='true'>&times;</span>
            //           </button>
            //         </div>
            //         <div class='modal-body'>
            //         *Some Words About You (Max 500 Characters)
            //         <div class='card '>
                       
            //             <textarea  type='text' class='comment' name='loc' required>".$r[1]."</textarea>
  
            //         </div>
            //         </div>
            //         <div class='modal-footer'>
            //           <button type='submit' name='click' class='btn btn-primary'>Save changes</button>
            //           <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
            //           </form>
            //         </div>
            //       </div>
            //     </div>
            //     </div>
              
            //     ";
            //     }
                    include("Connection.php");
                if (isset($_POST["click"]))
                  {
                      $loc= $_POST["loc"];
                      if(mysqli_query($con,"update 	profile_overview set name='$loc'"))
                        {
                          echo "";
                        }
                    else
                      {
                          echo "";
                      }
                  }
        
                ?>

            </div>
          </div>
         <!-- pro -->
         
          <!-- ega -->
            
          <div class='card experience-card card my-md-4 ml-md-0 mr-md-4 m-4 clearfix '>
                <div class="card-body">
                        <h4> Experience and Projects   <button style="float:right;" type="button" class="btn " data-toggle="modal" data-target="#exampleModalCenter">
                             + Add more experience
                            </button>
                        </h4>
                      <!-- d -->
                      <div class="card">
                            <div class="card-header">
                                <div class="editable float-right">
                                <button style="float:right;" name="vev1" type="button" class="btn " data-toggle="modal" data-target="#exampleModalCenter">
                                <i class="fas fa-pen pr-2" aria-hidden="true"> </i>
                               
                        </button>
                                <!-- <button class="section-edit btn btn-transparent p-0" data-target=".bd-example-modal-lg"><i class="fas fa-pen pr-2" aria-hidden="true"> </i></button> -->
                                <button class="section-del btn btn-transparent p-0"><i class="fas fa-trash-alt" aria-hidden="true"></i>
                              
                                
                              
                              </button>
                                </div>
                            <div class="row d-flex align-items-center"> 
                                  <div class="col-sm-12 col-md-7 title-text-exp">
                                  <h3>
                                  <?php
                                        include("connection.php");        
                                            $query1=mysqli_query($con,"SELECT * FROM `experience`");
                                            $count= mysqli_num_rows($query1);
                                              if ($count>=1) 
                                                  {
                                                    
                                                    $d=mysqli_fetch_row($query1);
                                                    echo "<p> ".$d['1']." </p>";
                                                  }
                                                      
                                      ?>
                                  
                                  </h3>
                                  </div>
                                  <div class="col-sm-12 col-md-4 date-text">
                                  <span class="date text-secondary"><i class="fas fa-calendar-alt pr-2" aria-hidden="true"></i>
                                  
                                  <?php
                                    include("connection.php");        
                                        $query1=mysqli_query($con,"SELECT * FROM `experience`");
                                        $count= mysqli_num_rows($query1);
                                          if ($count>=1) 
                                              {
      
                                                $d =mysqli_fetch_row($query1);
                                                echo " <p> ".$d[3]." To ".$d[4]." </p> ";
                                              }
                                          else
                                            {
                                              echo " <p>  </p> ";
                                            }
                                    ?>
                                  
                                  </span>
                                  </div>
                              </div>
                              <div class="row sub-add-block pl-3">
                                      <div class="pr-4"><span class="institution text-secondary"><i class="fas fa-building pr-2" aria-hidden="true"></i>
                                      
                                      <?php
                                    include("connection.php");        
                                        $query1=mysqli_query($con,"SELECT * FROM `experience`");
                                        $count= mysqli_num_rows($query1);
                                          if ($count>=1) 
                                              {
                                                
                                                $d=mysqli_fetch_row($query1);
                                                echo "<p> ".$d[2]."  </p> ";
                                              }
                                    ?>
                                      </span>
                                      </div>
                                      <div>
                                      <span class="location text-secondary">
                                     
                                   
                                      </span>
                                      </div>
                              </div>
                          </div>
                              <div class="card-body"><p class="exp-desc p-2">
                              <?php
                                    include("connection.php");        
                                        $query1=mysqli_query($con,"SELECT * FROM `experience`");
                                        $count= mysqli_num_rows($query1);
                                          if ($count>=1) 
                                              {
                                                
                                                $d=mysqli_fetch_array($query1);
                                                echo " <span>".$d['description']." </span>";
                                              }
                                    ?>
                              </p>
                              </div>
                        </div>
                    <!-- d -->
                       
                        <?php
                            //  include("connection.php");        
                            //      $query1=mysqli_query($con,"SELECT * FROM `experience`");
                            //      $count= mysqli_num_rows($query1);
                            //        if ($count>=1) 
                            //            {
                                         
                            //              $d=mysqli_fetch_row($query1);
                            //             echo "
                            //             <div class='form-group col-md-6'>
                            //                  <label>".$d[1]."</label>
                            //             </d
                            //              ";
                            //            }
                                      
                        ?>
               <!-- g1 -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Add experience</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!-- f -->
                          <form method="post">
                              <!-- <div class="form-row">
                                <div class="form-group col-md-6"> -->
                                <?php
                                    include("connection.php");        
                                        $query1=mysqli_query($con,"SELECT * FROM `experience`");
                                        $count= mysqli_num_rows($query1);
                                          if ($count>=1) 
                                              {
                                                
                                                $d=mysqli_fetch_row($query1);                                             
                                                echo "
                                                
                                                <div class='form-row'>
                                                <div class='form-group col-md-6'>
                                                  <label for=''>Title</label>
                                                  <input type='text' name='title' value=".$d[1]." class='form-control' id='' placeholder='Title' Required>
                                                  </div>
                                                  <div class='form-group col-md-6'>
                                                  <label>Company</label>
                                                  <input type='text' name='comp' value=".$d[2]."  class='form-control' id='' placeholder='Company' Required>
                                                </div>
                                              </div>
                                              
                                              <div class='form-row'>
                                                <div class='form-group col-md-6'>
                                                  <label class='w-100'><span class='text-danger'>*</span>Start Date</label>
                                                  <input Required class='exp-start-input form-control validate' value=".$d[3]." type='date' name='start_date' placeholder='Enter start date' autocomplete='start_date' required='' data-validation-required-message='Please enter starting date' aria-invalid='false'>
                                                </div>

                                                <div class='form-group col-md-6'>
                                                  <div class='form-group control-group'>
                                                    <label class='w-100' ><span class='text-danger'>*</span>End Date</label>
                                                    <input class='exp-end-input form-control validate' Required type='date' value=".$d[4]." name='end_date' placeholder='Enter end date' autocomplete='end_date' required='' data-validation-required-message='Please enter ending date' aria-invalid='false'>
                                                  <small class='help-block text-danger'></small>
                                                </div>
                                              </div>

                                              <div class='form-group col-md-12'>
                                              <div class='form-group control-group'><label class='w-100' >
                                                <span class='text-danger'>*</span>Description</label>
                                                <textarea class='exp-desc-input form-control validate' type='text' name='description' minlength='100' maxlength='500' data-validation-minlength-message='100 characters minimum is needed' data-validation-maxlength-message='500 characters max' placeholder='Enter description' autocomplete='description' required='' data-validation-required-message='Please enter description' aria-invalid='false' spellcheck='false'>
                                                ".$d[5]."
                                                </textarea>
                                                <small class='help-block text-danger'></small></div>
                                              </div>
                                              <div class='modal-footer'>
                                              <button type='submit'  name='Submit1' values='' class='btn btn-primary'> Submit</button>

                                                  <button  type='submit' class='btn btn-secondary' a-dismiss='modal'>Close</button>
                                                  <button  type='submit' name='upda1' class='btn btn-primary'>Save changes</button>    
                                             </div>
                                              ";
                                                
                                              }
                                        else
                                            {
                                              echo"
                                               <div class='form-row'>
                                                  <div class='form-group col-md-6'> <label for=''>Title</label>
                                                  <input type='text' name='title' class='form-control' id='' placeholder='Title' Required>';
                                              </div>
                                                <div class='form-group col-md-6'>
                                                  <label>Company</label>
                                                  <input type='text' name='comp' class='form-control' id='' placeholder='Company' Required>
                                                </div>
                                              </div>

                                              <div class='form-row'>
                                              <div class='form-group col-md-6'>
                                                <label class='w-100'><span class='text-danger'>*</span>Start Date</label>
                                                <input Required class='exp-start-input form-control validate'  type='date' name='start_date' placeholder='Enter start date' autocomplete='start_date' required='' data-validation-required-message='Please enter starting date' aria-invalid='false'>
                                              </div>

                                              <div class='form-group col-md-6'>
                                                <div class='form-group control-group'>
                                                  <label class='w-100' ><span class='text-danger'>*</span>End Date</label>
                                                  <input class='exp-end-input form-control validate' Required type='date' name='end_date' placeholder='Enter end date' autocomplete='end_date' required='' data-validation-required-message='Please enter ending date' aria-invalid='false'>
                                                <small class='help-block text-danger'></small>
                                              </div>
                                            </div>

                                             <div class='form-group col-md-12'>
                                              <div class='form-group control-group'><label class='w-100' >
                                                <span class='text-danger'>*</span>Description</label>
                                                <textarea class='exp-desc-input form-control validate' type='text' name='description' minlength='100' maxlength='500' data-validation-minlength-message='100 characters minimum is needed' data-validation-maxlength-message='500 characters max' placeholder='Enter description' autocomplete='description' required='' data-validation-required-message='Please enter description' aria-invalid='false' spellcheck='false'>
                                               
                                                </textarea>
                                                <small class='help-block text-danger'></small></div>
                                              </div>
                                              <div class='modal-footer'>
                                              <button type='submit'  name='Submit1' values='' class='btn btn-primary'> Submit</button>

                                                  <button  type='submit' class='btn btn-secondary' a-dismiss='modal'>Close</button>
                                                  <button  type='submit' name='upda1' class='btn btn-primary'>Save changes</button>    
                                             </div>                                           ";
                                            }
                                  ?>
                                 
                              
                          </form>
                          
                          <?php
                          include("connection.php");
                             if (isset($_POST["Submit1"])) 
                                {
                                  $title=$_POST["title"];
                                  $company=$_POST["comp"];
                                  $start_date=$_POST["start_date"];
                                  $end_date=$_POST["end_date"];
                                  $description=$_POST["description"];
        

                                  if (mysqli_query($con,"insert into experience (title,company,start_date,end_date,description) values ('$title',' $company','$start_date','$end_date','$description')"))
                                    {
                                      echo "data insert";
                                    }
                                  else
                                    {
                                      echo "data Not insert";
                                    }
                                }
                          ?>
                          <!-- f -->
                          <?php
                        include("connection.php");
                        if (isset($_POST["upda1"])) 
                          {
                            $title=$_POST["title"];
                            $company=$_POST["comp"];
                            $start_date=$_POST["start_date"];
                            $end_date=$_POST["end_date"];
                            $description=$_POST["description"];


                            if (mysqli_query($con,"update experience set title='$title',company='$company',start_date='$start_date',end_date='$end_date',description='$description'"))
                              {
                                echo "data update";
                              }
                            else
                              {
                                echo "data Not update";
                              }
                          }
                           ?>
                        </div>
                        <!-- <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" name="update5" class="btn btn-primary">Save changes</button>    
                        </div> -->
                      </div>
                      
                      
                    </div>
                  </div>   

               <!-- g 1-->
                </div>    
          </div>
          <!-- ega -->
          <hr>
          <!--Education-->
          <div class="card  mb-3 ">
                <div class="card-header white">
                    <h4> Education 
                        <button style="float:right;" name="vev1" type="button" class="btn " data-toggle="modal" data-target=".bd-example-modal-lg">
                        + Add more education
                        </button>

                    </h4>
                    <!-- d -->
                    <div class="card">
                            <div class="card-header">
                                <div class="editable float-right">
                                <button style="float:right;" name="vev1" type="button" class="btn " data-toggle="modal" data-target=".bd-example-modal-lg">
                                <i class="fas fa-pen pr-2" aria-hidden="true"> </i>
                        </button>
                                <!-- <button class="section-edit btn btn-transparent p-0" data-target=".bd-example-modal-lg"><i class="fas fa-pen pr-2" aria-hidden="true"> </i></button> -->
                                <button class="section-del btn btn-transparent p-0"><i class="fas fa-trash-alt" aria-hidden="true"></i></button>
                                </div>
                            <div class="row d-flex align-items-center"> 
                                  <div class="col-sm-12 col-md-7 title-text-exp">
                                  <h3>
                                  <?php
                                        include("connection.php");        
                                            $query1=mysqli_query($con,"SELECT * FROM `education`");
                                            $count= mysqli_num_rows($query1);
                                              if ($count>=1) 
                                                  {
                                                    
                                                    $s=mysqli_fetch_array($query1);
                                                    echo "<p> ".$s['Degree']." </p>";
                                                  }
                                                      
                                      ?>
                                  
                                  </h3>
                                  </div>
                                  <div class="col-sm-12 col-md-4 date-text">
                                  <span class="date text-secondary"><i class="fas fa-calendar-alt pr-2" aria-hidden="true"></i>
                                  
                                  <?php
                                    include("connection.php");        
                                        $query1=mysqli_query($con,"SELECT * FROM `education`");
                                        $count= mysqli_num_rows($query1);
                                          if ($count>=1) 
                                              {
      
                                                $s =mysqli_fetch_row($query1);
                                                echo " <p> ".$s[2]." To ".$s[3]." </p> ";
                                              }
                                          else
                                            {
                                              echo " <p>  </p> ";
                                            }
                                    ?>
                                  
                                  </span>
                                  </div>
                              </div>
                              <div class="row sub-add-block pl-3">
                                      <div class="pr-4"><span class="institution text-secondary"><i class="fas fa-building pr-2" aria-hidden="true"></i>
                                      
                                      <?php
                                    include("connection.php");        
                                        $query1=mysqli_query($con,"SELECT * FROM `education`");
                                        $count= mysqli_num_rows($query1);
                                          if ($count>=1) 
                                              {
                                                
                                                $s=mysqli_fetch_row($query1);
                                                echo "<p> ".$s[4]."  </p> ";
                                              }
                                    ?>
                                      </span>
                                      </div>
                                      <div>
                                      <span class="location text-secondary"><i class="fas fa-map-marker-alt pr-2" aria-hidden="true"></i>
                                      <?php
                                    include("connection.php");        
                                        $query1=mysqli_query($con,"SELECT * FROM `education`");
                                        $count= mysqli_num_rows($query1);
                                          if ($count>=1) 
                                              {
                                                
                                                $s=mysqli_fetch_array($query1);
                                                echo "
                                                
                                                    ".$s['location']."
                                                
                                                ";
                                              }
                                    ?>
                                      </span>
                                      </div>
                              </div>
                          </div>
                              <div class="card-body"><p class="exp-desc p-2">
                              <?php
                                    include("connection.php");        
                                        $query1=mysqli_query($con,"SELECT * FROM `education`");
                                        $count= mysqli_num_rows($query1);
                                          if ($count>=1) 
                                              {
                                                
                                                $s=mysqli_fetch_array($query1);
                                                echo " <span>".$s['Description']." </span>";
                                              }
                                    ?>
                              </p>
                              </div>
                        </div>
                    <!-- d -->
                          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                           
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content py-4 px-4">
                              <h4> Add certification</h4>
                                <!-- f -->
                         
                         <form class=""  method="post">
                          
                        
                         <?php
                              include("connection.php");
                                
                              include("connection.php");        
                              $query1=mysqli_query($con,"SELECT * FROM `education`");
                              $count= mysqli_num_rows($query1);
                                      
                                      // $query=mysqli_query($con,"SELECT * FROM `education`"); 
                                      // $count=mysqli_num_rows($query);
                                      if ($count>=1)
                                       {
                                          $s=mysqli_fetch_array($query1);
                                        
                                          echo "
                                          
                                          <div class='row'>
                                              <div class='col-sm-12 col-md-6'>
                                                  <div class='form-group control-group'>
                                                    <label class='w-100' for='cert-name-input'><span class='text-danger'>*</span>Degree</label>
                                                    <input class='form-control validate' value=".$s['Degree']." id='certification-name-input' type='text' name='Degree' placeholder='Enter degree' autocomplete='name' required='' data-validation-required-message='Please enter your degree'>
                                                    <small class='help-block text-danger'></small>
                                                    </div>
                                              </div>

                                              <div class='col-sm-12 col-md-3'>
                                              <div class='form-group control-group'>
                                                <label class='w-100' for='certification-start-input'><span class='text-danger'>*</span>Start Date</label>
                                                <input class='form-control validate' value=".$s['Start_Date']." id='certification-start-input' type='date' name='s_date' placeholder='Enter start date' autocomplete='start_date' required='' data-validation-required-message='Please enter starting date'>
                                                <small class='help-block text-danger'></small>
                                              </div>
                                           </div>
                                          <div class='col-sm-12 col-md-3'>
                                            <div class='form-group control-group'>
                                                <label class='w-100' for='certification-end-input'><span class='text-danger'>*</span>End Date</label>
                                                <input class='form-control validate' value=".$s['end_Date']." id='certification-end-input' type='date' name='e_date' placeholder='Enter end date' autocomplete='end_date' required='' data-validation-required-message='Please enter your ending date'>
                                                <small class='help-block text-danger'></small>
                                            </div>
                                          </div>
                                          <div class='col-sm-12 col-md-6'>
                                          <div class='form-group control-group'>
                                            <label class='w-100' for='certification-inst-input'><span class='text-danger'>*</span>School/ Institute Name</label>
                                            <input class='form-control validate' value=".$s['school']." id='certification-inst-input' type='text' name='school' placeholder='Enter institution' autocomplete='institution' required='' data-validation-required-message='Please enter your institution'>
                                            <small class='help-block text-danger'></small>
                                         </div>
                                      </div>
                                     <div class='col-sm-12 col-md-6'>
                                        <div class='form-group control-group'>
                                            <label class='w-100' for='certification-loc-input'><span class='text-danger'>*</span>Location</label>
                                            <input class='form-control validate' value=".$s['location']." id='certification-loc-input' type='text' name='tion' placeholder='Enter location' autocomplete='location' required='' data-validation-required-message='Please enter your location'>
                                            <small class='help-block text-danger'></small>
                                        </div>
                                      </div>
                                      <div class='col-sm-12'>
                                        <div class='form-group control-group'>
                                            <label class='w-100' for='certification-desc-input'><span class='text-danger'>*</span>Description</label>
                                            <textarea class='form-control validate'  id='certification-desc-input' type='text' name='descri' minlength='100' maxlength='500' data-validation-minlength-message='100 characters minimum is needed' data-validation-maxlength-message='500 characters max' placeholder='Enter description' autocomplete='description' required='' data-validation-required-message='Please enter description'> ".$s['Description']." </textarea>
                                            <small class='help-block text-danger'></small>
                                        </div>
                                      </div>

                                      <div class='modal-footer'>
                                      <button   type='submit' name='click6' class='btn btn-primary'>Submit</button>

                                      <button   type='submit' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                      <button  type='submit' name='editEducation' class='btn btn-primary'>Save changes</button>    
                                    </div>
                                          </div>                                       
                                          ";
                                       }
                                      else
                                        {
                                          echo "
                                          
                                          <div class='row'>
                                              <div class='col-sm-12 col-md-6'>
                                                  <div class='form-group control-group'>
                                                    <label class='w-100' for='cert-name-input'><span class='text-danger'>*</span>Degree</label>
                                                    <input class='form-control validate'  id='certification-name-input' type='text' name='Degree' placeholder='Enter degree' autocomplete='name' required='' data-validation-required-message='Please enter your degree'>
                                                    <small class='help-block text-danger'></small>
                                                    </div>
                                              </div>
                                              <div class='col-sm-12 col-md-3'>
                                              <div class='form-group control-group'>
                                                <label class='w-100' for='certification-start-input'><span class='text-danger'>*</span>Start Date</label>
                                                <input class='form-control validate' id='certification-start-input' type='date' name='s_date' placeholder='Enter start date' autocomplete='start_date' required='' data-validation-required-message='Please enter starting date'>
                                                <small class='help-block text-danger'></small>
                                              </div>
                                           </div>
                                          <div class='col-sm-12 col-md-3'>
                                            <div class='form-group control-group'>
                                                <label class='w-100' for='certification-end-input'><span class='text-danger'>*</span>End Date</label>
                                                <input class='form-control validate' id='certification-end-input' type='date' name='e_date' placeholder='Enter end date' autocomplete='end_date' required='' data-validation-required-message='Please enter your ending date'>
                                                <small class='help-block text-danger'></small>
                                            </div>
                                          </div>
                                          <div class='col-sm-12 col-md-6'>
                                          <div class='form-group control-group'>
                                            <label class='w-100' for='certification-inst-input'><span class='text-danger'>*</span>School/ Institute Name</label>
                                            <input class='form-control validate' id='certification-inst-input' type='text' name='school' placeholder='Enter institution' autocomplete='institution' required='' data-validation-required-message='Please enter your institution'>
                                            <small class='help-block text-danger'></small>
                                         </div>
                                      </div>
                                     <div class='col-sm-12 col-md-6'>
                                        <div class='form-group control-group'>
                                            <label class='w-100' for='certification-loc-input'><span class='text-danger'>*</span>Location</label>
                                            <input class='form-control validate' id='certification-loc-input' type='text' name='tion' placeholder='Enter location' autocomplete='location' required='' data-validation-required-message='Please enter your location'>
                                            <small class='help-block text-danger'></small>
                                        </div>
                                      </div>
                                      <div class='col-sm-12'>
                                        <div class='form-group control-group'>
                                            <label class='w-100' for='certification-desc-input'><span class='text-danger'>*</span>Description</label>
                                            <textarea class='form-control validate' id='certification-desc-input' type='text' name='descri' minlength='100' maxlength='500' data-validation-minlength-message='100 characters minimum is needed' data-validation-maxlength-message='500 characters max' placeholder='Enter description' autocomplete='description' required='' data-validation-required-message='Please enter description'></textarea>
                                            <small class='help-block text-danger'></small>
                                        </div>
                                      </div>

                                      <button   type='submit' name='click6' class='btn btn-primary'>Submit</button>
                                      <div class='modal-footer'>
                                      <button  type='submit' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                      <button  type='submit' name='editEducation' class='btn btn-primary'>Save changes</button>    
                                    </div>
                                          </div>
                                          ";
                                        }
                                 ?>
                             
                              
                            </form>
                            <?php
                             if(isset($_POST["editEducation"]))
                                {
                                  $Degree= $_POST["Degree"];
                                  $start_date= $_POST["s_date"];
                                  $end_date= $_POST["e_date"];
                                  $school=$_POST["school"];
                                  $location= $_POST["tion"];
                                  $description= $_POST["descri"];

                                if (mysqli_query($con,"update education set `Degree`=' $Degree',`Start_Date`='$start_date',`end_Date`=' $end_date',`school`='$school',`location`='$location',`Description`='$description'"))
                                    {
                                       echo "data update";
                                    }
                                 else 
                                    {
                                      echo "data not";
                                    }


                                }
                            ?>
                            <?php
                            include("connection.php");
                            if (isset($_POST["click6"]))
                             {
                                $Degree= $_POST["Degree"];
                                $start_date= $_POST["s_date"];
                                $end_date= $_POST["e_date"];
                                $school=$_POST["school"];
                                $location= $_POST["tion"];
                                $description= $_POST["descri"];
                                // if (mysqli_query($con,"insert into experience (title,company,start_date,end_date,description) values ('$title',' $company','$start_date','$end_date','$description')"))

                            if(mysqli_query($con,"insert into `education` (`Degree`,`Start_Date`,`end_Date`,`school`,`location`,`Description`) values (' $Degree','$start_date',' $end_date','$school','$location','$description')"))
                               {
                                 echo "data insert";
                               }
                               else
                                  {
                                    echo "not insert";
                                  }
                               
                             }
                           ?>
                            <!-- <div class="modal-footer">
                              <button data-dismiss='modal' type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button  type="submit" name="editEducation" class="btn btn-primary">Save changes</button>    
                            </div> -->

                          <!-- f -->   
                              </div>
                            </div>
                          </div>
                          </div>  
               </div>
          <!--Education-->
       
        <!--  Certifications-->
        <div class="card  mb-3">
                <div class="card-header white">
                    <h4> Certifications
                        <button style="float:right;" type="button" class="btn " data-toggle="modal" data-target=".bd-example-modal-lg1">
                        + Add more certification
                        </button>
                        </h4>
                            <!-- d -->
                            <div class="card font-size-1">
                            <div class="card-header">
                                <div class="editable float-right">
                                <button style="float:right;" name="vev1" type="button" class="btn " data-toggle="modal" data-target=".bd-example-modal-lg1">
                                <i class="fas fa-pen pr-2" aria-hidden="true"> </i>
                             </button>
                                <!-- <button class="section-edit btn btn-transparent p-0" data-target=".bd-example-modal-lg"><i class="fas fa-pen pr-2" aria-hidden="true"> </i></button> -->
                                <button class="section-del btn btn-transparent p-0"><i class="fas fa-trash-alt" aria-hidden="true"></i></button>
                                </div>
                            <div class="row d-flex align-items-center"> 
                                  <div class="col-sm-12 col-md-7 title-text-exp">
                                  <h3>
                                  <?php
                                        include("connection.php");        
                                            $query1=mysqli_query($con,"SELECT * FROM `certifications`");
                                            $count= mysqli_num_rows($query1);
                                              if ($count>=1) 
                                                  {
                                                    
                                                    $s=mysqli_fetch_array($query1);
                                                    echo "<p> ".$s['Degree']." </p>";
                                                  }
                                                      
                                      ?>
                                  
                                  </h3>
                                  </div>
                                  <div class="col-sm-12 col-md-4 date-text">
                                  <span class="date text-secondary"><i class="fas fa-calendar-alt pr-2" aria-hidden="true"></i>
                                  
                                  <?php
                                    include("connection.php");        
                                        $query1=mysqli_query($con,"SELECT * FROM `certifications`");
                                        $count= mysqli_num_rows($query1);
                                          if ($count>=1) 
                                              {
      
                                                $s =mysqli_fetch_row($query1);
                                                echo " <p> ".$s[2]." To ".$s[3]." </p> ";
                                              }
                                          else
                                            {
                                              echo " <p>  </p> ";
                                            }
                                    ?>
                                  
                                  </span>
                                  </div>
                              </div>
                              <div class="row sub-add-block pl-3">
                                      <div class="pr-4"><span class="institution text-secondary"><i class="fas fa-building pr-2" aria-hidden="true"></i>
                                      <?php
                                    include("connection.php");        
                                        $query1=mysqli_query($con,"SELECT * FROM `certifications`");
                                        $count= mysqli_num_rows($query1);
                                          if ($count>=1) 
                                              {
                                                
                                                $s=mysqli_fetch_row($query1);
                                                echo "<p> ".$s[4]."  </p> ";
                                              }
                                    ?>
                                      
                                    </span>
                                      </div>
                                      <div>
                                      <span class="location text-secondary"><i class="fas fa-map-marker-alt pr-2" aria-hidden="true"></i>
                                      <?php
                                    include("connection.php");        
                                        $query1=mysqli_query($con,"SELECT * FROM `certifications`");
                                        $count= mysqli_num_rows($query1);
                                          if ($count>=1) 
                                              {
                                                
                                                $s=mysqli_fetch_row($query1);
                                                echo "<p> ".$s[5]."  </p> ";
                                              }
                                    ?>
                                      </span>
                                      </div>
                              </div>
                          </div>
                              <div class="card-body"><p class="exp-desc p-2">
                              <?php
                                    include("connection.php");        
                                        $query1=mysqli_query($con,"SELECT * FROM `certifications`");
                                        $count= mysqli_num_rows($query1);
                                          if ($count>=1) 
                                              {
                                                
                                                $s=mysqli_fetch_array($query1);
                                                echo " <span>".$s['Description']." </span>";
                                              }
                                    ?>
                              </p>
                              </div>
                        </div>
                    <!-- d -->
                   
                          <div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                           
                            <div class="modal-dialog modal-lg">

                              <div class="modal-content py-4 px-4">
                              <h4> Add certification</h4>
                                <!-- f -->
                         
                         <form method="post">

                         <?php
                            include("connection.php");
                            if (isset($_POST["clickdk1"]))
                             {
                                $Degree= $_POST["Degree1"];
                                $start_date= $_POST["s_date1"];
                                $end_date= $_POST["e_date1"];
                                $school=$_POST["sch"];
                                $location= $_POST["tion1"];
                                $description= $_POST["descri1"];
                            if(mysqli_query($con,"insert into `certifications`(`Degree`,`Start_Date`,`end_Date`,`School`,`location`,`Description`) values (' $Degree','$start_date',' $end_date','$school','$location','$description')"))
                               {
                                 echo "data insert";
                               }
                               else
                                  {
                                    echo "not insert";
                                  }
                               
                             }
                           ?>

                         <button style="float:right;" type="submit" name="view1" class="btn " data-dismiss="modal"><i class="fas fa-pen d-flex float-right" aria-hidden="true"></i></button>

                         <?php
            
                                
                              include("connection.php");        
                              $query1=mysqli_query($con,"SELECT * FROM `certifications`");
                              $count= mysqli_num_rows($query1);
                                      
                                      // $query=mysqli_query($con,"SELECT * FROM `education`"); 
                                      // $count=mysqli_num_rows($query);
                                      if ($count>=1)
                                       {
                                          $s=mysqli_fetch_array($query1);
                                          echo "
                                          
                                          <div class='row'>
                                          
                                              <div class='col-sm-12 col-md-6'>
                                                  <div class='form-group control-group'>
                                                    <label class='w-100' for='cert-name-input'><span class='text-danger'>*</span>Degree</label>
                                                    <input class='form-control validate' value=".$s['Degree']." id='certification-name-input' type='text' name='Degree1' placeholder='Enter degree' autocomplete='name' required='' data-validation-required-message='Please enter your degree'>
                                                    <small class='help-block text-danger'></small>
                                                    </div>
                                              </div>

                                              <div class='col-sm-12 col-md-3'>
                                              <div class='form-group control-group'>
                                                <label class='w-100' for='certification-start-input'><span class='text-danger'>*</span>Start Date</label>
                                                <input class='form-control validate' value=".$s['Start_Date']." id='certification-start-input' type='date' name='s_date1' placeholder='Enter start date' autocomplete='start_date' required='' data-validation-required-message='Please enter starting date'>
                                                <small class='help-block text-danger'></small>
                                              </div>
                                           </div>
                                          <div class='col-sm-12 col-md-3'>
                                            <div class='form-group control-group'>
                                                <label class='w-100' for='certification-end-input'><span class='text-danger'>*</span>End Date</label>
                                                <input class='form-control validate' value=".$s['End_Date']." id='certification-end-input' type='date' name='e_date1' placeholder='Enter end date' autocomplete='end_date' required='' data-validation-required-message='Please enter your ending date'>
                                                <small class='help-block text-danger'></small>
                                            </div>
                                          </div>
                                          <div class='col-sm-12 col-md-6'>
                                          <div class='form-group control-group'>
                                            <label class='w-100' for='certification-inst-input'><span class='text-danger'>*</span>School/ Institute Name</label>
                                            <input class='form-control validate' value=".$s['School']." id='certification-inst-input' type='text' name='sch' placeholder='Enter institution' autocomplete='institution' required='' data-validation-required-message='Please enter your institution'>
                                            <small class='help-block text-danger'></small>
                                         </div>
                                      </div>
                                     <div class='col-sm-12 col-md-6'>
                                        <div class='form-group control-group'>
                                            <label class='w-100' for='certification-loc-input'><span class='text-danger'>*</span>Location</label>
                                            <input class='form-control validate' value=".$s['Location']." id='certification-loc-input' type='text' name='tion1' placeholder='Enter location' autocomplete='location' required='' data-validation-required-message='Please enter your location'>
                                            <small class='help-block text-danger'></small>
                                        </div>
                                      </div>
                                      <div class='col-sm-12'>
                                        <div class='form-group control-group'>
                                            <label class='w-100' for='certification-desc-input'><span class='text-danger'>*</span>Description</label>
                                            <textarea class='form-control validate'  id='certification-desc-input' type='text' name='descri1' minlength='100' maxlength='500' data-validation-minlength-message='100 characters minimum is needed' data-validation-maxlength-message='500 characters max' placeholder='Enter description' autocomplete='description' required='' data-validation-required-message='Please enter description'> ".$s['Description']." </textarea>
                                            <small class='help-block text-danger'></small>
                                        </div>
                                      </div>
                                      <div class='modal-footer'>
                                      <button type='submit' name='clickdk1' class='btn btn-primary'>Submit</button>

                                      <button  type='submit' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                      <button type='submit' name='editCertifications' class='btn btn-primary'>Save changes</button>    
                                    </div> 

                                          </div>                                       
                                          ";
                                       }
                                      else
                                        {
                                          echo "
                                          
                                          <div class='row'>
                                              <div class='col-sm-12 col-md-6'>
                                                  <div class='form-group control-group'>
                                                    <label class='w-100' for='cert-name-input'><span class='text-danger'>*</span>Degree</label>
                                                    <input class='form-control validate'  id='certification-name-input' type='text' name='Degree1' placeholder='Enter degree' autocomplete='name' required='' data-validation-required-message='Please enter your degree'>
                                                    <small class='help-block text-danger'></small>
                                                    </div>
                                              </div>
                                              <div class='col-sm-12 col-md-3'>
                                              <div class='form-group control-group'>
                                                <label class='w-100' for='certification-start-input'><span class='text-danger'>*</span>Start Date</label>
                                                <input class='form-control validate' id='certification-start-input' type='date' name='s_date1' placeholder='Enter start date' autocomplete='start_date' required='' data-validation-required-message='Please enter starting date'>
                                                <small class='help-block text-danger'></small>
                                              </div>
                                           </div>
                                          <div class='col-sm-12 col-md-3'>
                                            <div class='form-group control-group'>
                                                <label class='w-100' for='certification-end-input'><span class='text-danger'>*</span>End Date</label>
                                                <input class='form-control validate' id='certification-end-input' type='date' name='e_date1' placeholder='Enter end date' autocomplete='end_date' required='' data-validation-required-message='Please enter your ending date'>
                                                <small class='help-block text-danger'></small>
                                            </div>
                                          </div>
                                          <div class='col-sm-12 col-md-6'>
                                          <div class='form-group control-group'>
                                            <label class='w-100' for='certification-inst-input'><span class='text-danger'>*</span>School/ Institute Name</label>
                                            <input class='form-control validate' id='certification-inst-input' type='text' name='sch' placeholder='Enter institution' autocomplete='institution' required='' data-validation-required-message='Please enter your institution'>
                                            <small class='help-block text-danger'></small>
                                         </div>
                                      </div>
                                     <div class='col-sm-12 col-md-6'>
                                        <div class='form-group control-group'>
                                            <label class='w-100' for='certification-loc-input'><span class='text-danger'>*</span>Location</label>
                                            <input class='form-control validate' id='certification-loc-input' type='text' name='tion1' placeholder='Enter location' autocomplete='location' required='' data-validation-required-message='Please enter your location'>
                                            <small class='help-block text-danger'></small>
                                        </div>
                                      </div>
                                      <div class='col-sm-12'>
                                        <div class='form-group control-group'>
                                            <label class='w-100' for='certification-desc-input'><span class='text-danger'>*</span>Description</label>
                                            <textarea class='form-control validate' id='certification-desc-input' type='text' name='descri1' minlength='100' maxlength='500' data-validation-minlength-message='100 characters minimum is needed' data-validation-maxlength-message='500 characters max' placeholder='Enter description' autocomplete='description' required='' data-validation-required-message='Please enter description'></textarea>
                                            <small class='help-block text-danger'></small>
                                        </div>
                                      </div>

                                      <div class='modal-footer'>
                                      <button type='submit' name='clickdk1' class='btn btn-primary' >Submit</button>

                                      <button  type='submit' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                      <button type='submit' name='editCertifications' class='btn btn-primary'>Save changes</button>    
                                    </div> 
                                          </div>
                                          ";
                                        }
                                   
                                  
                                 ?>

                            </form>
                            <?php
                             if(isset($_POST["editCertifications"]))
                                {
                                  $Degree= $_POST["Degree1"];
                                  $start_date= $_POST["s_date1"];
                                  $end_date= $_POST["e_date1"];
                                  $school=$_POST["sch"];
                                  $location= $_POST["tion1"];
                                  $description= $_POST["descri1"];

                                if (mysqli_query($con,"update `certifications` set `Degree`=' $Degree',`Start_Date`='$start_date',`end_Date`=' $end_date',`School`='$school',`location`='$location',`Description`='$description'"))
                                    {
                                       echo "data update";
                                    }
                                 else 
                                    {
                                      echo "data not";
                                    }


                                }
                            ?>
                           
                            <!-- <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <button type="button" name="" class="btn btn-primary">Save changes</button>    
                            </div>  -->
                          <!-- f -->   
                              </div>
                            </div>
                          </div>
                          </div>       
               </div>
        <!--  Certifications-->
      
         <!--Awards, Events and Publications -->
         <div class="card  mb-3">
                <div class="card-header white">
                    <h4> Awards, Events and Publications
                        <button style="float:right;" type="button" class="btn " data-toggle="modal" data-target=".bd-example-modal-lg12">
                       + Add more events
                        </button>
                    </h4>
                       <!-- d -->
                            <div class="card font-size-1">
                            <div class="card-header">
                                <div class="editable float-right">
                                <button style="float:right;" name="vev1" type="button" class="btn " data-toggle="modal" data-target=".bd-example-modal-lg12">
                                <i class="fas fa-pen pr-2" aria-hidden="true"> </i>
                             </button>
                                <!-- <button class="section-edit btn btn-transparent p-0" data-target=".bd-example-modal-lg"><i class="fas fa-pen pr-2" aria-hidden="true"> </i></button> -->
                                <button class="section-del btn btn-transparent p-0"><i class="fas fa-trash-alt" aria-hidden="true"></i></button>
                                </div>
                            <div class="row d-flex align-items-center"> 
                                  <div class="col-sm-12 col-md-7 title-text-exp">
                                  <h3>
                                  <?php
                                        include("connection.php");        
                                            $query1=mysqli_query($con,"SELECT * FROM `events`");
                                            $count= mysqli_num_rows($query1);
                                              if ($count>=1) 
                                                  {
                                                    
                                                    $a=mysqli_fetch_row($query1);
                                                    echo "<p> ".$a[1]." </p>";
                                                  }
                                                      
                                      ?>
                                  
                                  </h3>
                                  </div>
                                  <div class="col-sm-12 col-md-4 date-text">
                                  <span class="date text-secondary"><i class="fas fa-calendar-alt pr-2" aria-hidden="true"></i>
                                  
                                  <?php
                                    include("connection.php");        
                                        $query1=mysqli_query($con,"SELECT * FROM `events`");
                                        $count= mysqli_num_rows($query1);
                                          if ($count>=1) 
                                              {
      
                                                $a=mysqli_fetch_row($query1);
                                                echo " <p> ".$a[3]." </p> ";
                                              }
                                          else
                                            {
                                              echo " <p>  </p> ";
                                            }
                                    ?>
                                  
                                  </span>
                                  </div>
                              </div>
                              <div class="row sub-add-block pl-3">
                                      <div class="pr-4"><span class="institution text-secondary"><i class="fas fa-building pr-2" aria-hidden="true"></i>
                                      <?php
                                    include("connection.php");        
                                        $query1=mysqli_query($con,"SELECT * FROM `events`");
                                        $count= mysqli_num_rows($query1);
                                          if ($count>=1) 
                                              {
                                                
                                                $a=mysqli_fetch_row($query1);
                                                echo "<p> ".$a[2]."  </p> ";
                                              }
                                    ?>
                                      
                                    </span>
                                      </div>
                                      <div>
                                      <span class="location text-secondary">
                                     
                                      </span>
                                      </div>
                              </div>
                          </div>
                              <div class="card-body"><p class="exp-desc p-2">
                              <?php
                                    include("connection.php");        
                                        $query1=mysqli_query($con,"SELECT * FROM `events`");
                                        $count= mysqli_num_rows($query1);
                                          if ($count>=1) 
                                              {
                                                
                                                $a=mysqli_fetch_row($query1);
                                                echo "<p> ".$a[4]."  </p> ";
                                              }
                                    ?>
                              </p>
                              </div>
                        </div>
                    <!-- d -->
                          <div class="modal fade bd-example-modal-lg12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                           
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content py-4 px-4">
                              <h4> Add event</h4>
                                <!-- f -->
                               
                                <form class="container-fluid" id="event-form" novalidate="" method="post">
                                <?php
                                    include("connection.php");
                                      $query=mysqli_query($con,"select * from `events`");
                                      $count=mysqli_num_rows($query);
                                        if ($count >=1)
                                        {
                                          $a=mysqli_fetch_row($query);
                                          echo "
                                          <div class='row'><div class='col-sm-12 col-md-4'>
                                          <div class='form-group control-group'>
                                            <label class='w-100' for='event-inst-input'><span class='text-danger'>*</span>Institute Name</label>
                                            <input class='form-control validate' value=".$a[1]."  id='' type='text' name='institution1' placeholder='Enter institution' autocomplete='institution' required='' data-validation-required-message='Please enter your institution'>
                                            <small class='help-block text-danger'></small>
                                          </div>
                                        </div>
                                        <div class='col-sm-12 col-md-4'>
                                            <div class='form-group control-group'><label class='w-100' for='event-name-input'><span class='text-danger'>*</span>Event Name</label>
                                            <input class='form-control validate' value=".$a[2]."  type='text' name='name1' placeholder='Enter event' autocomplete='name' required='' data-validation-required-message='Please enter your event'>
                                            <small class='help-block text-danger'></small>
                                          </div>
                                        </div>
                                        <div class='col-sm-12 col-md-4'>
                                          <div class='form-group control-group'>
                                            <label class='w-100' for='event-start-input'><span class='text-danger'>*</span>Date of Event</label>
                                            <input class='form-control validate' value=".$a[3]." id='' type='date' name='start_date1' placeholder='Enter date' autocomplete='start_date' required='' data-validation-required-message='Please enter   date'>
                                            <small class='help-block text-danger'></small>
                                          </div>
                                        </div>
                                        <div class='col-sm-12'>
                                          <div class='form-group control-group'>
                                            <label class='w-100' for='event-desc-input'><span class='text-danger'>*</span>Description</label>
                                            <textarea class='form-control validate'  id='' type='text' name='description1' minlength='100' maxlength='500' data-validation-minlength-message='100 characters minimum is needed' data-validation-maxlength-message='500 characters max' placeholder='Enter description' autocomplete='description' required='' data-validation-required-message='Please enter description'> ".$a[4]."</textarea>
                                            <small class='help-block text-danger'></small>
                                          </div>
                                        </div>
                                        <div class='modal-footer'>
                                        <button type='Submit' name='event1' value='' class='btn btn-primary'>  submit</button>

                                            <button type='submit' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                            <button type='submit' name='updateevent' class='btn btn-primary'>Save changes</button>    
                                      </div>
                                      </div>
                                          ";
                                        }
                                        else
                                          {
                                            echo "
                                            <div class='row'><div class='col-sm-12 col-md-4'>
                                            <div class='form-group control-group'>
                                              <label class='w-100' for='event-inst-input'><span class='text-danger'>*</span>Institute Name</label>
                                              <input class='form-control validate' id='' type='text' name='institution1' placeholder='Enter institution' autocomplete='institution' required='' data-validation-required-message='Please enter your institution'>
                                              <small class='help-block text-danger'></small>
                                            </div>
                                          </div>
                                          <div class='col-sm-12 col-md-4'>
                                              <div class='form-group control-group'><label class='w-100' for='event-name-input'><span class='text-danger'>*</span>Event Name</label>
                                              <input class='form-control validate'  type='text' name='name1' placeholder='Enter event' autocomplete='name' required='' data-validation-required-message='Please enter your event'>
                                              <small class='help-block text-danger'></small>
                                            </div>
                                          </div>
                                          <div class='col-sm-12 col-md-4'>
                                            <div class='form-group control-group'>
                                              <label class='w-100' for='event-start-input'><span class='text-danger'>*</span>Date of Event</label>
                                              <input class='form-control validate' id='' type='date' name='start_date1' placeholder='Enter date' autocomplete='start_date' required='' data-validation-required-message='Please enter   date'>
                                              <small class='help-block text-danger'></small>
                                            </div>
                                          </div>
                                          <div class='col-sm-12'>
                                            <div class='form-group control-group'>
                                              <label class='w-100' for='event-desc-input'><span class='text-danger'>*</span>Description</label>
                                              <textarea class='form-control validate' id='' type='text' name='description1' minlength='100' maxlength='500' data-validation-minlength-message='100 characters minimum is needed' data-validation-maxlength-message='500 characters max' placeholder='Enter description' autocomplete='description' required='' data-validation-required-message='Please enter description'></textarea>
                                              <small class='help-block text-danger'></small>
                                            </div>
                                          </div>
                                          <div class='modal-footer'>
                                          <button type='Submit' name='event1' value='' class='btn btn-primary'>  submit</button>

                                              <button type='submit' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                              <button type='submit' name='updateevent' class='btn btn-primary'>Save changes</button>    
                                          </div>
                                        </div>
                                            ";
                                          }
                                 
                                     

                                  
                               ?>
                                  
                              </form>
                               <?php
                                  if (isset($_POST["updateevent"]))
                                   {
                                      include("connection.php");
                                      $institution= $_POST["institution1"];
                                      $name= $_POST["name1"];
                                      $start_date= $_POST["start_date1"];
                                      $description= $_POST["description1"];
                                      if (mysqli_query($con,"update `events` set `Institute_Name`='$institution',`Event_Name`='$name',`Date_of_Event`='$start_date',`Description`='$description'"))
                                          {
                                            echo "data update";
                                          }
                                        else 
                                          {
                                            echo "not update";
                                          }
                                   }

                                  ?>

                               <?php
                               include("connection.php");
                                if (isset($_POST["event1"]))
                                  {
                                      $institution= $_POST["institution1"];
                                      $name= $_POST["name1"];
                                      $start_date= $_POST["start_date1"];
                                      $description= $_POST["description1"];
                                    if (mysqli_query($con,"insert into `events`(`Institute_Name`,`Event_Name`,`Date_of_Event`,`Description`) values ('$institution','$name','$start_date','$description')"))
                                        {
                                          echo "data insert";
                                        }

                                      else 
                                        {
                                          echo "not";
                                        }

                                  }
                               ?>
                          <!-- f -->   
                           <!-- <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" name="" class="btn btn-primary">Save changes</button>    
                            </div> -->
                              </div>
                            </div>
                          </div>
                       </div>    
               </div>       
        <!--Awards, Events and Publications -->
     
        <!-- contect -->
      
   <div class="modal fade bd-example-modaldks" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    
     <div class="modal-dialog modal-lg">
      
         <!-- f -->
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="profile-modalLabel">Edit Profile Details</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
              </div>
              <div class="modal-body">
              
              <form class="container-fluid" id="profile-form" novalidate="" method="post">

              <?php
              include("connection.php");
             
                  $query= mysqli_query($con,"select * from admin");
                  $count= mysqli_num_rows($query);
                   if($count>=1)
                      { 
                          $e=mysqli_fetch_row($query);
                          echo "
                          <div class='form-group control-group'>
                  <label class='w-100' for='emailAddress'><span class='text-danger'>*</span>Email Address:</label>
                    <input class='form-control validate' value=".$e[1]."  type='email' name='email1' autocomplete='email' placeholder='Email' required='' data-validation-required-message='Please enter valid email'>
                      <small class='help-block text-danger'></small>
                      </div>
                      <div class='row'>
                          <div class='col-sm-12 col-md-6'>
                            <div class='form-group control-group'>
                              <label class='w-100' for='firstName'>
                              <span class='text-danger'>*</span>First Name:</label>
                              <input class='form-control validate' value=".$e[2]."  type='text' placeholder='Frist name' name='first_name1' autocomplete='first name' required='' data-validation-required-message='Please enter your frist name'>
                              <small class='help-block text-danger'></small>
                            </div>
                        </div>
                        <div class='col-sm-12 col-md-6'>
                          <div class='form-group control-group'>
                            <label class='w-100' for='lastName'><span class='text-danger'>*</span>Last Name:</label>
                            <input class='form-control validate' value=".$e[3]."  type='text' name='last_name' placeholder='Last name' autocomplete='last name' required=''  data-validation-required-message='Please enter your last name' >
                            <small class='help-block text-danger'></small>
                            </div>
                        </div>
                      </div>
                      <div class='form-group control-group'>
                          <label class='w-100' for='location'><span class='text-danger'>*</span>Location:</label>
                          <input class='form-control validate' value=".$e[6]."  type='text' name='location' placeholder='Location' autocomplete='location' required='' data-validation-required-message='Please enter your current location'>
                          <small class='help-block text-danger'></small>
                          </div>
                      <div class='form-group control-group'>
                          <label class='w-100' for='phoneNum'><span class='text-danger'>*</span>Phone Number:</label>
                          <input class='form-control validate' value=".$e[4]."  autocomplete='tel-national' name='phone_number' pattern='^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$' placeholder='Phone' required='' data-validation-required-message='Please enter valid phone number' data-validation-pattern-message='Phone enter valid phone number' type='text'>
                          <small class='help-block text-danger'></small>
                          </div>
                          <div class='modal-footer'>
                               <button class='btn btn-secondary' type='sumit' data-dismiss='modal'>Close</button>
                               <button type='submit' class='btn btn-primary' name='updatecontect'>Save changes</button>
                           </div>
                        ";
                      }
                  else
                     {
                       echo '
                       <div class="form-group control-group">
                       <label class="w-100" for="emailAddress"><span class="text-danger">*</span>Email Address:</label>
                         <input class="form-control validate"  type="email" name="email" autocomplete="email" placeholder="Email" required="" data-validation-required-message="Please enter valid email">
                           <small class="help-block text-danger"></small>
                           </div>
                           <div class="row">
                               <div class="col-sm-12 col-md-6">
                                 <div class="form-group control-group">
                                   <label class="w-100" for="firstName">
                                   <span class="text-danger">*</span>First Name:</label>
                                   <input class="form-control validate"  type="text" placeholder="Frist name" name="frist" autocomplete="first name" required="" data-validation-required-message="Please enter your frist name">
                                   <small class="help-block text-danger"></small>
                                 </div>
                             </div>
                             <div class="col-sm-12 col-md-6">
                               <div class="form-group control-group">
                                 <label class="w-100" for="lastName"><span class="text-danger">*</span>Last Name:</label>
                                 <input class="form-control validate"  type="text" name="last" placeholder="Last name" autocomplete="last name" required="" data-validation-required-message="Please enter your last name">
                                 <small class="help-block text-danger"></small>
                                 </div>
                             </div>
                           </div>
                           <div class="form-group control-group">
                               <label class="w-100" for="location"><span class="text-danger">*</span>Location:</label>
                               <input class="form-control validate"  type="text" name="location" placeholder="Location" autocomplete="location" required="" data-validation-required-message="Please enter your current location">
                               <small class="help-block text-danger"></small>
                               </div>
                           <div class="form-group control-group">
                               <label class="w-100" for="phoneNum"><span class="text-danger">*</span>Phone Number:</label>
                               <input class="form-control validate"  autocomplete="tel-national" name="phone" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" placeholder="Phone" required="" data-validation-required-message="Please enter valid phone number" data-validation-pattern-message="Phone enter valid phone number" type="text">
                               <small class="help-block text-danger"></small>
                               </div>
                      
                               <div class="modal-footer">
                               <button class="btn btn-secondary" type="submit" data-dismiss="modal">Close</button>
                               <button class="btn btn-primary" name="updatecontect" id="profile-submit" type="submit">Save changes</button>
                           </div>
                       ';
                     }
              
              ?>
                
                <?php
                    include("connection.php");
                    if (isset($_POST["updatecontect"])) 
                      {
                        $email= $_POST["email1"];
                        $frist= $_POST["first_name1"];
                        $last= $_POST["last_name"];
                        $phone= $_POST["phone_number"];
                      
                        $location= $_POST["location"];
                        
                        if (mysqli_query($con,"update admin set email='$email',fist_name='$frist',last_name='$last',phone_number='$phone',location='$location'"))
                          {
                            echo "data update";
                          }
                      else
                          {
                            echo"not ";
                          }
                      }
                    ?>
                      </form>
                      </div>
                      <!-- <div class="modal-footer">
                          <button class="btn btn-secondary" type="submit" data-dismiss="modal">Close</button>
                          <button class="btn btn-primary" name="updatecontect" id="profile-submit" type="submit">Save changes</button>
                      </div> -->
                    </div> 
                   
                           <!-- f -->   
                         
                              
                            </div>
                          </div>
                   <!-- Start of  Zendesk Widget script -->
<!-- End of  Zendesk Widget script -->
        <!-- contect -->
     </div>
  </div>
 
   
  <!-- Button trigger modal -->
               
             
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js"></script>

</body>

</html>
<?php
}
else
  {
    header("location:index.php");
  }
?>
                