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
    .pt
    {
      padding-top:0.1rem;
      padding-bottom:0.2rem;
    }
    .mt-5, .my-5 {
    margin-top: 2rem !important;
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
          <form id="physical_search" action="search_results.php" method="post">
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
           <button type="button" class="btn  btn-danger btn-search-submit" type="button"><i class="text-white fa fa-search"></i></button>
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
                              <div class="mt-5 pt w-75 mx-auto soft-limit-3">
                                <input type="hidden" name="fruit_weight_g">
                                    <div id="soft-limit-3" class="ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal" >
                                    </div>
                                </div>                        
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Fruit size <span><a class='static' id="#fruit_size" href="#fruit_size" data-cha="Fruit size" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
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
                                <p>Exterior color of mature fruit <span><a class='static' id="#exterior_color_of_mature_fruit" href="#exterior_color_of_mature_fruit" data-cha="Exterior colour of mature fruit" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="exterior_colour_of_mature_fruit[]" value="red">
                              <label>red</label>     
                              <input type='checkbox' class='form-check-inline' name="exterior_colour_of_mature_fruit[]" value="orange red">
                              <label>orange red</label>     
                              <input type='checkbox' class='form-check-inline' name="exterior_colour_of_mature_fruit[]" value="pink">
                              <label>pink</label>                             
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Predominant fruit shape <span><a class='static' id="#predominant_fruit_shape" href="#predominant_fruit_shape" data-cha="Predominant fruit shape" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="predominant_fruit_shape[]" value="cylindrical">
                              <label>cylindrical</label>     
                              <input type='checkbox' class='form-check-inline' name="predominant_fruit_shape[]" value="flattened">
                              <label>flattened</label>     
                              <input type='checkbox' class='form-check-inline' name="predominant_fruit_shape[]" value="heart-shaped">
                              <label>heart-shaped</label>  <br/>     
                              <input type='checkbox' class='form-check-inline' name="predominant_fruit_shape[]" value="high-round">
                              <label>high-round</label>   
                              <input type='checkbox' class='form-check-inline' name="predominant_fruit_shape[]" value="lengthened cylindrical">
                              <label>lengthened cylindrical</label>     
                              <input type='checkbox' class='form-check-inline' name="predominant_fruit_shape[]" value="pearshaped">
                              <label>pear-shaped</label>    <br/>
                              <input type='checkbox' class='form-check-inline' name="predominant_fruit_shape[]" value="plum-shaped">
                              <label>plum-shaped</label>                                
                              </div>
                            </div><br/>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Intensity of greenback <span><a class='static' id="#intensity_of_greenback" href="#intensity_of_greenback" data-cha="Intensity of greenback" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="intensity_of_greenback[]" value="intermediate">
                              <label>intermediate</label>   
                              <input type='checkbox' class='form-check-inline' name="intensity_of_greenback[]" value="none">
                              <label>none</label>   
                              <input type='checkbox' class='form-check-inline' name="intensity_of_greenback[]" value="slight">
                              <label>slight</label>   
                              <input type='checkbox' class='form-check-inline' name="intensity_of_greenback[]" value="strong">
                              <label>strong</label>                                 
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Fruit shoulder shape <span><a class='static' id="#fruit_shoulder_shape" href="#fruit_shoulder_shape" data-cha="Fruit shoulder shape" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">                           
                              <input type='checkbox' class='form-check-inline' name="fruit_shoulder_shape[]" value="flat">
                              <label>flat</label>  
                              <input type='checkbox' class='form-check-inline' name="fruit_shoulder_shape[]" value="moderately depressed">
                              <label>moderately depressed</label>  
                              <input type='checkbox' class='form-check-inline' name="fruit_shoulder_shape[]" value="slightly depressed">
                              <label>slightly depressed</label>                                 
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Easiness of fruit to detach from the pedicel <span><a class='static' id="easiness_of_fruit_to_detach_from_pedicel" href="#easiness_of_fruit_to_detach_from_pedicel" data-cha="Easiness of fruit to detach from pedicel" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline'  name="easiness_of_fruit_to_detach_from_pedicel[]" value="easy">
                              <label>easy</label>  
                              <input type='checkbox' class='form-check-inline'  name="easiness_of_fruit_to_detach_from_pedicel[]" value="intermediate">
                              <label>intermediate</label>  
                              <input type='checkbox' class='form-check-inline'  name="easiness_of_fruit_to_detach_from_pedicel[]" value="difficult">
                              <label>difficult</label>                              
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Easiness of fruit wall to be peeled <span><a class='static' id="#easiness_of_fruit_wall_skin_to_be_peeled" href="#easiness_of_fruit_wall_skin_to_be_peeled" data-cha="Easiness of fruit wall (skin) to be peeled" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="easiness_of_fruit_wall_skin_to_be_peeled[]" value="easy">
                              <label>easy</label>    
                              <input type='checkbox' class='form-check-inline' name="easiness_of_fruit_wall_skin_to_be_peeled[]" value="intermediate">
                              <label>intermediate</label>    
                              <input type='checkbox' class='form-check-inline' name="easiness_of_fruit_wall_skin_to_be_peeled[]" value="difficult">
                              <label>difficult</label>                                                              
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Fruit blossom end shape <span><a class='static' id="#fruit_blossom_end_shape" href="#fruit_blossom_end_shape" data-cha="Fruit blossom end shape" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="fruit_blossom_end_shape[]" value="flat">
                              <label>flat</label>        
                              <input type='checkbox' class='form-check-inline' name="fruit_blossom_end_shape[]" value="indented">
                              <label>indented</label>        
                              <input type='checkbox' class='form-check-inline' name="fruit_blossom_end_shape[]" value="pointed">
                              <label>pointed</label>                             
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Shape of pistil scar <span><a class='static' id="#shape_of_pistil_scar" href="#shape_of_pistil_scar" data-cha="Shape of pistil scar" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="shape_of_pistil_scar[]" value="dot">
                              <label>dot</label> 
                              <input type='checkbox' class='form-check-inline' name="shape_of_pistil_scar[]" value="linear">
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
                              <div class="col-md-6">
                                <p>Stem pubescence density<span><a class='static' id="stem_pubescence_density" href="#stem_pubescence_density" data-cha="Stem pubescence density" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="stem_pubescence_density[]" value='dense'>
                              <label>dense</label>
                              <input type='checkbox' class='form-check-inline' name="stem_pubescence_density[]" value='intermediate'>
                              <label>intermediate</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Stem internode length (cm)</p>
                              </div>
                              <div class="col-md-6">
                              <div class="mt-5 pt w-75 mx-auto">
                              <input type="hidden" name="stem_internode_length">
                                    <div id="soft-limit-4"  class="ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal" >
                                    </div>
                                </div>                        
                              
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
                                <p>Number of leaves under 1st inflorescence <span><a class='static' id="number_of_leaves_under_1st_inflorescence" href="#number_of_leaves_under_1st_inflorescence" data-cha="Number of leaves under 1st inflorescence" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
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
                                <p>Leaf attitude <span><a class='static' id="leaf_attitude" href="#leaf_attitude" data-cha="Leaf attitude" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="leaf_attitude[]" value='1'>
                              <label>semi-erect</label>                                                               
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Leaf type <span><a class='static' id="leaf_type" href="#leaf_type" data-cha="Leaf type" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
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
                              <div class="mt-5 pt w-75 mx-auto">
                                    <input type="hidden" name="number_of_days_to_flowering">
                                    <div id="soft-limit-5"  class="ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal" >
                                    </div>
                                </div>                          
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Number of flowers</p>
                              </div>
                              <div class="col-md-6">
                              <div class="mt-5 pt w-75 mx-auto">
                                    <input type="hidden" name="number_of_flowers_per">
                                    <div id="soft-limit-6"  class="ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal" >
                                    </div>
                                </div>    
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Corolla colour<span><a class='static' id="corolla_colour" href="#corolla_colour" data-cha="Corolla colour" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="corolla_colour[]" value='yellow'>
                              <label>yellow</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Style position<span><a class='static' id="style_position" href="#style_position" data-cha="Style position" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
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
                                <p>Seed shape <span><a class='static' id="seed_shape" href="#seed_shape" data-cha="Seed shape" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="seed_shape[]" value='globular'>
                              <label>globular</label>    
                              <input type='checkbox' class='form-check-inline' name="seed_shape[]" value='ovate'>
                              <label>ovate</label>                                  
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Seed colour<span><a class='static' id="seed_colour" href="#seed_colour" data-cha="Seed colour" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="seed_colour[]" value='brown'>
                              <label>brown</label>     
                              <input type='checkbox' class='form-check-inline' name="seed_colour[]" value='dark yellow'>
                              <label>dark yellow</label>     
                              <input type='checkbox' class='form-check-inline' name="seed_colour[]" value='light yellow'>
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
                                <p>Hypocotyl colour <span><a class='static' id="hypocotyl_colour" href="#hypocotyl_colour" data-cha="Hypocotyl colour" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="hypocotyl_colour[]" value='1/2 purple from the base'>
                              <label>1/2 purple from the base</label>  
                              <input type='checkbox' class='form-check-inline' name="hypocotyl_colour[]" value='1/4 purple from the base'>
                              <label>1/4 purple from the base</label>  <br/>
                              <input type='checkbox' class='form-check-inline' name="hypocotyl_colour[]" value='green'>
                              <label>green</label>  
                              <input type='checkbox' class='form-check-inline' name="hypocotyl_colour[]" value='purple'>
                              <label>purple</label>  
                              <input type='checkbox' class='form-check-inline' name="hypocotyl_colour[]" value='blue'>
                              <label>blue</label>                                
                              </div>
                            </div>
                            <br/>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Hypocotyl colour intensity<span><a class='static' id="hypocotyl_colour_intensity" href="#hypocotyl_colour_intensity" data-cha="Hypocotyl colour intensity" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="hypocotyl_colour_intensity[]" value="intermediate">
                              <label>intermediate</label>      
                              <input type='checkbox' class='form-check-inline' name="hypocotyl_colour_intensity[]" value="low">
                              <label>low</label>                                    
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Hypocotyl pubescence<span><a class='static' id="hypocotyl_pubescence" href="#hypocotyl_pubescence" data-cha="Hypocotyl pubescence" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="hypocotyl_pubescence[]" value="low">
                              <label>present</label>                                
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Plant growth type<span><a class='static' id="plant_growth_type" href="#plant_growth_type" data-cha="Plant growth type" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                              </div>
                              <div class="col-md-6">
                              <input type='checkbox' class='form-check-inline' name="plant_growth_type[]" value="indeterminate">
                              <label>indeterminate</label>           
                              <input type='checkbox' class='form-check-inline' name="plant_growth_type[]" value="determinate">
                              <label>determinate</label>           
                              <input type='checkbox' class='form-check-inline' name="plant_growth_type[]" value="semi-determinate">
                              <label>semi-determinate</label>   <br/>         
                              <input type='checkbox' class='form-check-inline' name="plant_growth_type[]" value="intermediate">
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
          <button type="button" class="btn-fix btn1 btn-round btn-search btn-search-submit">Search</button>
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
        <canvas id="myChart3"></canvas><br/>
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
            $("#myChart3").remove();
            $("#head").empty();
            $('.chart-data').append('<canvas id="myChart1"><canvas>');
            $('#myChart1').after('<canvas id="myChart2"><canvas>');
            $('#myChart2').after('<canvas id="myChart3"><canvas>');
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
                                label: 'จำนวนสายพันธุ์',
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
                                label: 'จำนวนสายพันธุ์',
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
                        var chartdata = {
                            labels: name,
                            datasets: [{
                                label: 'จำนวนสายพันธุ์',
                                backgroundColor: 'rgba(247,100,88,0.5)',
                                borderColor: 'rgba(247,100,88)',
                                pointBorderColor: "rgba(247,100,88,1)",
                                pointBackgroundColor: "rgba(247,100,88,1)",
                                data: count
                            }]
                        };
                        var ctx3 = document.getElementById("myChart3");
                        ctx3.height = 100;
                        var barGraph = new Chart(ctx3, {
                            type: 'radar',
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
     (function($) {
      'use strict';
          var softSlider = document.getElementById('soft-limit-3');
          var softSlider1 = document.getElementById('soft-limit-4');
          var softSlider2 = document.getElementById('soft-limit-5');
          var softSlider3 = document.getElementById('soft-limit-6');

        noUiSlider.create(softSlider, {
          start: [0, 60],
          tooltips: [true, true],
          connect: true,
          range: {
            min: 0,
            max: 60
          },
          pips: {
            mode: 'values',
            values: [0, 10, 20, 30, 40, 50, 60],
            density: 10
          }
        });
        noUiSlider.create(softSlider1, {
          start: [0, 60],
          tooltips: [true, true],
          connect: true,
          range: {
            min: 0,
            max: 60
          },
          pips: {
            mode: 'values',
            values: [0, 10, 20, 30, 40, 50, 60],
            density: 10
          }
        });
        noUiSlider.create(softSlider2, {
          start: [0, 60],
          tooltips: [true, true],
          connect: true,
          range: {
        'min': 0,
        '17%': 10,
        '34%': 20,
        '51%': 30,
        '68%': 40,
        '85%': 50,
        'max': 60
      },
      snap: true,
          pips: {
            mode: 'values',
            values: [0, 10, 20, 30, 40, 50, 60],
            density: 10
          }
        });
        noUiSlider.create(softSlider3, {
          start: [5, 11],
          tooltips: [true, true],
          connect: true,
          range: {
        'min': 5,
        '17%': 6,
        '34%': 7,
        '51%': 8,
        '68%': 9,
        '85%': 10,
        'max': 11
      },
      snap: true,
          pips: {
            mode: 'values',
            values: [5, 6, 7,8,9,10,11],
            density: 5
          }
        });
    })(jQuery);
     </script>
       <script>   
       
     
    $(".btn-search-submit").click(function(){ 
      var s = $("#soft-limit-3")[0].innerText;
      var fruit_weight_g=s.split("\n"); 
      if(fruit_weight_g[0]=='0.00' && fruit_weight_g[1]=='60.00')
      {
        $("input[name='fruit_weight_g']").remove();
      }
      else if(fruit_weight_g.length < 3)
      {
        $("input[name='fruit_weight_g']").remove();
      }
      else
      {
        $("input[name='fruit_weight_g']").val(fruit_weight_g);
      }
      var s = $("#soft-limit-4")[0].innerText;
      var stem_internode_length=s.split("\n"); 
      if(stem_internode_length[0]=='0.00' && stem_internode_length[1]=='60.00')
      {
        $("input[name='stem_internode_length']").remove();
      }
      else if(stem_internode_length.length < 3)
      {
        $("input[name='stem_internode_length']").remove();
      }
      else
      {
        $("input[name='stem_internode_length']").val(stem_internode_length);
      }
      var s = $("#soft-limit-5")[0].innerText;
      var number_of_days_to_flowering=s.split("\n"); 
      if(number_of_days_to_flowering[0]=='0.00' && number_of_days_to_flowering[1]=='60.00')
      {
        $("input[name='number_of_days_to_flowering']").remove();
      }
      else if(number_of_days_to_flowering.length < 3)
      {
        $("input[name='number_of_days_to_flowering']").remove();
      }
      else
      {
        $("input[name='number_of_days_to_flowering']").val(number_of_days_to_flowering);
      }
      var s = $("#soft-limit-6")[0].innerText;
      var number_of_flowers_per=s.split("\n"); 
      if(number_of_flowers_per[0]=='5.00' && number_of_flowers_per[1]=='11.00')
      {
        $("input[name='number_of_flowers_per']").remove();
      }
      else if(number_of_flowers_per.length < 3)
      {
        $("input[name='number_of_flowers_per']").remove();
      }
      else
      {
        $("input[name='number_of_flowers_per']").val(number_of_flowers_per);
      }
      $("#physical_search").submit();
    });  
    $(".btn-clear").click(function(){ 
     var check_box = $("input[type='checkbox']").prop("checked",false);
    //  var s=$(".noUi-base .noUi-origin")[1];
    //  $(s).css("left","100%");
    //  $(".noUi-base .noUi-connect").attr("style"," left: 0%; right: 0%;");
    
    //  $(".noUi-base .noUi-handle-upper").attr("aria-valuetext",60.00);
    //  $(".noUi-base .noUi-handle-upper .noUi-tooltip").empty();
    //  $(".noUi-base .noUi-handle-upper .noUi-tooltip").append("60.00");
    });  
      </script>
