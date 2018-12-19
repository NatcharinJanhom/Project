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
img {
    vertical-align: middle;
    border-style: none;
}
.table td img {
    border-radius: 100%;
    max-height: 100px;
    max-width: 100px;
}
.img-ss, .image-grouped img, .table td img, .jsgrid .jsgrid-table td img, .table th img, .jsgrid .jsgrid-table th img, .settings-panel .color-tiles .tiles {
    width: 80px;
    height: 80px;
}
td.imge {
    height: 100px !important;
    width: 100px !important;
    text-align: center !important;
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


                          <?php 
                            require_once("connect_db.php");
                            $id_fact = $_POST['id_fact_tomato'];
                            
                            $sql = "SELECT * FROM `cha_data_tomato` WHERE NO = $id_fact ORDER BY id_accession_number";
                            $stmt = $conn->prepare($sql);
                            $stmt->execute();
                            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                          ?>

                          <li class="breadcrumb-item active" aria-current="page" >Accession Number : <?php echo $result[0]['accession_number']; ?></li>
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
                        <h4 class="card-title">Accession number : <?php echo $result[0]['accession_number']; ?></h4>
                        <ul class="nav nav-tabs tab-solid tab-solid-danger" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="tab-5-1" data-toggle="tab" href="#details-5-1" role="tab" aria-controls="details-5-1" aria-selected="true">General details</a>
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
                            <a class="nav-link" id="tab-5-7" data-toggle="tab" href="#Germ-5-7" role="tab" aria-controls="Germ-5-7" aria-selected="false">Storage</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="tab-5-8" data-toggle="tab" href="#Gallery-5-8" role="tab" aria-controls="Gallery-5-8" aria-selected="false">Gallery</a>
                          </li>
                        </ul>
                        <div class="tab-content tab-content-solid">
                          <div class="tab-pane fade show active" id="details-5-1" role="tabpanel" aria-labelledby="tab-5-1">
                            <?php 
                              if ($_SESSION['type'] == 'admin') {
                                # code...
                                echo '<a style="margin-left:2.35%;" role="button" class="btn btn-primary btn-fw" href="detail_editor.php">
                                       <i class="fa fa-edit"></i> Edit </a>' ;
                              }
                             ?>
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
                                <p><b>Plant size : </b> <?php echo $result[0]['plant_size']; ?></p>
                                <p><b>Stem pubescence density : </b> <?php echo $result[0]['stem_pubescence_density']; ?></p>
                                <p><b>Stem internode length : </b> <?php echo round($result[0]['stem_internode_length'],2); ?> </p>
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
                                <p> <b>Number of leaves under 1st inflorescence :</b> <?php echo $result[0]['number_of_leaves_under_1st_inflorescence']; ?></p>
                                <p><b>Leaf attitude : </b> <?php echo $result[0]['leaf_attitude']; ?></p>
                                <p><b>Leaf type : </b> <?php echo $result[0]['leaf_type']; ?> </p>
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
                              <i class="card-icon mdi mdi-flower"></i>Flower</a>
                          </h6>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-3">
                                <img class="img-fluid rounded" src="theme/assets/images/tomato/flower1.jpg" alt="image"> </div>
                              <div class="col-md-9">
                                <p><b>Number of days to flowering : </b> <?php echo $result[0]['number_of_days_to_flowering']; ?></p>
                                <p><b>Number of flowers : </b> <?php echo $result[0]['number_of_flowers_per']; ?></p>
                                <p><b>Corolla colour : </b> <?php echo $result[0]['corolla_colour']; ?></p>
                                <p><b>Style position : </b> <?php echo $result[0]['style_position']; ?></p>
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
                              <i class="card-icon mdi mdi-food-apple"></i>Fruit</a>
                          </h6>
                        </div>
                        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-3">
                                <img class="img-fluid rounded" src="theme/assets/images/tomato/loop8.jpg" alt="image"> </div>
                              <div class="col-md-9">
                                <p><b>Fruit weight : </b> <?php echo $result[0]['fruit_weight_g']; ?></p>
                                <p><b>Fruit size : </b> <?php echo $result[0]['fruit_size']; ?></p>
                                <p><b>Exterior colour of mature fruit : </b> <?php echo $result[0]['exterior_colour_of_mature_fruit']; ?></p>
                                <p><b>Predominant fruit shape : </b> <?php echo $result[0]['predominant_fruit_shape']; ?></p>
                                <p><b>Intensity of greenback : </b> <?php echo $result[0]['intensity_of_greenback']; ?></p>
                                <p><b>Fruit shoulder shape : </b> <?php echo $result[0]['fruit_shoulder_shape']; ?></p>
                                <p><b>Easiness of fruit to detach from pedicel : </b> <?php echo $result[0]['easiness_of_fruit_to_detach_from_pedicel']; ?></p>
                                <p><b>Fruit blossom end shape : </b> <?php echo $result[0]['fruit_blossom_end_shape']; ?></p>
                                <p><b>Shape of pistil scar : </b> <?php echo $result[0]['shape_of_pistil_scar']; ?></p>
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
                              <i class="card-icon mdi mdi-google-circles-communities"></i>Seed</a>
                          </h6>
                        </div>
                        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-3">
                                <img class="img-fluid rounded" src="theme/assets/images/tomato/seed1.jpg" alt="image"> </div>
                              <div class="col-md-9">
                                <p><b>Seed shape : </b> <?php echo $result[0]['seed_shape']; ?> </p>
                                <p><b>Seed colour : </b> <?php echo $result[0]['seed_colour']; ?></p>
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
                              <i class="card-icon mdi mdi-dots-horizontal"></i>Other</a>
                          </h6>
                        </div>
                        <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-3">
                                <img class="img-fluid rounded" src="theme/assets/images/tomato/plant2.jpg" alt="image"> </div>
                              <div class="col-md-9">
                                <p><b>Hypocotyl colour : </b> <?php echo $result[0]['hypocotyl_colour']; ?></p>
                                <p><b>Hypocotyl colour intensity : </b> <?php echo $result[0]['hypocotyl_colour_intensity']; ?></p>
                                <p><b>Hypocotyl pubescence : </b> <?php echo $result[0]['hypocotyl_pubescence']; ?></p>
                                <p><b>Plant growth type : </b> <?php echo $result[0]['plant_growth_type']; ?></p>

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
                           <!--  start asree     !--> 
<div class="tab-pane fade" id="Germ-5-7" role="tabpanel" aria-labelledby="tab-5-7"> 
<div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                      <div class="form-inline" style="margin: 10px;">
                         <div class="form-group">
                            <p style="padding-right:20px;">Choose Location</p>
                            <select >
                              <option value="Location1">Kasetsart</option>
                              <option value="Location2">Netherlands</option>
                              <option value="Location3">Lab Bio</option>
                            </select>
                        </div>
                        </div>
                        <ul class="nav nav-tabs tab-solid tab-solid-danger" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="n" data-toggle="tab" href="#nn" role="tab" aria-controls="nn" aria-selected="true">Plots</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link " id="c" data-toggle="tab" href="#cc" role="tab" aria-controls="cc" aria-selected="false">Tube</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link " id="s" data-toggle="tab" href="#ss" role="tab" aria-controls="ss" aria-selected="false">Seed</a>
                          </li>
                        </ul>
                        
                        <div class="tab-content tab-content-solid">
    <!--          n       !--><div class="tab-pane fade show active" id="nn" role="tabpanel" aria-labelledby="n">
                              <div class="row">

                                <div class="col-lg-12" >
                                 
                                <table id="tb_n" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>_</th>
                                        <th>first</th>
                                        <th>second</th>
                                        <th>third</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Location</td>
                                        <td class="left_c">lat : 14 , lon : 50  province : Chachoengsao</td>
                                        <td class="left_c">lat : 16 , lon : 78  province : Nakhon Pathom</td>   
                                        <td class="left_c">lat : 19 , lon : 90  province : Surin</td>  
                                    </tr>
                                    <tr>
                                        <td>Institution</td>
                                        <td> <input type="text" name="fname"></td>
                                        <td> <input type="text" name="fname"></td>
                                        <td> <input type="text" name="fname"></td>
                                    </tr>
                                    <tr>
                                        <td>Image</td>
                                        <td class="imge"> <a > <img class="image" src="pic/t_n.jpg" ></a></td>
                                        <td class="imge"> <a > <img class="image" src="pic/t_n.jpg" ></a></td>
                                        <td class="imge"> <a > <img class="image" src="pic/t_n.jpg" ></a></td>    
                                    </tr>
                              

                                    <tr>
                                        <td>Size Plots(width * Length / m.)</td>
                                        <td class="left_c">5*20</td>
                                        <td class="left_c">5*10</td>
                                        <td class="left_c">6*15</td>
                                    </tr>
                                    <tr>
                                        <td>Date(year / month / day)</td>
                                        <td class="left_c">2561 / 1  / 9</td>
                                        <td class="left_c">2561 / 2  / 3</td>
                                        <td class="left_c">2561 / 2  / 8</td>
                                    </tr>
                                    
                                    
                    
                                    </tbody>
                                </table>
                                
                                    </div>  
                                    </div>
 <!--         / n       !-->   </div>
 

<!--          c       !--><div class="tab-pane fade" id="cc" role="tabpanel" aria-labelledby="c">
<div class="row">

                                <div class="col-lg-12" >
                                <table id="tb_c" class="table  table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>_</th>
                                    <th>first</th>
                                    <th>second</th>
                                    <th>third</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Image</td>
                                    <td class="imge"> <a > <img class="image" src="pic/t_c.jpg" ></a></td>
                                    <td class="imge"> <a > <img class="image" src="pic/t_c.jpg" ></a></td>
                                    <td class="imge"> <a > <img class="image" src="pic/t_c.jpg" ></a></td> 
                                </tr>
                                <tr>
                                    <td>Id tube</td>
                                    <td class="left_c">No.1</td>
                                    <td class="left_c">No.2</td>
                                    <td class="left_c">No.3</td>
                                </tr>
                                 <tr>
                                    <td>Size tube ( wide * hight )</td>
                                    <td class="left_c">5*20</td>
                                    <td class="left_c">5*10</td>
                                    <td class="left_c">6*15</td>
                                </tr>
                                <tr>
                                    <td>temperature(°C)</td>
                                    <td class="left_c">5</td>
                                    <td class="left_c">4</td>
                                    <td class="left_c">8</td>
                                </tr>   
                                <tr>
                                    <td>Date(year / month / day)</td>
                                    <td class="left_c">2561 / 1  / 9</td>
                                    <td class="left_c">2561 / 2  / 3</td>
                                    <td class="left_c">2561 / 2  / 8</td>
                                </tr>
                                
                
                                </tbody>
                                    </table>
                                    </div>  
                                    </div>
 <!--         / c       !-->   </div>
 <!--          s       !--><div class="tab-pane fade" id="ss" role="tabpanel" aria-labelledby="s">
 <div class="row">

                                <div class="col-lg-12" >
                                <table id="tb_s" class="table  table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>_</th>
                                    <th>first</th>
                                    <th>second</th>
                                    <th>third</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Image</td>
                                    <td class="imge"> <a > <img class="image" src="pic/t_s.jpg" ></a></td>
                                    <td class="imge"> <a > <img class="image" src="pic/t_s.jpg" ></a></td>
                                    <td class="imge"> <a > <img class="image" src="pic/t_s.jpg" ></a></td>
                                </tr>
                          
                                 <tr>
                                    <td>Seeds / pack</td>
                                    <td class="left_c"> 50</td>
                                    <td class="left_c"> 50</td>
                                    <td class="left_c">62</td>
                                </tr>
                                
                                <tr>
                                    <td>Size seed(diameter,mm)</td>
                                    <td class="left_c">5</td>
                                    <td class="left_c"3</td>
                                    <td class="left_c">4</td>

                                </tr>
                                <tr>
                                    <td>Color seed</td>
                                    <td class="left_c">Yellow </td>
                                    <td class="left_c">orange</td>
                                    <td class="left_c">brown</td>
                                </tr>   
                                <tr>
                                    <td>temperature(°C)</td>
                                    <td class="left_c">17</td>
                                    <td class="left_c">15</td>
                                    <td class="left_c">13</td>
                                </tr>   
                                <tr>
                                    <td>Date(year / month / day)</td>
                                    <td class="left_c">2561 / 1  / 9</td>
                                    <td class="left_c">2561 / 2  / 3</td>
                                    <td class="left_c">2561 / 2  / 8</td>
                                </tr>
                                
                
                                </tbody>
                                    </table>
                                    </div>  
                                    </div>
 <!--         / c       !-->   </div>


                      </div>
                      </div>
                      </div>
                      </div>
    </div> 
</div>
<!--  End  asree     !-->


                           <div class="tab-pane fade" id="Gallery-5-8" role="tabpanel" aria-labelledby="tab-5-8">

                            <?php 
                              if ($_SESSION['type'] == 'admin') {
                                # code...
                                echo '<a style="margin-left:2.35%;" role="button" class="btn btn-primary btn-fw" href="detail_editor.php">
                                       <i class="fa fa-edit"></i> Edit </a>' ;
                              }
                             ?>

                            <div class="card-body">
                              
                    <div id="lightgallery" class="row lightGallery">
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
                        <img class="s300x300" src="theme/assets/images/tomato/loop11.jpg" alt="image small"> </a>
                      <a  class="image-tile">
                        <img class="s300x300" src="theme/assets/images/tomato/loop1.jpg" alt="image small"> </a>
                    </div>

                    
                  </div>


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
  
<script>        
                        var x = 0;
                          $('#n').click(function(){
                                         if (x==0){
                                               var table = $('#tb_n').DataTable({
                                                                  paging: false,
                                                                  ordering: false,
                                                                  columnDefs: [
                                                                  { searchable: false, targets: 0 }
                                                                  ]
                                                                  });
                                                                  x++;
                                         }
                                         
                
                                              });
                          $('#c').click(function(){
                                         if (x==0){
                                               var table2 = $('#tb_c').DataTable({
                                                                  paging: false,
                                                                  ordering: false,
                                                                  columnDefs: [
                                                                  { searchable: false, targets: 0 }
                                                                  ]
                                                                  });
                                                                  x++;
                                         }
                                         
                
                                              });  
                          $('#s').click(function(){
                                         if (x==0){
                                               var table3 = $('#tb_s').DataTable({
                                                                  paging: false,
                                                                  ordering: false,
                                                                  columnDefs: [
                                                                  { searchable: false, targets: 0 }
                                                                  ]
                                                                  });
                                                                  x++;
                                         }
                                         
                
                                              });                               
</script>