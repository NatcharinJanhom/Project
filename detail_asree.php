<!DOCTYPE html>
<html lang="en">
  <head>
      <?php include('head.php'); ?>
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.17/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.2.5/css/fixedColumns.dataTables.min.css">
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.1/js/dataTables.fixedColumns.min.js"></script>
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

.accordion .card .card-header a:before {
  color: #ff0017;
}
.accordion .card .card-header
{
  border-bottom: 1px solid #ff0017;
}
.accordion .card .card-header a
{
  font-size: 1.2rem;
  color:#ff0017;
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
.card.item {
   border: 1px solid #ff0017;
  
}
.accordion.basic-accordion .card .card-header a[aria-expanded="true"] ,
.accordion.basic-accordion .card .card-header a[aria-expanded="false"] 
{
  background: none;

}
  .tab-simple-styled .nav-item .nav-link.active {
      color: #ff0017;  
  }
  .nav-tabs .nav-item .nav-link {
      font-size: 1rem;
      line-height: 2;
  }

  table.dataTable {
      margin-top: 0px !important;
      margin-bottom: 0px !important;
  }

  .dataTables_filter {
      display: none;
  }
  #data_info
  {
      display: none;
  }
  .DTFC_LeftBodyLiner {
      overflow-y: hidden !important;
  }

  .dataTables_wrapper .dataTable .btn {
      padding: 0.5rem 0.81rem;

  }

  .table-bordered th,
  .table-bordered td {
      border: 0px;
  }

  table.dataTable thead th,
  table.dataTable tfoot th {
      font-weight: normal;
  }

  table.dataTable thead th,
  table.dataTable thead td {
      border-bottom: 0px;
  }

  img {
      max-height: 200px; 
  }
  
  .image
  {
      max-height:160px;
      max-width:160px;
      width:100%;
      height:100%;
  }
  .margin0
  {
      margin-bottom: 0;
  }
  .card .card-body.unpad
  {
      padding: 0px;
  }
  hr {
  margin-top: 1rem;
  margin-bottom: 0px;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
  background: #ff6258;
}
.tab-simple-styled .nav-item .nav-link.active{
  
  border-top: 1px solid #f12222;
  border-right: 1px solid #f12222;
  border-left: 1px solid #f12222;
  border-bottom : none ;
  color:red;
}
.tab-simple-styled .nav-item .nav-link ,
.tab-simple-styled .nav-item .nav-link.active {
  color: #f12222;
  padding: 10px;
  
}
.tab-simple-styled {
  border-bottom: none;
  margin-bottom: -15px;
}
.tab-simple-styled .nav-item {
  margin-right: 5px;
}
a,a:hover{
  text-decoration: none;
  color: #f12222;
}
.red
{
  color:#f12222;
}
.breadcrumb
{
      margin-bottom: 0rem;
}
.card .card-body.top
{
  padding: 0rem;
}
.right
{
  text-align: right;
}
table tr td
{
  height: 30px !important;
}
table.dataTable tbody td {
  padding: 5px 5px 5px 10px;
}
.table td img
{
  border-radius: 100%;
  max-height: 100px;
  max-width: 100px;
  width: 100%;
  height: 100%;
}
table tr td img,
table tr td.imge
{
  height: 100px !important;
  width: 100px !important;
  text-align: center !important;
}
@media (min-width: 992px){
.sidebar-icon-only .main-panel {
  width: calc(100% - 75px) ;
}
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
                            <a class="nav-link" id="tab-5-7" data-toggle="tab" href="#Germ-5-7" role="tab" aria-controls="Germ-5-7" aria-selected="false">Germplasm</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="tab-5-8" data-toggle="tab" href="#Gallery-5-8" role="tab" aria-controls="Gallery-5-8" aria-selected="false">Gallery</a>
                          </li>
                        </ul>
                        <div class="tab-content tab-content-solid">
                          <div class="tab-pane fade show active" id="details-5-1" role="tabpanel" aria-labelledby="tab-5-1">
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
<!--  start asree     !--> 
                       
<div class="tab-pane fade" id="Germ-5-7" role="tabpanel" aria-labelledby="tab-5-7"> 
<div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <ul class="nav nav-tabs tab-solid tab-solid-danger" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="n" data-toggle="tab" href="#nn" role="tab" aria-controls="nn" aria-selected="true">Nursery</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link " id="c" data-toggle="tab" href="#cc" role="tab" aria-controls="cc" aria-selected="false">Cultivation Tube</a>
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
                                        <th></th>
                                        <th>Nursery 1</th>
                                        <th>Nursery 2</th>
                                        <th>Nursery 3</th>
                                        <th>Nursery 4</th>
                                        <th>Nursery 5</th>
                                        <th>Nursery 6</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>รูปภาพ</td>
                                        <td class="imge"> <a > <img class="image" src="pic/a.jpeg" ></a></td>
                                        <td class="imge"> <a > <img class="image" src="pic/a.jpeg" ></a></td>
                                        <td class="imge"> <a > <img class="image" src="pic/a.jpeg" ></a></td>
                                        <td class="imge"> <a > <img class="image" src="pic/a.jpeg" ></a></td>
                                        <td class="imge"> <a > <img class="image" src="pic/a.jpeg" ></a></td>
                                        <td class="imge"> <a > <img class="image" src="pic/a.jpeg" ></a></td>
                                    </tr>
                              

                                    <tr>
                                        <td>ขนาดแปลง(กว้าง*ยาว / เมตร)</td>
                                        <td class="left_c">5*20</td>
                                        <td class="left_c">5*10</td>
                                        <td class="left_c">6*15</td>
                                        <td class="left_c">9*13</td>
                                        <td class="left_c">5*16</td>
                                        <td class="left_c">5*13</td>
                                    </tr>
                       <!--         / n             <tr>
                                        <td>วันที่ปลูก</td>
                                        <td class="left_c">9/10/2554</td>
                                        <td class="left_c">5/10/2554</td>
                                        <td class="left_c">5/10/2554</td>
                                        <td class="left_c">6/10/2554</td>
                                        <td class="left_c">3/10/2554</td>
                                        <td  class="left_c"> 2/10/2554</td>
                                    </tr>      !--> 
                                    <tr>
                                        <td>ผลผลิตต่อแปลง</td>
                                        <td class="left_c">9500</td>
                                        <td class="left_c">5500</td>
                                        <td class="left_c">6500</td>
                                        <td class="left_c">4500</td>
                                        <td class="left_c">6500</td>
                                        <td class="left_c">7500</td>
                                    </tr>
                                    <tr>
                                        <td>อายุ(ปี / เดือน / วัน)</td>
                                        <td class="left_c">0 / 1  / 9</td>
                                        <td class="left_c">0 / 2  / 3</td>
                                        <td class="left_c">0 / 2  / 8</td>
                                        <td class="left_c">0 / 2  / 2</td>
                                        <td class="left_c">0 / 1  / 4</td>
                                        <td class="left_c">0 / 1  / 5</td>
                                    </tr>
                                    <tr>
                                        <td>จำนวนต้น</td>
                                        <td class="left_c">30</td>
                                        <td class="left_c">50</td>
                                        <td class="left_c">42</td>
                                        <td class="left_c">43</td>
                                        <td class="left_c">57</td>
                                        <td class="left_c">39</td>
                                    </tr>
                                    <tr>
                                        <td>จำนวนต้น</td>
                                        <td class="left_c">30</td>
                                        <td class="left_c">50</td>
                                        <td class="left_c">42</td>
                                        <td class="left_c">43</td>
                                        <td class="left_c">57</td>
                                        <td class="left_c">39</td>
                                    </tr>
                                    <tr>
                                        <td>จำนวนต้น</td>
                                        <td class="left_c">30</td>
                                        <td class="left_c">50</td>
                                        <td class="left_c">42</td>
                                        <td class="left_c">43</td>
                                        <td class="left_c">57</td>
                                        <td class="left_c">39</td>
                                    </tr>
                                    <tr>
                                        <td>จำนวนต้น</td>
                                        <td class="left_c">30</td>
                                        <td class="left_c">50</td>
                                        <td class="left_c">42</td>
                                        <td class="left_c">43</td>
                                        <td class="left_c">57</td>
                                        <td class="left_c">39</td>
                                    </tr>
                                    <tr>
                                        <td>จำนวนต้น</td>
                                        <td class="left_c">30</td>
                                        <td class="left_c">50</td>
                                        <td class="left_c">42</td>
                                        <td class="left_c">43</td>
                                        <td class="left_c">57</td>
                                        <td class="left_c">39</td>
                                    </tr>
                                    <tr>
                                        <td>จำนวนต้น</td>
                                        <td class="left_c">30</td>
                                        <td class="left_c">50</td>
                                        <td class="left_c">42</td>
                                        <td class="left_c">43</td>
                                        <td class="left_c">57</td>
                                        <td class="left_c">39</td>
                                    </tr>
                                    <tr>
                                        <td>จำนวนต้น</td>
                                        <td class="left_c">30</td>
                                        <td class="left_c">50</td>
                                        <td class="left_c">42</td>
                                        <td class="left_c">43</td>
                                        <td class="left_c">57</td>
                                        <td class="left_c">39</td>
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
                                    <th></th>
                                    <th>Tube 1</th>
                                    <th>Tube 2</th>
                                    <th>Tube 3</th>
                                    <th>Tube 4</th>
                                    <th>Tube 5</th>
                                    <th>Tube 6</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>รูปภาพ</td>
                                    <td class="imge"> <a > <img class="image" src="pic/lord.jpg" ></a></td>
                                    <td class="imge"> <a > <img class="image" src="pic/lord.jpg" ></a></td>
                                    <td class="imge"> <a > <img class="image" src="pic/lord.jpg" ></a></td>
                                    <td class="imge"> <a > <img class="image" src="pic/lord.jpg" ></a></td>
                                    <td class="imge"> <a > <img class="image" src="pic/lord.jpg" ></a></td>
                                    <td class="imge"> <a > <img class="image" src="pic/lord.jpg" ></a></td>
                                </tr>
                          
                                 <tr>
                                    <td>ขนาดหลอด(กว้าง*ยาว / เมตร)</td>
                                    <td class="left_c">5*20</td>
                                    <td class="left_c">5*10</td>
                                    <td class="left_c">6*15</td>
                                    <td class="left_c">9*13</td>
                                    <td class="left_c">5*16</td>
                                    <td class="left_c">5*13</td>
                                </tr>
                             <!--   
                                <tr>
                                    <td>วันที่เพาะเลี้ยง</td>
                                    <td class="left_c">9/10/2554</td>
                                    <td class="left_c">5/10/2554</td>
                                    <td class="left_c">5/10/2554</td>
                                    <td class="left_c">6/10/2554</td>
                                    <td class="left_c">3/10/2554</td>
                                    <td class="left_c">2/10/2554</td>
                                </tr>
                                !--> 
                                <tr>
                                    <td>อุณหภูมิ(°C)</td>
                                    <td class="left_c">30</td>
                                    <td class="left_c">31</td>
                                    <td class="left_c">29</td>
                                    <td class="left_c">32</td>
                                    <td class="left_c">29</td>
                                    <td class="left_c">33</td>
                                </tr>
                                <tr>
                                    <td>ความเข้มแสง(Lumen)</td>
                                    <td class="left_c">3000</td>
                                    <td class="left_c">3200</td>
                                    <td class="left_c">3100</td>
                                    <td class="left_c">3000</td>
                                    <td class="left_c">3100</td>
                                    <td class="left_c">3300</td>
                                </tr>
                                <tr>
                                    <td>ผลผลิตต่อแปลง</td>
                                    <td class="left_c">9500</td>
                                    <td class="left_c">5500</td>
                                    <td class="left_c">6500</td>
                                    <td class="left_c">4500</td>
                                    <td class="left_c">6500</td>
                                    <td class="left_c">7500</td>
                                </tr>
                                <tr>
                                    <td>อายุ(ปี / เดือน / วัน)</td>
                                    <td class="left_c">0 / 2  / 9</td>
                                    <td class="left_c">0 / 1  / 3</td>
                                    <td class="left_c">0 / 2  / 8</td>
                                    <td class="left_c">0 / 1  / 2</td>
                                    <td class="left_c">0 / 1  /4</td>
                                    <td class="left_c">0 / 2  / 5</td>
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
                                    <th></th>
                                    <th>Pack 1</th>
                                    <th>Pack 2</th>
                                    <th>Pack 3</th>
                                    <th>Pack 4</th>
                                    <th>Pack 5</th>
                                    <th>Pack 6</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>รูปภาพ</td>
                                    <td class="imge"> <a > <img class="image" src="pic/rice.jpg" ></a></td>
                                    <td class="imge"> <a > <img class="image" src="pic/rice.jpg" ></a></td>
                                    <td class="imge"> <a > <img class="image" src="pic/rice.jpg" ></a></td>
                                    <td class="imge"> <a > <img class="image" src="pic/rice.jpg" ></a></td>
                                    <td class="imge"> <a > <img class="image" src="pic/rice.jpg" ></a></td>
                                    <td class="imge"> <a > <img class="image" src="pic/rice.jpg" ></a></td>
                                </tr>
                          
                                 <tr>
                                    <td>จำนวนเมล็ดต่อแพ็ค</td>
                                    <td class="left_c"> 500</td>
                                    <td class="left_c"> 500</td>
                                    <td class="left_c">620</td>
                                    <td class="left_c">620</td>
                                    <td class="left_c">500</td>
                                    <td class="left_c">200</td>
                                </tr>
                                
                                <tr>
                                    <td>ขนาดเมล็ด(ไมครอน)</td>
                                    <td class="left_c">5</td>
                                    <td class="left_c">8</td>
                                    <td class="left_c">4</td>
                                    <td class="left_c">4</td>
                                    <td class="left_c">5</td>
                                    <td class="left_c">6</td>
                                </tr>
                                <tr>
                                    <td>สีเมล็ด</td>
                                    <td class="left_c">น้ำตาล</td>
                                    <td class="left_c">เขียว</td>
                                    <td class="left_c">ขาว</td>
                                    <td class="left_c">ดำ</td>
                                    <td class="left_c">ส้ม</td>
                                    <td class="left_c">แดง</td>
                                </tr>   
                                <tr>
                                    <td>อุณหภูมิที่เก็บเมล็ด(°C)</td>
                                    <td class="left_c">30</td>
                                    <td class="left_c">31</td>
                                    <td class="left_c">29</td>
                                    <td class="left_c">32</td>
                                    <td class="left_c">29</td>
                                    <td class="left_c">33</td>
                                </tr>   
                                <tr>
                                    <td>อายุ(ปี / เดือน / วัน)</td>
                                    <td class="left_c">0 / 7  / 9</td>
                                    <td class="left_c">0 / 2  / 3</td>
                                    <td class="left_c">0 / 1  / 8</td>
                                    <td class="left_c">0 / 2  / 2</td>
                                    <td class="left_c">0 / 2  / 4</td>
                                    <td class="left_c">0 / 3  / 5</td>
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

                            <div class="card-body">
                    <div id="lightgallery" class="row lightGallery">
                      <a href="theme/assets/images/tomato/loop1.jpg" class="image-tile">
                        <img class="s300x300" src="theme/assets/images/tomato/loop1.jpg" alt="image small"> </a>
                      <a href="" class="image-tile">
                        <img class="s300x300" src="theme/assets/images/tomato/loop10.jpg" alt="image small"> </a>
                      <a href="" class="image-tile">
                        <img class="s300x300" src="theme/assets/images/tomato/loop3.jpg" alt="image small"> </a>
                      <a href="" class="image-tile">
                        <img class="s300x300" src="theme/assets/images/tomato/loop4.jpg" alt="image small"> </a>
                      <a href="" class="image-tile">
                        <img class="s300x300" src="theme/assets/images/tomato/loop5.jpg" alt="image small"> </a>
                      <a href="" class="image-tile">
                        <img class="s300x300" src="theme/assets/images/tomato/loop6.jpg" alt="image small"> </a>
                      <a href="" class="image-tile">
                        <img class="s300x300" src="theme/assets/images/tomato/loop11.jpg" alt="image small"> </a>
                      <a href="" class="image-tile">
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
    
    <script>
                                
                                       
                               
                        var x = 0;
                          $('#n').click(function(){
                                         if (x==0){
                                               var table = $('#tb_n').DataTable({
                                                                  fixedColumns: {
                                                                  leftColumns: 1
                                                                  },
                                                                  scrollY: "400px",
                                                                  scrollX: true,
                                                                  scrollCollapse: true,
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
    </body>
</html>
