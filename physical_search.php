<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('head.php'); ?>
</head>
<style>
  .card-body h5 {
    margin-bottom: 0;
    color:#ff0017;
    font-size: 1.2rem;
    font-weight: 600;
  } 
  .card.item {
     border: 1px solid #ff0017;
    
  }
  .accordion .card:first-of-type,
  .accordion .card:not(:first-of-type):not(:last-of-type)
  {
    border-bottom: 1px solid #ff0017 ;
    border-bottom-right-radius: 4px ;
    border-bottom-left-radius: 4px ;
    border-top-right-radius:4px;
    border-top-left-radius:4px;
  }
  .accordion .card .card-header a
  {
    font-size: 1.2rem;
    color:#ff0017;
  }
  .accordion.basic-accordion .card .card-header a[aria-expanded="true"] ,
  .accordion.basic-accordion .card .card-header a[aria-expanded="false"] 
  {
    background: none;

  }
  .accordion .card .card-header a:before {
    color: #ff0017;
  }
  .accordion .card .card-header
  {
    border-bottom: 1px solid #ff0017;
  }
  .form-control
  {
    font-size: 0.875rem;
    margin-bottom:10px;
    border-color:#8ba2b5; 
  }
  .btn
  {
    background: none;   
    background-size: cover;
    background-position: center; 
    max-width: 200px;
    max-height:100px;
    width:40%;
    height:20%;   
    cursor: pointer;  
    font-size: 25px; 
  }
  .btn1
  {     
    position: fixed;
    top: 75%;
    right: -10px;    
    margin:auto;
    -webkit-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    z-index: 1;

    text-align: center;
  }
  .btn2
  {   
    position: fixed;
    top: 65%;
    right: -10px;    
    margin:auto;
    -webkit-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    z-index: 1;      
  }
  .btn-pill-left, .btn-pill-right {
    width: 1000px;
    height: 75px;
    opacity: 0.5;
}

.btn-pill-left {
    border-radius: 500px 0 0 500px;
}
.btn-primary {
    color: #fff;
    background-color: black;
    border-color: black;
    -webkit-box-shadow: none;
    box-shadow: none;
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
            <div class="col-lg-12 grid-margin">
              <div class="">
                <div class="card-body">
                  <h5>Physical Search</h5>
                </div>
              </div>
            </div>
          </div>
          <form action="search_results.php" method="post">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <div class="accordion basic-accordion" id="accordion" role="tablist">                                          
                      <div class="card item">
                        <div class="card-header" role="tab" id="headingThree">
                          <h6 class="mb-0">
                            <a class="collapsed  " data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            <i class="card-icon mdi mdi-tree"></i>Plant</a>
                          </h6>
                        </div>
                        <div id="collapseThree" class="collapse show" role="tabpanel" aria-labelledby="headingThree">
                          <div class="card-body">
                            <!--
                              <div class="row">
                              <div class="col-md-6">
                                <p>Plant size</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control" name="plant_size">
                                <option value="">---- select ----</option>
                                <option value="small">Small</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="large">Large</option>                                
                              </select>
                              </div>
                            </div>
                            -->
                            <div class="row">
                              <div class="col-md-6">
                                <p>Stem pubescence density</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control" name="stem_pubescence_density">
                                <option value="">---- select ----</option>
                                <option value="all">---- All ----</option>
                                <option value="dense">dense </option>
                                <option value"intermediate">intermediate</option>                                                    
                              </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Stem internode length (cm)</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control" name="stem_internode_length">
                                <option value="">---- select ----</option>
                                <option value="all">---- All ----</option>
                                <option value="short">short ( < 7 )</option>
                                <option value="intermediate">intermediate ( 7-8 )</option>  
                                <option value="long">long ( > 8 )</option>                                                     
                              </select>
                              </div>
                            </div>                           
                          </div>
                        </div>
                      </div>
                      <div class="card item">
                        <div class="card-header" role="tab" id="headingFour">
                          <h6 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="headingFour">
                            <i class="card-icon mdi mdi-leaf"></i>Leaf</a>
                          </h6>
                        </div>
                        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
                          <div class="card-body">
                           <div class="row">
                              <div class="col-md-6">
                                <p>Number of leaves under 1st inflorescence</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>few </option>
                                <option>many</option>                                                                                   
                              </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Leaf attitude</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>dense </option>  
                                <option>intermediate</option>                                                                                                              
                                <option>sparse</option>  
                              </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Leaf type</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>standard</option>  
                                <option>peruvianum</option>                                                                                                              
                                <option>potato leaf type</option>  
                                <option>pimpinellifolium</option>  
                              </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card item">
                        <div class="card-header" role="tab" id="headingFive">
                          <h6 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="headingFive">
                            <i class="card-icon mdi mdi-flower"></i>Flower</a>
                          </h6>
                        </div>
                        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
                          <div class="card-body">
                          <div class="row">
                              <div class="col-md-6">
                                <p>Number of days to flowering</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>< 35 Day</option>  
                                <option>> 35 Day</option>                                                                                                                                             
                              </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Number of flowers</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>5</option>  
                                <option>6</option>   
                                <option>7 or more</option>                                                                                                                                             
                              </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Corolla colour</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>yellow</option>                                                                                                                                                                           
                              </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Style position</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>inserted</option>  
                                <option>same level as stamen stamen</option>                                                                                                                                                                           
                                <option>slightly exserted</option>  
                                <option>highly exserted</option>  
                                <option>same level as stamen</option>  
                              </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card item">
                        <div class="card-header" role="tab" id="headingSix">
                          <h6 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="headingSix">
                            <i class="card-icon mdi mdi-food-apple"></i>Fruit</a>
                          </h6>
                        </div>
                        <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
                          <div class="card-body">
                          <div class="row">
                              <div class="col-md-6">
                                <p>Fruit weight (g)</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>< 30</option> 
                                <option>30-50</option> 
                                <option>> 50</option>                                                                                                                                                                           
                              </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Fruit size</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>medium </option>
                                <option>small </option>                                
                                <option>very small</option>                                                                                                                                                                           
                              </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Exterior color of mature fruit</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>red</option>
                                <option>orange red</option>                                
                                <option>pink</option>                                                                                                                                                                           
                              </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Predominant fruit shape</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>cylindrical </option>
                                <option>flattened </option>                                                                
                                <option>heart-shaped </option>                                                                                                                                                                           
                                <option>high-round </option>           
                                <option>lengthened cylindrical </option>           
                                <option>pear-shaped </option>           
                                <option>plum-shaped   </option>               
                              </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Intensity of greenback</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>intermediate</option>
                                <option>none</option>   
                                <option>slight</option>  
                                <option>strong</option>                                                                                                         
                              </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Fruit shoulder shape</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>flat</option>
                                <option>moderately depressed</option>      
                                <option>slightly depressed</option>                                                                                                 
                              </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Easiness of fruit to detach from the pedicel</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>easy</option>
                                <option>intermediate</option>      
                                <option>difficult</option>                                                                                                 
                              </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Easiness of fruit wall to be peeled</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>easy</option>
                                <option>intermediate</option>      
                                <option>difficult</option>                                                                                                 
                              </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Fruit blossom end shape</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>flat</option>
                                <option>indented</option>      
                                <option>pointed</option>                                                                                                 
                              </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Shape of pistil scar</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>dot</option>
                                <option>linear</option>                                                                                                                         
                              </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>                   
                      <div class="card item">
                        <div class="card-header" role="tab" id="headingSeven">
                          <h6 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="headingSeven">
                            <i class="card-icon mdi mdi-google-circles-communities"></i>Seed</a>
                          </h6>
                        </div>
                        <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven">
                          <div class="card-body">
                          <div class="row">
                              <div class="col-md-6">
                                <p>Seed shape</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>globular</option>
                                <option>ovate</option>                                                                                                                         
                              </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Seed colour</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>brown</option>
                                <option>dark yellow</option>    
                                <option>light yellow</option>                                                                                                                         
                              </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card item">
                        <div class="card-header" role="tab" id="headingOne">
                          <h6 class="mb-0 " >
                            <a class="" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <i class="card-icon mdi mdi-dots-horizontal"></i>Other</a>
                          </h6>
                        </div>
                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-6">
                                <p>Hypocotyl color</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>1/2 purple from the base</option>
                                <option>1/4 purple from the base</option>
                                <option>green</option>
                                <option>purple</option>
                                <option>bluesky</option>
                              </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Hypocotyl colour intensity</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>intermediate</option>
                                <option>low</option>                                
                              </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Hypocotyl pubescence</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>present</option>                              
                              </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Plant growth type</p>
                              </div>
                              <div class="col-md-6">
                              <select class="form-control">
                                <option>---- select ----</option>
                                <option>indeterminate </option>    
                                <option>determinate  </option>     
                                <option>semi-determinate </option>                               
                                <option>intermediate </option>     
                              </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn1 btn-round btn-primary btn-pill-left">Search</button>
          <button type="button" class="btn btn2 btn-round btn-primary btn-pill-left"">Clear</button>
          </form>
        </div>


        <?php include('footer.php'); ?>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
</body>

</html>
<script>
  $("#collapseThree-5").click(function(){
    $("#collapseThree-5").removeClass("show");
  });
</script>