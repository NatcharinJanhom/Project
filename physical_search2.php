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
  .form-control.search
  {
    border-color:#ff0017; 
  }
  @media only screen and (max-width: 1920px) {
    .btn1
      {   
        
        position: fixed;
        top: 78%;
        right: -10px;    
        margin:auto;
        z-index: 1;
        text-align: center;
      }
      .btn2
      {   
        position: fixed;
        top: 85%;
        right: -10px;    
        margin:auto;
        z-index: 1;   
        text-align: center;
      }
  }
  @media only screen and (max-width: 1366px) {
    .btn1
      {   
        
        position: fixed;
        top: 78%;
        right: -10px;    
        margin:auto;
        z-index: 1;
        text-align: center;
      }
      .btn2
      {   
        position: fixed;
        top: 85%;
        right: -10px;    
        margin:auto;
        z-index: 1;   
        text-align: center;
      }
  }
  @media only screen and (max-width: 1024px) {
    .btn1
      {   
        position: fixed;
        top: 78%;
        right: -10px;    
        margin:auto;
        z-index: 1;
        text-align: center;
      }
      .btn2
      {   
        position: fixed;
        top: 85%;
        right: -10px;    
        margin:auto;
        z-index: 1;   
        text-align: center;
      }
  }


  @media only screen and (max-width: 768px) {
    .btn1
      {   
        
        position: fixed;
        top: 78%;
        right: -10px;    
        margin:auto;
        z-index: 1;
        text-align: center;
      }
      .btn2
      {   
        position: fixed;
        top: 85%;
        right: -10px;    
        margin:auto;
        z-index: 1;   
        text-align: center;
      }
  }
  @media only screen and (max-width: 420px) {
    .btn1
      {   
        
        position: fixed;
        top: 78%;
        right: -10px;    
        margin:auto;
        z-index: 1;
        text-align: center;
      }
      .btn2
      {   
        position: fixed;
        top: 85%;
        right: -10px;    
        margin:auto;
        z-index: 1;   
        text-align: center;
      }
  }
 
 
  
 

  .btn-fix
  {
    background: none;   
    max-width: 180px;
    max-height:6.5%;
    width:40%;
    height:20%;   
    cursor: pointer;  
    font-size: 23px; 
    border-radius: 500px 0 0 500px;
    opacity: 0.9;
  }
.btn-search {
    color: #2196f3;
    background-color: #fff;
    border-color: #2196f3;

}
.btn-clear{
    color:   #8ba2b5;
    background-color: #fff;
    border-color: #8ba2b5;

}
.btn-search:hover
{
  opacity: 0.9;
  color: #fff;
    background-color: #0c83e2;
    border-color: #0c7cd5;
}
.btn-clear:hover
{
  opacity: 1;
  color: #fff;
    background-color: #8ba2b5;
    border-color: #8ba2b5;
}
.static
{
  padding-left:10px;
  color: #212529;
}

.text-right
    {
        text-align:right;
    }
    .modal-dialog
    {
      width:60%;
      height:30%;
  
    }
    label
    {
      padding-right:1.75rem;
    }
    .pt-4, .py-4 {
    padding-top: 0.01rem !important;
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
                <div class="row">
                <div class="col-lg-8">
                </div>
                <div class="col-lg-4">
                <div class="input-group">
										<input type="text" name="accession_number" id="as_search" class="form-control search" placeholder="Accession number">										
                    <div class="input-group-append text-white">
           <button type="submit" class="btn  btn-danger" type="button"><i class="text-white fa fa-search"></i></button>
          </div>
                </div>
                </div>
                </div>
                <br/>
                <div class="accordion basic-accordion" id="accordion" role="tablist">  
                <div class="card item">
                        <div class="card-header" role="tab" id="headingNine">
                          <h6 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapseNine" aria-expanded="true" aria-controls="headingSix">
                            <i class="card-icon fa fa-medkit"></i>Disease</a>
                          </h6>
                        </div>   
                        <div id="collapseNine" class="collapse show" role="tabpanel" aria-labelledby="headingNine">
                          <div class="card-body">   
                          </div>   
                        </div>   
                </div>   
                <div class="card item">
                        <div class="card-header" role="tab" id="headingSix">
                          <h6 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="true" aria-controls="headingSix">
                            <i class="card-icon mdi mdi-food-apple"></i>Fruit</a>
                          </h6>
                        </div>
                        <div id="collapseSix" class="collapse show" role="tabpanel" aria-labelledby="headingSix">
                          <div class="card-body">
                          <div class="row">
                              <div class="col-md-6">
                                <p>Fruit weight (g)</p>
                              </div>


                              <div class="col-md-6">
                              <div class="mt-5 pt-4 w-75 mx-auto pt-5">
                                    <div id="soft-limit-3" name="fruit_weight_g[]" class="ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal" value='0-100'>
                                    </div>
                                </div>

      <!-- main-panel ends<input type='checkbox' class='form-check-inline' name="fruit_weight_g[]" value='< 30'>
                              <label>< 30</label>
                              <input type='checkbox' class='form-check-inline' name="fruit_weight_g[]" value='30-50'>
                              <label>30-50</label>
                              <input type='checkbox' class='form-check-inline' name="fruit_weight_g[]" value='> 50'>
                              <label>> 50</label> 
                             -->
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Fruit size <span><a class='static' href="#" data-cha="Fruit size" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="fruit_size[]" value='medium'>
                              <label>medium</label> 
                              <input type='checkbox' class='form-check-inline' name="fruit_size[]" value='small'>
                              <label>small</label> 
                              <input type='checkbox' class='form-check-inline' name="fruit_size[]" value='very small'>
                              <label>very small</label>                               
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Exterior color of mature fruit <span><a class='static' href="#" data-cha="Exterior colour of mature fruit" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' >
                              <label>red</label>     
                              <input type='checkbox' class='form-check-inline' >
                              <label>orange red</label>     
                              <input type='checkbox' class='form-check-inline' >
                              <label>pink</label>                             
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Predominant fruit shape <span><a class='static' href="#" data-cha="Predominant fruit shape" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' >
                              <label>cylindrical</label>     
                              <input type='checkbox' class='form-check-inline' >
                              <label>flattened</label>     
                              <input type='checkbox' class='form-check-inline' >
                              <label>heart-shaped</label>  <br/>     
                              <input type='checkbox' class='form-check-inline' >
                              <label>high-round</label>   
                              <input type='checkbox' class='form-check-inline' >
                              <label>lengthened cylindrical</label>     
                              <input type='checkbox' class='form-check-inline' >
                              <label>pear-shaped</label>    <br/>
                              <input type='checkbox' class='form-check-inline' >
                              <label>plum-shaped</label>                                
                              </div>
                            </div><br/>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Intensity of greenback <span><a class='static' href="#" data-cha="Intensity of greenback" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' >
                              <label>intermediate</label>   
                              <input type='checkbox' class='form-check-inline' >
                              <label>none</label>   
                              <input type='checkbox' class='form-check-inline' >
                              <label>slight</label>   
                              <input type='checkbox' class='form-check-inline' >
                              <label>strong</label>                                 
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Fruit shoulder shape <span><a class='static' href="#" data-cha="Fruit shoulder shape" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">                           
                              <input type='checkbox' class='form-check-inline' >
                              <label>flat</label>  
                              <input type='checkbox' class='form-check-inline' >
                              <label>moderately depressed</label>  
                              <input type='checkbox' class='form-check-inline' >
                              <label>slightly depressed</label>                                 
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Easiness of fruit to detach from the pedicel <span><a class='static' href="#" data-cha="Easiness of fruit to detach from pedicel" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' >
                              <label>easy</label>  
                              <input type='checkbox' class='form-check-inline' >
                              <label>intermediate</label>  
                              <input type='checkbox' class='form-check-inline' >
                              <label>difficult</label>                              
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Easiness of fruit wall to be peeled <span><a class='static' href="#" data-cha="Easiness of fruit wall (skin) to be peeled" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' >
                              <label>easy</label>    
                              <input type='checkbox' class='form-check-inline' >
                              <label>intermediate</label>    
                              <input type='checkbox' class='form-check-inline' >
                              <label>difficult</label>                                                              
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Fruit blossom end shape <span><a class='static' href="#" data-cha="Fruit blossom end shape" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' >
                              <label>flat</label>        
                              <input type='checkbox' class='form-check-inline' >
                              <label>indented</label>        
                              <input type='checkbox' class='form-check-inline' >
                              <label>pointed</label>                             
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Shape of pistil scar <span><a class='static' href="#" data-cha="Shape of pistil scar" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' >
                              <label>dot</label> 
                              <input type='checkbox' class='form-check-inline' >
                              <label>linear</label>                              
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>                                                   
                      <div class="card item">
                        <div class="card-header" role="tab" id="headingThree">
                          <h6 class="mb-0">
                            <a class="collapsed  " data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="card-icon mdi mdi-tree"></i>Plant</a>
                          </h6>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
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
                              <div class="col-md-4">
                                <p>Stem pubescence density<span><a class='static' href="#" data-cha="Stem pubescence density" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-8">
                              <input type='checkbox' class='form-check-inline' name="stem_pubescence_density[]" value='dense'>
                              <label>dense</label>
                              <input type='checkbox' class='form-check-inline' name="stem_pubescence_density[]" value='intermediate'>
                              <label>intermediate</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4">
                                <p>Stem internode length (cm)</p>
                              </div>
                              <div class="col-md-8">
                              <input type='checkbox' class='form-check-inline' name="stem_internode_length[]" value='short'>
                              <label>short ( < 7 )</label>
                              <input type='checkbox' class='form-check-inline' name="stem_internode_length[]" value='intermediate'>
                              <label>intermediate ( 7-8 )</label>
                              <input type='checkbox' class='form-check-inline' name="stem_internode_length[]" value='long'>
                              <label>long ( > 8 )</label>
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
                                <p>Number of leaves under 1st inflorescence <span><a class='static' href="#" data-cha="Number of leaves under 1st inflorescence" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="number_of_leaves_under_1st_inflorescence[]" value='2'>
                              <label>many</label>
                              <input type='checkbox' class='form-check-inline' name="number_of_leaves_under_1st_inflorescence[]" value='1'>
                              <label>few</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Leaf attitude <span><a class='static' href="#" data-cha="Leaf attitude" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="leaf_attitude[]" value='1'>
                              <label>semi-erect</label>
                              <input type='checkbox' class='form-check-inline' name="leaf_attitude[]" value='2'>
                              <label>horizontal</label>                                              
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Leaf type <span><a class='static' href="#" data-cha="Leaf type" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="leaf_type[]" value='1'>
                              <label>standard</label> 
                              <input type='checkbox' class='form-check-inline' name="leaf_type[]" value='2'>
                              <label>peruvianum</label> 
                              <input type='checkbox' class='form-check-inline' name="leaf_type[]" value='3'>
                              <label>potato leaf type</label> 
                              <br/>
                              <input type='checkbox' class='form-check-inline' name="leaf_type[]" value='4'>
                              <label>pimpinellifolium</label>
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
                              <input type='checkbox' class='form-check-inline' name="number_of_days_to_flowering[]" value='< 35'>
                              <label>< 35 Day</label>
                              <input type='checkbox' class='form-check-inline' name="number_of_days_to_flowering[]" value='>= 35'>
                              <label>>= 35 Day</label>                              
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Number of flowers</p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="number_of_flowers[]" value='5'>
                              <label>5</label>  
                              <input type='checkbox' class='form-check-inline' name="number_of_flowers[]" value='6'>
                              <label>6</label>  
                              <input type='checkbox' class='form-check-inline' name="number_of_flowers[]" value='>=7'>
                              <label>>= 7</label>  
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Corolla colour</p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="corolla_colour[]" value='yellow'>
                              <label>yellow</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Style position</p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="style_position[]" value='inserted'>
                              <label>inserted</label>
                              <input type='checkbox' class='form-check-inline' name="style_position[]" value='same level as stamen stamen'>
                              <label>same level as stamen stamen</label><br/> 
                              <input type='checkbox' class='form-check-inline' name="style_position[]" value='slightly exserted'>
                              <label> slightly exserted</label>                          
                              <input type='checkbox' class='form-check-inline' name="style_position[]" value='highly exserted'>
                              <label>highly exserted</label><br/> 
                              <input type='checkbox' class='form-check-inline' name="style_position[]" value='same level as stamen'>
                              <label>same level as stamen</label>
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
                              <input type='checkbox' class='form-check-inline' >
                              <label>globular</label>    
                              <input type='checkbox' class='form-check-inline' >
                              <label>ovate</label>                                  
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Seed colour</p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' >
                              <label>brown</label>     
                              <input type='checkbox' class='form-check-inline' >
                              <label>dark yellow</label>     
                              <input type='checkbox' class='form-check-inline' >
                              <label>light yellow</label>                               
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
                              <input type='checkbox' class='form-check-inline' >
                              <label>1/2 purple from the base</label>  
                              <input type='checkbox' class='form-check-inline' >
                              <label>1/4 purple from the base</label>  <br/>
                              <input type='checkbox' class='form-check-inline' >
                              <label>green</label>  
                              <input type='checkbox' class='form-check-inline' >
                              <label>purple</label>  
                              <input type='checkbox' class='form-check-inline' >
                              <label>bluesky</label>                                
                              </div>
                            </div>
                            <br/>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Hypocotyl colour intensity</p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' >
                              <label>intermediate</label>      
                              <input type='checkbox' class='form-check-inline' >
                              <label>low</label>                                    
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Hypocotyl pubescence</p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' >
                              <label>present</label>                                
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Plant growth type</p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' >
                              <label>indeterminate</label>           
                              <input type='checkbox' class='form-check-inline' >
                              <label>determinate</label>           
                              <input type='checkbox' class='form-check-inline' >
                              <label>semi-determinate</label>   <br/>         
                              <input type='checkbox' class='form-check-inline' >
                              <label>intermediate</label>                             
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
          <button type="submit" class="btn-fix btn1 btn-round btn-search">Search</button>
          <button type="button" class="btn-fix btn2 btn-round btn-clear">Clear</button>
          </form>
        </div>
        <div id="static_modal" class="modal fade">
        <div class="modal-dialog modal-lg">
      <div class="modal-content">
    
        <div class="modal-body">
        <div class="row">
        <div class="col-lg-9">
        <h4 id="head"></h4>
        </div>
        <div class="col-lg-3">
        <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        </div>
        <div class="chart-data"> 
        <canvas id="myChart1"></canvas><br/>
        <canvas id="myChart2"></canvas><br/>
        <div id="table-data">
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
<script>
  $("#collapseThree-5").click(function(){
    $("#collapseThree-5").removeClass("show");
  });
</script>
<script>
    $(document).ready(function() {
        $(".static").click(function() {
            $("#myChart1").remove();
            $("#myChart2").remove();
            $("#head").empty();
            $('.chart-data').append('<canvas id="myChart1"><canvas>');
            $('#myChart1').after('<canvas id="myChart2"><canvas>');
            var input_cha = $(this).attr('data-cha');  
            $("#head").append(input_cha);
            if (input_cha != '') {
                $.ajax({
                    url: "ajaxChart.php",
                    method: "GET",
                    data: { cha: input_cha },
                    success: function(data) {
                        //console.log(data);
                        //document.getElementById('title').innerHTML = 
                        var name = [];
                        var count = [];
                        var coloR = [];
                        var dynamicColors = function() {
                        var r = Math.floor(Math.random() * 255);
                        var g = Math.floor(Math.random() * 255);
                        var b = Math.floor(Math.random() * 255);
                        return "rgb(" + r + "," + g + "," + b + ")";
                        };

                        for (var i in data) {
                            name.push(data[i].cha);
                            count.push(data[i].count_sum);
                            coloR.push(dynamicColors());
                        }
                        var chartdata = {
                            labels: name,
                            datasets: [{
                                label: 'จำนวน',
                                backgroundColor: 'rgba(247,100,88)',
                                borderColor: 'rgba(247,100,88)',
                                hoverBackgroundColor: 'rgba(255,98,88)',
                                hoverBorderColor: 'rgba(255,98,88)',
                                data: count
                            }]
                        };
                        var ctx = document.getElementById("myChart1");
                        ctx.height = 80;
                        var barGraph = new Chart(ctx, {
                            type: 'bar',
                            data: chartdata,
                            options: {
                                scales: {
                                        xAxes: [{
                                                barPercentage: 1,
                                                categoryPercentage: 0.3 / 10 * chartdata.datasets[0].data.length
                                                }],
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true,
                                            min: 0,
                                          
                                        }
                                    }]
                                }
                            
                            }
                        });

                        var chartdata = {
                            labels: name,
                            datasets: [{
                                label: 'จำนวน',
                                backgroundColor:[
                                    'rgba(30,136,229)',
                                    'rgba(67,160,71)',
                                    'rgba(253,216,53)',
                                    'rgba(244,81,30)',
                                    'rgba(109,76,65)',
                                    'rgba(229,57,53)',
                                    'rgba(94,53,177)',
                                    'rgba(57,73,171)',
                                    'rgba(142,36,170)',
                                    'rgba(3,155,229)',
                                    'rgba(0,137,123)',
                                    'rgba(124,179,66)',
                                    'rgba(192,202,51)',
                                    'rgba(41,98,255)',

                                ],
                                data: count
                            }]
                        };
                        var ctx2 = document.getElementById("myChart2");
                        ctx2.height = 80;
                        var barGraph = new Chart(ctx2, {
                            type: 'pie',
                            data: chartdata
                        });
                        var tabledetail=$("#table-data");
                        tabledetail.remove();
                        $(".chart-data").append(' <br/><div id="table-data"></div>');
                        var tabledetail=$("#table-data");
                        tabledetail.append('<table class="table table-bordered" id="row"><tr><th>'+input_cha+'</th><th class="text-right">Amount</th><th class="text-right">Percent</th></tr>');
                        var sum =0;
                        for(i=0;i<data.length;i++)
                        {
                            sum=parseInt(sum)+parseInt(data[i].count_sum);
                            
                        }
                        for(i=0;i<data.length;i++)
                        {
                           
                            var x =(data[i].count_sum/sum)*100;
                            $("#row").append('<tr><td>'+data[i].cha+'</td><td class="text-right">'+data[i].count_sum+'</td><td class="text-right">'+x.toFixed(2)+'%</td></tr>');
                        }
                        tabledetail.append('</table>');
                        console.log(data);
                        console.log("sum"+sum);
                        $("#static_modal").modal('show');

                    },

                    error: function(data) {
                        console.log("error");
                        console.log(data);
                    }
                });
            }
        });
    });
    </script>
     <script>   
                                $(document).ready(function () {
                                    $('.noUi-handle').click(function() {
                                      
                                          var min = $('.noUi-handle').attr('aria-valuenow');
                                          var max = $('.noUi-handle').attr('aria-valuemax');
                                          //$(this).value(min+"-"+max);
                                          alert(min+"-"+max);
                                    });
                                });
    </script>
    <script src="theme/assets/js/shared/no-ui-slider.js"></script>
    <script src="theme/assets/js/shared/ion-range-slider.js"></script>