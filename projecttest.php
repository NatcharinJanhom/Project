<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include('head.php'); ?>  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  </head>
  <style>
      a
      {
    color: #6c757d;
      }
  </style>
  <body class="sidebar-icon-only">
    <div class="container-scroller">
    <?php include('navbar.php'); ?>   
      <div class="container-fluid page-body-wrapper">        
        <?php include('sidebar.php'); ?>    
             <div class="main-panel">
                    <div class="content-wrapper">
                <div class="container">
            <div>
        </div>
    </div>
    
    <div id="showD"  class="container" > 
    
        <div class="row">
    
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h1>Admin <a href='createchili.php'><i class="fa fa-plus"></i></a></h1><BR>   
                        <div class = 'card'>
                            <div class="card-body">
                                <a href=''><i class="fa fa-arrow-up"></i></a>
                                <a href=''><i class="fa fa-arrow-down"></i></a>
                                <a href='CreateDetail.php'><i class="fa fa-plus"></i></a>
                                <a href=''><i class="fa fa-cog"></i></a>
                                <a href=''><i class="fa fa-trash"></i></a>
                                <a href=''><i class="fa fa-eye-slash"></i></a>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>   
        
        <div class="row">
    
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class = 'card'>
                            <div class="card-body">
                            <a href=''><i class="fa fa-arrow-up"></i></a>
                            <a href=''><i class="fa fa-arrow-down"></i></a>
                            <a href='CreateDetail.php'><i class="fa fa-plus"></i></a>
                            <a href=''><i class="fa fa-cog"></i></a>
                            <a href=''><i class="fa fa-trash"></i></a>
                            <a href=''><i class="fa fa-eye-slash"></i></a>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>      
        
        <form >
        <div class="card">
        <div class="card-body">
          <h4 class="card-title">Drag and drop files</h4>
          <div class="dropify-wrapper">
            <div class="dropify-message">
              <span class="file-icon"></span>
              <p>Drag and drop a file here or click</p>
              <p class="dropify-error">Ooops, something wrong appended.</p>
            </div>
            <div class="dropify-loader" style="display: none;"></div>
            <div class="dropify-errors-container">
              <ul></ul>
            </div>
            <input type="file" class="dropify" data-height="300" >
            <button type="button" class="dropify-clear">Remove</button>
            <div class="dropify-preview">
              <span class="dropify-render"></span>
              <div class="dropify-infos">
                <div class="dropify-infos-inner">
                  <p class="dropify-filename">
                    <span class="file-icon"></span>
                    <span class="dropify-filename-inner"></span>
                  </p>
                  <p class="dropify-infos-message">Drag and drop or click to replace</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form> 
            <?php include('footer.php'); ?> 
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    </body>
</html>
