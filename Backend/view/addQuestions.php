<?php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("Location:../index.php");  
 }  
 
 include('../model/db.php');

 include('../controller/cateQueController.php');


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
             <a href="dashboard.php" class="nav-link">
               <i class="nav-icon fas fa-tachometer-alt"></i>
               <p>
                 Dashboard
               </p>
             </a>
           </li>
           <li class="nav-item">
             <a href="students.php" class="nav-link  ">
               <i class="nav-icon fas fa-th"></i>
               <p>
                Students
                 <span class="right badge badge-danger">New</span>
               </p>
             </a>
           </li>
           <li class="nav-item menu-open">
             <a href="#" class="nav-link">
               <i class="nav-icon fas fa-copy"></i>
               <p>
                Classes
                 <i class="fas fa-angle-left right"></i>
                 <span class="badge badge-info right">2</span>
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
                 <a href="addQuestions.php" class="nav-link active">
                   <i class="far fa-circle nav-icon"></i>
                   <p>MCQ Questions</p>
                 </a>
               </li>
             </ul>
           </li>
           <li class="nav-item ">
             <a href="#" class="nav-link">
               <i class="nav-icon fas fa-chart-pie"></i>
               <p>
                 Activities
                 <i class="right fas fa-angle-left"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="mcqAdd.php" class="nav-link  active">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Multiple-choice question</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="pages/charts/flot.html" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Video Tutorials</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="pages/charts/inline.html" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>One to one</p>
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
                 <a href="pages/UI/general.html" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Logins</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="pages/UI/icons.html" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Marks</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="pages/UI/buttons.html" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Subjects</p>
                 </a>
               </li>
             </ul>
           </li>
           <li class="nav-item">
             <a href="#" class="nav-link">
               <i class="nav-icon fas fa-edit"></i>
               <p>
                Certifications
               </p>
             </a>
           </li>
           <li class="nav-header">EXAMPLES</li>
          
           <li class="nav-item">
             <a href="../controller/sessionDistoryController.php?q=logout" class="nav-link">
               <i class="nav-icon fas fa-sign-out-alt"></i>
               <p>
                Logout
               </p>
             </a>
           </li>';
           }
           else{
               echo '
               <li class="nav-item">
               <a href="profile.php" class="nav-link">
                 <i class="nav-icon fas fa-edit"></i>
                 <p>
                  Profile
                 </p>
               </a>
             </li>
            <li class="nav-header">EXAMPLES</li>
             <li class="nav-item">
               <a href="../controller/sessionDistoryController.php?q=logout" class="nav-link">
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
            <h1 class="m-0">MCQ</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">MCQ v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">

              <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add new question
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">  
      <form action="../controller/cateQueController.php" method="post">
              <input type="number" class="form-control" readonly name="qid" value="<?php echo $next;  ?>">
             
                <div class="row">   
                    <div class="col-md-12">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Question Text:</label>
                              <input type="text" name="question" class="form-control">
                            </div>
                      </div>
                  </div>
                  
                  <div class="row">
                  <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Choice 1:</label>
                              <input type="text" name="op1" class="form-control">
                            </div>
                      </div>
                    <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Choice 2:</label>
                              <input type="text" name="op2" class="form-control" >
                            </div>
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Choice 3:</label>
                              <input type="text" name="op3" class="form-control" >

                            </div>
                      </div>
                      <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Choice 4:</label>
                              <input type="text" name="op4" class="form-control" >
                            </div>
                      </div>
                  </div>

                  

                  <div class="row">
                    <div class="col-md-12">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Correct Answer</label>
                              <input type="text" name="answer" class="form-control" >

                            </div>
                      </div>
                  </div>

                  <div class="row">   
                    <div class="col-md-12">
                            <div class="form-group">
                            <?php 
                            $sql = "select * from tblcategory";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            echo "<select name='cat' class='form-select form-control' aria-label='Default select example'> ";
                            while($row = mysqli_fetch_assoc($result)){
                                echo " <option value=".$row['catid'].">".$row['categoryName']."</option>";
                            }
                            } else {
                            echo "0 results";
                            }
                            ?>    
                                </select>
                            </div>
                      </div>
                  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" name="addQue" class="btn btn-success" value="Add New">
        </form>
      </div>
    </div>
  </div>
</div>




              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">


            
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>Question ID</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                 <?php 

                  $sql = "select * from tblmcqtest";
                  $result = mysqli_query($con, $sql);
                  if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {

                     
                      echo " <tr>
                      <td>".$row['qid']."</td>
                      <td>".$row['question']."</td>
                    
                      <td>".$row['answer']."</td>
                      <td><a class='btn btn-danger' href=../controller/cateQueController.php?qid=".$row['qid']."> Delete </a></td>
                    </tr>";
                    }
                  } else {
                    echo "0 results";
                  }
                  ?>     
                  </tbody>
                  <tfoot>
                  
                  <th>Question ID</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Delete</th>
                  </tfoot>
                </table>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
              
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
</body>
</html>