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
</style>

<body class="sidebar-icon-only">
    <div class="container-scroller">
        <?php include('navbar.php'); ?>
        <div class="container-fluid page-body-wrapper">
            <?php include('sidebar.php'); ?>
            <div class="main-panel">
                <div class="content-wrapper">
                <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body top">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item">
                            <a href="showdt.php">Home</a>
                          </li>        
                          <li class="breadcrumb-item">
                            <a href="physical_search.php">Physical Search</a>
                          </li>
                          <li class="breadcrumb-item active" aria-current="page">Search Result</li>
                        </ol>
                      </nav>
                      </div>
                    </div>
                </div>
            </div>
                <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <div class="accordion basic-accordion" id="accordion" role="tablist">                                          
                      <div class="card item">
                        <div class="card-header" role="tab" id="headingThree">
                          <h6 class="mb-0">
                            <a class="collapsed  " data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            <i class="card-icon mdi mdi-magnify"></i>Search</a>
                          </h6>
                        </div>
                        <div id="collapseThree" class="collapse show" role="tabpanel" aria-labelledby="headingThree">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-6">
                              <p>Plant size : <span class="red"> small </span>, Stem pubescence density: <span class="red"> dense </span>, Leaf type: <span class="red"> peruvainum </span></p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                              <p class="red right"><a href="#" >+more</a></p>
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
                    <!-- หน้าเว็บ -->
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <ul class="nav nav-tabs tab-simple-styled" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" id="tab-3-1" data-toggle="tab" href="#home-3-1" role="tab" aria-controls="home-3-1" aria-selected="true">
                                                        <i class="mdi mdi-table-large"></i>Table</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-3-2" data-toggle="tab" href="#profile-3-2" role="tab" aria-controls="profile-3-2" aria-selected="false">
                                                        <i class="mdi mdi-format-list-bulleted"></i>List</a>
                                                </li>
                                            </ul>
                                            <hr>
                                
                                            <div class="tab-content tab-content-basic">
                                                <div class="tab-pane fade active show" id="home-3-1" role="tabpanel" aria-labelledby="tab-3-1">
                                                    <?php $tomato = search(); ?>
                                                    <table id="data" class="table  table-bordered" style="width:100%">
                                                        <thead>
                                                            <tr align="center">
                                                                <th >Accession number</th>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<th ><a href='detail.php' class='btn btn-danger btn-sm' >".$value['accession_number']??'-'."</a></th>";
                    }
                    ?>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td bgcolor='#ff6258' class="text-white">Plant</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td bgcolor='#ff6258'></td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Plant size</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['plant_size']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Stem pubescence density</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['stem_pubescence_density']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Stem internode length</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['stem_internode_length']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td bgcolor='#ff6258' class="text-white">Leaf</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td bgcolor='#ff6258'></td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td> Number of leaves under 1st inflorescence</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['number_of_leaves_under_1st_inflorescence']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Leaf attitude</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['leaf_attitude']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Leaf type</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['leaf_type']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td bgcolor='#ff6258' class="text-white">Flower</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td bgcolor='#ff6258'></td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Number of days to flowering</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['number_of_days_to_flowering']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Number of flowers</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['number_of_flowers_per']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Corolla colour</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['corolla_colour']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Style position</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['style_position']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td bgcolor='#ff6258' class="text-white">Fruit</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td bgcolor='#ff6258'></td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Fruit weight</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['fruit_weight_g']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Fruit size</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['fruit_size']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Exterior colour of mature fruit</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['exterior_colour_of_mature_fruit']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Predominant fruit shape</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['predominant_fruit_shape']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Intensity of greenback</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['intensity_of_greenback']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Fruit shoulder shape</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['fruit_shoulder_shape']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Easiness of fruit to detach from pedicel</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['easiness_of_fruit_to_detach_from_pedicel']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Easiness of fruit to detach from pedicel</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['easiness_of_fruit_wall_skin_to_be_peeled']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Fruit blossom end shape</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['fruit_blossom_end_shape']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Shape of pistil scar</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['shape_of_pistil_scar']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td bgcolor='#ff6258' class="text-white">Seed</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td bgcolor='#ff6258'></td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Seed shape</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['seed_shape']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Seed colour</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['seed_colour']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td bgcolor='#ff6258' class="text-white">Other</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td bgcolor='#ff6258'></td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Hypocotyl colour</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['hypocotyl_colour']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Hypocotyl colour intensity</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['hypocotyl_colour_intensity']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Hypocotyl pubescence</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['hypocotyl_pubescence']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Plant growth type</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['plant_growth_type']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane fade" id="profile-3-2" role="tabpanel" aria-labelledby="tab-3-2">
                                                <br/>
                                                <div class="row">   
                                                    <div class="col-12">
                                                        <p>Searching <span style="color:#f12222; padding-left:10px; padding-right:10px; ">4</span> results </p>
                                                    </div>   
                                                </div>
                                                <div class="row">
                                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 grid-margin stretch-card">
                                        <div class="card ">
                                            <div class="card-body unpad">
                                                <div class="clearfix">
                                                    <center>
                                                    <div class="row">
                                                    <div class="col-md-12">
                                                    <a href="detail.php"> <img class="nevber image" src="pic/t5.jpg" ></a>
                                                    </div>
                                                 
                                                    <div class="col-md-12">
                                                    <a href="detail.php" class="margin0">LE001</a>
                                                    </div>
                                                    </div> 
                                                    <center>
                                                </div>
                                             
                                            </div>
                                        </div>
                                    </div>
                                                  
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 grid-margin stretch-card">
                                        <div class="card ">
                                            <div class="card-body unpad">
                                                <div class="clearfix">
                                                    <center>
                                                    <div class="row">
                                                    <div class="col-md-12">
                                                    <a href="detail.php"> <img class="nevber image" src="pic/t1.jpg" ></a>
                                                    </div>
                                                 
                                                    <div class="col-md-12">
                                                    <a href="detail.php" class="margin0">LE002</a>
                                                    </div>
                                                    </div> 
                                                    <center>
                                                </div>
                                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body unpad">
                                                <div class="clearfix">
                                                <center>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                    <a href="detail.php"> <img class="nevber image" src="pic/t3.jpg" > </a>
                                                    </div>
                                                 
                                                 <div class="col-md-12">
                                                 <a href="detail.php" class="margin0">LE003</a>
                                                 </div>
                                                 </div> </center>

                                                </div>
                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 grid-margin stretch-card">
                                        <div class="card ">
                                            <div class="card-body unpad">
                                                <div class="clearfix">
                                                <center>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                    <a href="detail.php"> <img class="nevber image" src="pic/t2.jpg" ></a>
                                                     </div>
                                                 
                                                 <div class="col-md-12">
                                                 <a class="margin0" href="detail.php">LE004</a>
                                                 </div>
                                                 </div> </center>

                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 grid-margin stretch-card">
                                        <div class="card ">
                                            <div class="card-body unpad">
                                                <div class="clearfix">
                                                <center>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                    <a href="detail.php"><img class="nevber image" src="pic/t4.jpg" ></a>
                                                     </div>
                                                 
                                                 <div class="col-md-12">
                                                 <a href="detail.php" class="margin0">LE005</a>
                                                 </div>
                                                 </div> </center>

                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 grid-margin stretch-card">
                                        <div class="card ">
                                            <div class="card-body unpad">
                                                <div class="clearfix">
                                                <center>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                    <a href="detail.php"><img class="nevber image" src="pic/t6.jpg" ></a>
                                                     </div>
                                                 
                                                 <div class="col-md-12">
                                                 <a href="detail.php" class="margin0">LE006</a>
                                                 </div>
                                                 </div> </center>

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
    $(document).ready(function () {
        var table = $('#data').DataTable({
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

    });
</script>
<script src="theme/assets/js/shared/owl-carousel.js"></script>
<?php
function search()
    {
      
        class conDb {
            private static $instance = NULL;
            private static $dsn = "mysql:dbname=tomatoes;host=localhost";
            private static $user = "root";
            private static $pass = "";
                private function __construct() {}
                private function __clone() {}
                public static function getInstance() {
                if (!isset(self::$instance)) {
                    self::$instance = new PDO(self::$dsn,self::$user,self::$pass);
                    self::$instance->exec("set names utf8");
                }
                return self::$instance;
                }
            }
    
        $con = ConDb::getInstance();
        $sql = "SELECT * FROM `cha_data_tomato` WHERE cha_data_tomato.hypocotyl_colour ='purple'";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($stmt->rowCount())
        {
            return $result;
        }
        else
        {
            return false;
        }
    }
?>