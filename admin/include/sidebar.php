<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item menu-open">

         
               <a href="#" class="nav-link active">
              <i class="fas fa-users"></i>
              <p>
                USERS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
  <li class="nav-item">
    <a href="add-user.php" class="nav-link active">
    <i class="fas fa-user-plus"></i>
      <p>Add users</p>
    </a>
  </li>
  <li class="nav-item">
    <a href="show-users.php" class="nav-link">
    <i class="fas fa-eye"></i>
      <p>show users</p>
    </a>
  </li>
</ul>

<li class="nav-item menu-open">

 
<a href="#" class="nav-link active">
<i class="fas fa-users"></i>
<p>
Admins
 <i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="add-admin.php" class="nav-link active">
<i class="fas fa-user-plus"></i>
<p>Add admins</p>
</a>
</li>
<li class="nav-item">
<a href="show-admins.php" class="nav-link">
<i class="fas fa-eye"></i>
<p>show admins</p>
</a>
</li>

</ul>


</li>
<li class="nav-item menu-open">

         
               <a href="#" class="nav-link active">
              <i class="fas fa-users"></i>
              <p>
                Tasks
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
  <li class="nav-item">
    <a href="add-task.php" class="nav-link active">
    <i class="fas fa-tasks"></i>
      <p>Add Tasks</p>
    </a>
  </li>
  <li class="nav-item">
    <a href="show-tasks.php" class="nav-link">
    <i class="fas fa-eye"></i>
      <p>Show Tasks</p>
    </a>
  </li>
</ul>


</li>
<li class="nav-item">
    <a href="adminhandlers/logout.php" class="nav-link">
    <i class="fas fa-sign-out-alt"></i>
      <p>logout</p>
    </a>
  </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>