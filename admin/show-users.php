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
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
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
            

          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Show Users</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->

              <?php
              if(isset($_SESSION['success']))
              {
                
                echo $_SESSION['success'];
                unset($_SESSION['success']);

              }
              ?>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      
                      <th>User</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($users=mysqli_fetch_assoc($queryGetusers))
                    {?>
                    <tr>
            
                      
                      <td><?=$users['name'];?></td>
                      <td><?=$users['email'];?></td>
                      <td><span class="tag tag-success">
                      <?php 
                      if($users['status'] == 0 )
                      {
                        echo "pending";
                      }
                      else
                      {
                        echo "Approved";
                      }
                      ?>
                      </span>
                      </td>
                      <td>
                        <a href="adminhandlers/deleteuser.php?userid=<?=$users['id']?>"><i class="fas btn btn-danger fa-trash-alt"></i></a>
                        <a href="adminhandlers/approveduser.php?userid=<?=$users['id']?>"><i class="fas btn btn-info fa-check-square"></i></a>
                        
                      </td>
                     
                    </tr>
               
                  </tbody>

                  <?php } ?>
                  
                </table>
              </div>
              <!-- /.card-body -->
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