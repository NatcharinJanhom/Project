<!DOCTYPE html>
<html lang="en">
  <head>
      <?php include('head.php'); ?>
  </head>
  <style>
  .breadcrumb
{
        margin-bottom: 0rem;
}
.card .card-body.top
{
    padding: 0rem;
}
b{
  margin-right: 10px;
}
iframe{
        margin : auto;
        width: 100%;
        height: 630px;
}
.row .lightGallery .image-tile{
  cursor: all-scroll ;
  padding: 20px;
  margin: 0;
  border-radius: 5px;
}
.image-tile:hover{
  background-color: skyblue;
}

  </style>

  <body class="sidebar-icon-only">
    <div class="container-scroller">
    <?php include('navbar.php'); ?>   
      <div class="container-fluid page-body-wrapper">        
      <?php include('sidebar.php'); ?>    
        <div class="main-panel">
            <div class="content-wrapper">
            <!-- หน้าเว็บ -->
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card" >
                    <div class="card">
                      <div class="card-body top">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item">
                            <a href="showdt.php" style="text-decoration: none; color: #f12222;">Home</a>
                          </li>        
                          <li class="breadcrumb-item">
                            <a href="physical_search.php" style="text-decoration: none; color: #f12222;">Physical Search</a>
                          </li>
                          <li class="breadcrumb-item">
                            <a href="search_results.php" style="text-decoration: none; color: #f12222;">Search Result</a>
                          </li>
                          <li class="breadcrumb-item active" aria-current="page" >Accession Number : LE001</li>
                        </ol>
                      </nav>
                      </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Accession number : LE001</h4>
                        <ul class="nav nav-tabs tab-solid tab-solid-danger" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link" id="tab-5-1" data-toggle="tab" href="#details-5-1" role="tab" aria-controls="details-5-1" aria-selected="true">General details</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="tab-5-2" data-toggle="tab" href="#Physical-5-2" role="tab" aria-controls="Physical-5-2" aria-selected="false">Physical</a>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link" id="tab-5-3" data-toggle="tab" href="#Genome-5-3" role="tab" aria-controls="Genome-5-3" aria-selected="false">Genotype</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="tab-5-4" data-toggle="tab" href="#Disease-5-4" role="tab" aria-controls="Disease-5-4" aria-selected="false">Disease</a>
                          </li>
                          
                          <li class="nav-item">
                            <a class="nav-link" id="tab-5-6" data-toggle="tab" href="#Location-5-6" role="tab" aria-controls="Location-5-6" aria-selected="false">Location</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="tab-5-7" data-toggle="tab" href="#Germ-5-7" role="tab" aria-controls="Germ-5-7" aria-selected="false">Germplasm</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" id="tab-5-8" data-toggle="tab" href="#Gallery-5-8" role="tab" aria-controls="Gallery-5-8" aria-selected="false">Gallery</a>
                          </li>
                        </ul>
                        <div class="tab-content tab-content-solid">
                          <div class="tab-pane fade" id="details-5-1" role="tabpanel" aria-labelledby="tab-5-1">
                            <div class="row">

                              <div class="col-md-8" >
                                <p style="padding: 10px 100px 10px 20px; "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   Tomato plants are vines, initially decumbent, typically growing 180 cm (6 ft) or more above the ground 
                                  if supported, although erect bush varieties have been bred, generally 100 cm (3 ft) tall or shorter. Indeterminate types are "tender" perennials, dying annually in temperate climates (they are originally native to tropical highlands), although they can live up to three years in a greenhouse in some cases. Determinate types are annual in all climates.
                                Tomato plants are dicots, and grow as a series of branching stems, with a terminal bud at the tip that does the actual growing. When that tip eventually stops growing, whether because of pruning or flowering, lateral buds take over and grow into other, fully functional, vines.</p>
                              </div> 
                              <div class="col-md-4">
                                <img class="img-fluid w-100 rounded" src="theme/assets/images/tomato/tomato_01.jpg" alt="Sample Image"> 
                              </div>  
                            </div>
                          </div>

                <div class="tab-pane fade" id="Physical-5-2" role="tabpanel" aria-labelledby="tab-5-2">

                  <div class="accordion basic-accordion" id="accordion" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <i class="card-icon fa fa-tree"></i>Plant</a>
                          </h6>
                        </div>
                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-3">
                                <img class="img-fluid rounded resize" src="theme/assets/images/tomato/plant3.jpg" alt="image"> </div>
                              <div class="col-md-9">
                                <p><b>Plant size : </b> -</p>
                                <p><b>Stem pubescence density : </b> dense</p>
                                <p><b>Stem internode length : </b> 6.9</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="accordion basic-accordion" id="accordion" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              <i class="card-icon fa fa-leaf"></i>Leaf</a>
                          </h6>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-3">
                                <img class="img-fluid rounded" src="theme/assets/images/tomato/leaf1.jpg" alt="image"> </div>
                              <div class="col-md-9">
                                <p> <b>Number of leaves under 1st inflorescence :</b> Many</p>
                                <p><b>Leaf attitude : </b> semi-erect</p>
                                <p><b>Leaf type : </b>standard</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="accordion basic-accordion" id="accordion" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <i class="card-icon fa fa-sun-o"></i>Flower</a>
                          </h6>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-3">
                                <img class="img-fluid rounded" src="theme/assets/images/tomato/flower1.jpg" alt="image"> </div>
                              <div class="col-md-9">
                                <p><b>Number of days to flowering : </b> 34</p>
                                <p><b>Number of flowers : </b> 5-7</p>
                                <p><b>Corolla colour : </b> yellow</p>
                                <p><b>Style position : </b> same level as stamen</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="accordion basic-accordion" id="accordion" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="headingFour">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              <i class="card-icon mdi mdi-apple"></i>Fruit</a>
                          </h6>
                        </div>
                        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-3">
                                <img class="img-fluid rounded" src="theme/assets/images/tomato/loop8.jpg" alt="image"> </div>
                              <div class="col-md-9">
                                <p><b>Fruit weight : </b> 4.75</p>
                                <p><b>Fruit size : </b> very small</p>
                                <p><b>Exterior colour of mature fruit : </b> red</p>
                                <p><b>Predominant fruit shape : </b> rounded</p>
                                <p><b>Intensity of greenback : </b>none</p>
                                <p><b>Fruit shoulder shape : </b>flat</p>
                                <p><b>Easiness of fruit to detach from pedicel : </b>easy</p>
                                <p><b>Fruit blossom end shape : </b> flat</p>
                                <p><b>Shape of pistil scar : </b> dot</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="accordion basic-accordion" id="accordion" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="headingFive">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              <i class="card-icon fa fa-lemon-o"></i>Seed</a>
                          </h6>
                        </div>
                        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-3">
                                <img class="img-fluid rounded" src="theme/assets/images/tomato/seed1.jpg" alt="image"> </div>
                              <div class="col-md-9">
                                <p><b>Seed shape : </b></p>
                                <p><b>Seed colour : </b> brown</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>



                    <div class="accordion basic-accordion" id="accordion" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="headingSix">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                              <i class="card-icon fa fa-code-fork"></i>Other</a>
                          </h6>
                        </div>
                        <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-3">
                                <img class="img-fluid rounded" src="theme/assets/images/tomato/plant2.jpg" alt="image"> </div>
                              <div class="col-md-9">
                                <p><b>Hypocotyl colour : </b> purple</p>
                                <p><b>Hypocotyl colour intensity : </b> low</p>
                                <p><b>Hypocotyl pubescence : </b>present</p>
                                <p><b>Plant growth type : </b> indeterminate</p>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
          

                    </div>

                          <div class="tab-pane fade" id="Genome-5-3" role="tabpanel" aria-labelledby="tab-5-3"> ... </div>
                           <div class="tab-pane fade" id="Disease-5-4" role="tabpanel" aria-labelledby="tab-5-4"> ... </div>
                            <div class="tab-pane fade" id="Location-5-6" role="tabpanel" aria-labelledby="tab-5-6">
                                <div class="row">
                                  <div class="card-body">
                                        <iframe src="locationid.php"></iframe>
                                  </div>
                                </div>
                            </div>
                           <div class="tab-pane fade" id="Germ-5-7" role="tabpanel" aria-labelledby="tab-5-7"> ... </div>


                           <div class="tab-pane fade show active" id="Gallery-5-8" role="tabpanel" aria-labelledby="tab-5-8">

                            <?php 
                              if ($_SESSION['type'] == 'admin') {
                                # code...
                               /*  echo '<button style="margin-left:2.35%;" type="button" class="btn btn-dark btn-fw">
                                       <i class="fa fa-edit"></i> Edit </button>' ;
                                */


                              }
                             ?>

                  <div class="card-body">

                    <div id="fileuploader"><div class="ajax-upload-dragdrop" style="margin-left: 20px; vertical-align: top; width: 400px;"><div class="ajax-file-upload" style="position: relative; overflow: hidden; cursor: default;">Upload<form method="POST" action="YOUR_FILE_UPLOAD_URL" enctype="multipart/form-data" style="margin: 0px; padding: 0px;"><input type="file" id="ajax-upload-id-1540916542716" name="myfile[]" accept="*" multiple="" style="position: absolute; cursor: pointer; top: 0px; width: 100%; height: 100%; left: 0px; z-index: 100; opacity: 0;"></form></div><span><b>Clikc "Upload" button to add a image.</b></span></div><div></div></div>

                    <h5 style="margin-left: 25px; margin-top:30px;"><i class="fa fa-arrows" style="margin-right: 8px;"> </i> Drag and drop a image.</h5>
                              
                    <div id="dragula-left" class="row lightGallery">

                        <a class="image-tile">
                        <img class="s300x300" src="theme/assets/images/tomato/loop1.jpg" alt="image small"> </a>
                      <a  class="image-tile">
                        <img class="s300x300" src="theme/assets/images/tomato/loop10.jpg" alt="image small"> </a>
                      <a  class="image-tile">
                        <img class="s300x300" src="theme/assets/images/tomato/loop3.jpg" alt="image small"> </a>
                      <a  class="image-tile">
                        <img class="s300x300" src="theme/assets/images/tomato/loop4.jpg" alt="image small"> </a>
                      <a  class="image-tile">
                        <img class="s300x300" src="theme/assets/images/tomato/loop5.jpg" alt="image small"> </a>
                        <a  class="image-tile">
                        <img class="s300x300" src="theme/assets/images/tomato/loop6.jpg" alt="image small"> </a>
                      <a  class="image-tile">
                        <img class="s300x300" src="theme/assets/images/tomato/loop10.jpg" alt="image small"> </a>
                        <a  class="image-tile">
                        <img class="s300x300" src="theme/assets/images/tomato/loop2.jpg" alt="image small"> </a>
                      <a  class="image-tile">
                        <img class="s300x300" src="theme/assets/images/tomato/loop11.jpg" alt="image small"> </a>
                      <a  class="image-tile">
                        <img class="s300x300" src="theme/assets/images/tomato/loop1.jpg" alt="image small"> </a>

                      </div>

                  </div>
  
                  <a href="detail.php" style="margin-right: 50px; margin-left: 10px;" role="button" class="btn btn-secondary pull-right"><i></i> Cancel </a>
                  <button type="button" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Save </button>


              </div>



                        </div>
                      </div>
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
    

    </body>
</html>
<script src="theme/assets/js/shared/dragula.js"></script>