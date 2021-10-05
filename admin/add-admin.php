<?php
session_start();
include("include/header.php");
include("include/sidebar.php");



?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add admin page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-9">
            

          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add admin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="adminhandlers/addadmin.php" method="post">
              <?php
              if(isset($_SESSION['success']))
              {
                
                echo $_SESSION['success'];
                unset($_SESSION['success']);

              }
              ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">admin type</label>
            </br>
                   <select class="custome-select" name="type" id="inputGroupSelect01">
                   <option selected>choose...</option>
                   <option value="0">admin</option>
                   <option value="1">super admin</option>
                   

                   </select>
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
           
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
<?php
include("include/footer.php");
?>