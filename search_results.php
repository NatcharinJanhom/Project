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
    .tab-simple-styled .nav-item .nav-link.active {
        color: #36a3f7;
    }

    .nav-tabs .nav-item .nav-link {
        font-size: 1.2rem;
    }

    table.dataTable {
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }

    .dataTables_filter {
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
                        echo "<th ><a href='detail.php' class='btn btn-primary btn-sm' >".$value['accession_number']??'-'."</a></th>";
                    }
                    ?>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td bgcolor='#57c7d4' class="text-white">Plant</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td bgcolor='#57c7d4'></td>";
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
                                                                <td bgcolor='#57c7d4' class="text-white">Leaf</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td bgcolor='#57c7d4'></td>";
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
                                                                <td bgcolor='#57c7d4' class="text-white">Flower</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td bgcolor='#57c7d4'></td>";
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
                                                                <td bgcolor='#57c7d4' class="text-white">Fruit</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td bgcolor='#57c7d4'></td>";
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
                                                                <td bgcolor='#57c7d4' class="text-white">Seed</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td bgcolor='#57c7d4'></td>";
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
                                                                <td bgcolor='#57c7d4' class="text-white">Other</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td bgcolor='#57c7d4'></td>";
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
                                                <div class="row">   
                                                    <div class="col-12">
                                                        <p>Searching <span style="color:#36a3f7; padding-left:10px; padding-right:10px; ">3</span> results </p>
                                                    </div>   
                                                </div>
                                                <div class="row">
                                                  
                                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 grid-margin stretch-card">
                                        <div class="card card-statistics">
                                            <div class="card-body">
                                                <div class="clearfix">
                                                    <center><img class="nevber" src="pic/t1.jpg" style="width:100px"> </center>

                                                </div>
                                                <p class="clearfix2">xxxx</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 grid-margin stretch-card">
                                        <div class="card card-statistics">
                                            <div class="card-body">
                                                <div class="clearfix">
                                                <center><img class="nevber" src="pic/t3.jpg" style="width:100px"> </center>

                                                </div>
                                                <p class="clearfix2">xxxx</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 grid-margin stretch-card">
                                        <div class="card card-statistics">
                                            <div class="card-body">
                                                <div class="clearfix">
                                                <center> <img class="nevber" src="pic/t2.jpg" style="width:100px"> </center>

                                                </div>
                                                <p class="clearfix2">xxxx</p>
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