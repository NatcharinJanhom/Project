<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include('head.php'); ?>    
  </head>
  <style>
    .sidebar .nav .nav-item.active > .nav-link .menu-title, .sidebar .nav .nav-item.active > .nav-link i {
    color:#57c7d4;
}
    .sidebar .nav:not(.sub-menu) > .nav-item:hover:not(.nav-profile) > .nav-link .menu-title {
    background: #57c7d4 !important;
    color: white;
    opacity: 0.9;
}
.sidebar .nav:not(.sub-menu) > .nav-item:hover:not(.nav-profile) > .nav-link {
    background: #57c7d4;
    color: white;
}
.sidebar .nav:not(.sub-menu) > .nav-item:hover:not(.nav-profile) > .nav-link .menu-icon, {
    color: white;
}

.sidebar .nav:not(.sub-menu) > .nav-item:hover:not(.nav-profile) > .nav-link .menu-icon {
    color: white;
}
  </style>
  <body class="sidebar-icon-only">
    <div class="container-scroller">
    <?php include('navbar2.php'); ?>   
      <div class="container-fluid page-body-wrapper">        
      <?php include('sidebar2.php'); ?>    
        <div class="main-panel">
            <div class="content-wrapper">
            <!-- หน้าเว็บ -->
            <div class="card">
            <div class="card-body">
            <h1>Upload File</h1>
	    <form name="form1" method="post"  enctype="multipart/form-data" action="show_data.php">
		<input type="file" name="fileUpload" class="form-control" required>
        <!--<input id="fileSelect" type="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" />-->
		</br>
		<button type="submit"  class="btn btn-success btn-block">Upload</button>
	    </form>
            </div>         
            </div>  
            </div>         

          
            <?php include('footer.php'); ?> 
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    </body>
</html>
