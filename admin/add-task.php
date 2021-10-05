<?php
session_start();
include("adminhandlers/connect.php");
include("include/header.php");
include("include/sidebar.php");
include("adminhandlers/showusers.php");


?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Tasks</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Tasks</li>
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
                <h3 class="card-title">Add user</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="adminhandlers/addtask.php" method="post">
              <?php
              if(isset($_SESSION['success']))
              {
                
                echo $_SESSION['success'];
                unset($_SESSION['success']);

              }
              ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Body</label>
                    <textarea name="body" id="" class="form-control" placeholder="Enter task"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">User</label>
            </br>
                    <select name="user" id="">
                        <?php while($users=mysqli_fetch_assoc($queryGetusers)){?>
                        <option value="<?=$users['id']?>"><?=$users['name']?></option>
                        <?php } ?>

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