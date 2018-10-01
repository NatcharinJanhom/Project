<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php'); ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
</head>
<style>
    a {
        color: #6c757d;
    }

    .sli {
        align-content: center;
        max-width: 250px;
        max-height: 250px;
        width: 100%;
        height: 100%;
    }
    .sa {
        align-content: center;
        max-width: 150px;
        max-height: 150px;
        width: 100%;
        height: 100%;
    }

</style>

<body class="sidebar-icon-only">
    <div class="container-scroller">
        <?php include('navbar.php'); ?>
        <div class="container-fluid page-body-wrapper">
            <?php include('sidebar.php'); ?>
            <div class="main-panel">
                <div class="content-wrapper">
                   
                <a href="userpage.php" class="button btn btn-primary">User UI</a>
                   
                    <div id="showD" class="container">

                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">

                                        <h3 align='center'>Tomato detail</h3>
                                        <i class="fas fa-arrows-alt"></i>
                                        <i class="far fa-edit"></i>
                                        <i class="fas fa-trash-alt"></i>

                                    </div>
                                </div>
                            </div>
                        </div>
               <!-- <div class="row">
                    <div class="col-md-6 h-100">
                        <div class="bg-light p-4">
                          <h6 class="card-title">Team A</h6>
                          <div id="profile-list-left" class="py-2">
                            
                            <div class="card rounded mb-2">
                              <div class="card-body p-3">
                                <div class="media">
                                  <img src="pic/t2.jpg" alt="image" class="img-sm mr-3 rounded-circle">
                                  <div class="media-body">
                                    <h6 class="mb-1">Jacob march</h6>
                                    <p class="mb-0 text-muted"> Designer </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card rounded mb-2">
                              <div class="card-body p-3">
                                <div class="media">
                                  <img src="pic/t2.jpg" alt="image" class="img-sm mr-3 rounded-circle">
                                  <div class="media-body">
                                    <h6 class="mb-1">Rebecca young</h6>
                                    <p class="mb-0 text-muted"> Software engineer </p>
                                  </div>
                                </div>
                              </div>
                            </div><div class="card rounded mb-2">
                              <div class="card-body p-3">
                                <div class="media">
                                  <img src="pic/t2.jpg" alt="image" class="img-sm mr-3 rounded-circle">
                                  <div class="media-body">
                                    <h6 class="mb-1">Catherine</h6>
                                    <p class="mb-0 text-muted"> Tester </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card rounded mb-2">
                              <div class="card-body p-3">
                                <div class="media">
                                  <img src="pic/t2.jpg" alt="image" class="img-sm mr-3 rounded-circle">
                                  <div class="media-body">
                                    <h6 class="mb-1">Thomas Cook</h6>
                                    <p class="mb-0 text-muted"> Developer </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 h-100">
                        <div class="bg-light p-4">
                          <h6 class="card-title">Team B</h6>
                          <div id="profile-list-right" class="py-2">
                            <div class="card rounded mb-2">
                              <div class="card-body p-3">
                                <div class="media">
                                  <img src="pic/t2.jpg" alt="image" class="img-sm mr-3 rounded-circle">
                                  <div class="media-body">
                                    <h6 class="mb-1">Keto Philip</h6>
                                    <p class="mb-0 text-muted"> Business Analyst </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card rounded mb-2">
                              <div class="card-body p-3">
                                <div class="media">
                                  <img src="pic/t2.jpg" alt="image" class="img-sm mr-3 rounded-circle">
                                  <div class="media-body">
                                    <h6 class="mb-1">Jacob Stephen</h6>
                                    <p class="mb-0 text-muted"> Tester </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card rounded mb-2">
                              <div class="card-body p-3">
                                <div class="media">
                                  <img src="pic/t2.jpg" alt="image" class="img-sm mr-3 rounded-circle">
                                  <div class="media-body">
                                    <h6 class="mb-1">March Creg</h6>
                                    <p class="mb-0 text-muted"> Developer </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card rounded mb-2">
                              <div class="card-body p-3">
                                <div class="media">
                                  <img src="pic/t2.jpg" alt="image" class="img-sm mr-3 rounded-circle">
                                  <div class="media-body">
                                    <h6 class="mb-1">Peter Beckham</h6>
                                    <p class="mb-0 text-muted"> Designer </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>!-->
                       <div class="row">
                        <div class="col-md-12 h-100">
                          <div class="bg-light p-4">
                            
                            <div id="profile-list-left" class="py-2">
                              
                              <div class="card rounded mb-2">
                                <div class="card-body p-3">
                                  <div class="media">
                                                    <div class="col-md-4">
                                                        <img class="sli img-fluid w-100 rounded" src="pic/t2.jpg" alt="Sample Image">
                                                    </div>
                                  <div class="media-body">
                                           
                                                    
                                                    <div class="col-md-8">
                                                        <p style="padding: 10px 100px 10px 20px; ">
                                                           A
                                                        </p>
                                                    </div>
                                                    
                                                
                                            
                                        <br>
                                        <i class="fas fa-arrows-alt"></i>
                                        <i class="far fa-edit"></i>
                                        <i class="fas fa-trash-alt"></i>
                                    </div>
                                </div>
                                </div>
                            </div>
                        
                              
                              <div class="card rounded mb-2">
                                <div class="card-body p-3">
                                  <div class="media">
                                                    <div class="col-md-4">
                                                        <img class="sli img-fluid w-100 rounded" src="pic/t2.jpg" alt="Sample Image">
                                                    </div>
                                  <div class="media-body">
                                           
                                                    
                                                    <div class="col-md-8">
                                                        <p style="padding: 10px 100px 10px 20px; ">
                                                            B
                                                        </p>
                                                    </div>
                                        <br>
                                        <i class="fas fa-arrows-alt"></i>
                                        <i class="far fa-edit"></i>
                                        <i class="fas fa-trash-alt"></i>                               
                                </div>
                                </div>
                            </div>
                        </div>                    
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h2>Tomato picture</h2>
                                        <BR>
                                        <div class="row">

                                            <div class="img-card col-xl-3 ">
                                                <div class="card card-pic1">
                                                    <div class="card-body card-pic1">
                                                        <div class="clearfix">
                                                            <center>
                                                                <img class="sa img-fluid w-100 rounded" src="pic/t3.jpg" alt="Sample Image">
                                                            </center>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="img-card col-xl-3  ">
                                                <div class="card card-pic1">
                                                    <div class="card-body card-pic1">
                                                        <div class="clearfix">
                                                            <center>
                                                                <img class="sa img-fluid w-100 rounded" src="pic/t3.jpg" alt="Sample Image">
                                                            </center>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="img-card col-xl-3 ">
                                                <div class="card card-pic1">
                                                    <div class="card-body card-pic1">
                                                        <div class="clearfix">
                                                            <center>
                                                                <img class="sa img-fluid w-100 rounded" src="pic/t3.jpg" alt="Sample Image">
                                                            </center>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="img-card col-xl-3  ">
                                                <div class="card card-pic1">
                                                    <div class="card-body card-pic1">
                                                        <div class="clearfix">
                                                            <center>
                                                                <img class="sa img-fluid w-100 rounded" src="pic/t3.jpg" alt="Sample Image">
                                                            </center>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div><br>
                                        <i class="fas fa-arrows-alt"></i>
                                        <i class="far fa-edit"></i>
                                        <i class="fas fa-trash-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php include('footer.php'); ?>
                    </div>
                    <!-- main-panel ends -->
                </div>
                <!-- page-body-wrapper ends -->
            </div>


<script src="theme/assets/js/shared/dragula.js"></script>
</body>
</html>