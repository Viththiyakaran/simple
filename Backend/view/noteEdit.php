<?php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("Location:../index.php");  
 }  
 
 include('../model/db.php');
 

 

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Simple</title>
 
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../public/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
     </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['username']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


               <?php  
           if($_SESSION['type'] == "Admin") 
           {
             echo '<li class="nav-item">
             <a href="dashboard.php" class="nav-link ">
               <i class="nav-icon fas fa-tachometer-alt"></i>
               <p>
                 Dashboard
               </p>
             </a>
           </li>
           <li class="nav-item">
             <a href="students.php" class="nav-link">
               <i class="nav-icon fas fa-th"></i>
               <p>
                Students
                 <span class="right badge badge-danger">New</span>
               </p>
             </a>
           </li>
           <li class="nav-item">
             <a href="#" class="nav-link">
               <i class="nav-icon fas fa-copy"></i>
               <p>
                Classes
                 <i class="fas fa-angle-left right"></i>
               
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="addSubjectCat.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Categories</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="addQuestions.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>MCQ Questions</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="videoAdd.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Video Tutorials</p>
                 </a>
               </li>
               <li class="nav-item">
               <a href="noteAdd.php" class="nav-link active">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Notes</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="meetings.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Meetings</p>   
               </a>
             </li>
             </ul>
           </li>
           <li class="nav-item">
             <a href="#" class="nav-link">
               <i class="nav-icon fas fa-chart-pie"></i>
               <p>
                 Activities
                 <i class="right fas fa-angle-left"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="mcqAdd.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Multiple-choice question</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="videoGame.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Video Tutorials</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="meet.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Meet</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="readNote.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Read Notes</p>
                 </a>
               </li>
             </ul>
           </li>
           <li class="nav-item">
             <a href="#" class="nav-link">
               <i class="nav-icon fas fa-tree"></i>
               <p>
                 Analysis 
                 <i class="fas fa-angle-left right"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="loginLogs.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Logins Log</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="activeLogs.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Activites Log</p>
                 </a>
               </li>
             </ul>
           </li>
           <li class="nav-item">
             <a href="certifications.php" class="nav-link">
               <i class="nav-icon fas fa-edit"></i>
               <p>
                Certifications
               </p>
             </a>
           </li>
           <li class="nav-header">ADVANCED</li>
           <li class="nav-item">
           <a href="institutionSetup.php" class="nav-link">
             <i class="nav-icon fas fa-university"></i>
             <p>
              Institution
             </p>    
           </a>
           </li>
           <li class="nav-item">
             <a href="../controller/sessionController.php?q=logout" class="nav-link">
               <i class="nav-icon fas fa-sign-out-alt"></i>
               <p>
                Logout
               </p>
             </a>
           </li>';
           }
           else{
            echo '<li class="nav-item">
            <a href="dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="profile.php" class="nav-link">
            <i class="nav-icon fas fa-users-cog"></i>
              <p>
               Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="mcqAdd.php" class="nav-link">
              <i class="nav-icon far fa-question-circle"></i>
              <p>
               MCQ Game
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="videoGame.php" class="nav-link">
            <i class="nav-icon fas fa-video"></i>
            <p>
             Video Tutorils
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="readNote.php" class="nav-link">
            <i class="nav-icon fas fa-clipboard"></i>
            <p>
            Read Notes  
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="meet.php" class="nav-link">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
            <p>
           Meet
            </p>   
          </a>
        </li>
         <li class="nav-header">ADVANCED</li>
          <li class="nav-item">
            <a href="../controller/sessionController.php?q=logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
               Logout
              </p>
            </a>
          </li>';
        }
          ?>
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Notes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Notes v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->

<?php
 
  if(isset($_GET['enID']))
  {
    $editID = $_GET['enID'];
    $sql = "SELECT * FROM `tblnotes` where nID = $editID";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {

          $nID = $row['nID'];
          $noteTitle = $row['noteTitle'];
          $noteCatID  = $row['noteCatID'];
          $noteDocument = $row['noteDocument'];
        }

      } else 
      {
      echo "0 results";
      }
  }


?>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
                        
            <div class="card card-primary card-outline card-tabs">
              <div class="card-header p-0 pt-1 border-bottom-0">
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                  
                  <form action="../controller/cateNoteController.php" method="post" enctype="multipart/form-data">
                      <div class="mb-3">
                      <input type="hidden" name="nID"  value="<?php echo  $nID;?>" class="form-control" id="exampleFormControlInput1">
                        <label for="exampleFormControlInput1" class="form-label">Note Name</label>
                        <input type="text" name="noteName"  value="<?php echo $noteTitle; ?>" class="form-control" id="exampleFormControlInput1" required>
                      </div>
                    
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Note Category</label>
                            <?php 
                                $sql = "select * from tblcategory where catid= $noteCatID";
                                $result = mysqli_query($con, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    echo "<select name='noteCategoryId' id='noteCategoryId' class='form-select form-control' aria-label='Default select example'>";
                                    while($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value=".$row['catid'].">".$row['categoryName']."</option>";
                                    }
                                    $sql = "select * from tblcategory";
                                    $result = mysqli_query($con, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value=".$row['catid'].">".$row['categoryName']."</option>";
                                        }
                                    }
                                } else {
                                    echo "0 results";
                                }
                            ?>     
                            </select>
                      </div>

                      <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Existing Note Document </label>
                        <embed src="../controller/uploads/<?php echo $noteDocument; ?>" width="100%" height="400px" />
                        <input type="hidden" class="form-control"  name="existingimage" value="<?php echo $noteDocument; ?>" id="exampleInputPassword1" >
                        <br><br>
                        <label for="formFileMultiple" class="form-label">New Note Document </label>
                        <input type="file" class="form-control" name="image"  id="exampleInputPassword1" >
                     </div>
                     <input  type="submit" name="noteUpdate" class="btn btn-primary mt-3" value="Update New Note">
                    </form>





                  </div>
                  
                 
                </div>
              </div>
           











              
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="https://simple.codeengine.xyz/">  Simple</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<!-- jQuery -->
<script src="../public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../public/plugins/jszip/jszip.min.js"></script>
<script src="../public/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../public/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../public/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
    $("#ans").hide();

  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
    $("document").ready( function () {
      $('#cat').change(function(){  
           var catID = $(this).val(); 
          //alert(catID); 
           $.ajax({  
                url:"../controller/cateQueController.php",  
                method:"POST",  
                data:{catID:catID},  
                success:function(data){  
                     $('#mcq').html(data);
                     $("#ans").show();   
                }  
           }); 
      }); 
    }); 
</script>  


<script>
    $("document").ready( function () {
      $('#ans').change(function(){  
           var catID = $(this).val(); 
          alert(catID); 
          //  $.ajax({  
          //       url:"../controller/cateQueController.php",  
          //       method:"POST",  
          //       data:{catID:catID},  
          //       success:function(data){  
          //            $('#mcq').html(data);
          //            $("#ans").show();   
          //       }  
          //  }); 
      }); 
    }); 
</script>  



</body>
</html>
