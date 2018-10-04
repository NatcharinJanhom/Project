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
                              <div class="col-md-12">
                              <p id="search_by"></p>
                              </div>
                            </div>
                            <!--
                            <div class="row">
                              <div class="col-md-12">
                              <p class="red right"><a href="#" >+more</a></p>
                              </div>
                            </div>
                            -->
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
                                                                                
                                                    <?php $tomato = search();
                                                    if($tomato)
                                                    {

                                                     ?>
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
                                                                <td bgcolor='#ff6258' class="text-white">Photo</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td bgcolor='#ff6258'></td>";
                    }
                    ?>
                                                            </tr>
                                                        <tr>
                                                            <td> </td>
                                                            <?php
                                                            $x=1;
                                                                foreach($tomato as $key=>$value)
                                                                {
                                                                    if($x>5)
                                                                    {
                                                                        echo "<td> </td>";
                                                                    }
                                                                    else
                                                                    {
                                                                        echo '<td class="imge"> <a href="detail.php"> <img class="image" src="pic/t'.$x.'.jpg" ></a></td>'; 
                                                                        $x++;
                                                                    }
                                                                    
                                                                }
                                                            ?>
                                                            </tr>
                                                       
                                                            <tr>
                                                                <td bgcolor='#ff6258' class="text-white">Plant</td>
                                                                <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td bgcolor='#ff6258'></td>";
                    }
                    ?>
                                                            </tr>
                                                            <!--
                                                            <tr>
                                                                <td>Plant size</td>
                                                                <?php /*
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['plant_size']??'-'."</td>";
                    }
                    */
                    ?>
                                                            </tr>
                                                            -->
                                                            
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
                                                    <?php
                                                    
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                        <table id="data" class="table  table-bordered" style="width:100%">
                                                        <tr><td style="text-align:center;">No data available</td></tr>
                                                        </table>
                                                        <?php
                                                    }
                                                    ?>
                                               
                                            
                                               
                                            
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
    <?php 
    $search_list = array();
    if(!empty($_POST['accession_number']))
    {
        $search_list['accession_number']=$_POST['accession_number'];
    }
        if(isset($_POST['stem_pubescence_density']))
        {
            $stem_pubescence_density=array();
            foreach($_POST['stem_pubescence_density'] as $value)
            {
                $stem_pubescence_density[]=$value;
            }
            $search_list['stem_pubescence_density']= $stem_pubescence_density;
        }
        if(isset($_POST['stem_internode_length']))
        {
            $stem_internode_length=array();
            foreach($_POST['stem_internode_length'] as $value)
            {
                $stem_internode_length[]=$value;
            }   
            $search_list['stem_internode_length']= $stem_internode_length;            
        }
        if(isset($_POST['number_of_leaves_under_1st_inflorescence']))
        {
            $number_of_leaves_under_1st_inflorescence=array();
            foreach($_POST['number_of_leaves_under_1st_inflorescence'] as $value)
            {
                if($value=='2')
                $number_of_leaves_under_1st_inflorescence[]="many";
                else if($value=='1')
                $number_of_leaves_under_1st_inflorescence[]="few";
            }   
            $search_list['number_of_leaves_under_1st_inflorescence']= $number_of_leaves_under_1st_inflorescence;            
        }
        if(isset($_POST['leaf_attitude']))
        {
            $leaf_attitude=array();
            foreach($_POST['leaf_attitude'] as $value)
            {
                if($value=='1')
                $leaf_attitude[]="semi-erect";
                else if($value=='2')
                $leaf_attitude[]="horizontal";               
            }
            $search_list['leaf_attitude']= $leaf_attitude;            
        }
        if(isset($_POST['leaf_type']))
        {
            $leaf_type=array();
            foreach($_POST['leaf_type'] as $value)
            {
                if($value=='1')
                $leaf_type[]="standard";
                else if($value=='2')
                $leaf_type[]="peruvianum";
                else if($value=='3')
                $leaf_type[]="potato leaf type";
                else if($value=='4')
                $leaf_type[]="pimpinellifolium";
            }
            $search_list['leaf_type']= $leaf_type;     
        }
        if(isset($_POST['fruit_weight_g']))
        {
            $fruit_weight_g=array();
            foreach($_POST['fruit_weight_g'] as $key=>$value)
            {
                $fruit_weight_g[]=$value;
            }
            $search_list['fruit_weight_g']= $fruit_weight_g;     
        }
        if(isset($_POST['fruit_size']))
        {
            $fruit_size=array();
            foreach($_POST['fruit_size'] as $key=>$value)
            {
                $fruit_size[]=$value;
            }
            $search_list['fruit_size']= $fruit_size;     
        }
        ?>
        <input type="hidden" id="search_list" value='<?php echo json_encode($search_list); ?>'>
    
</body>
</html>

<script src="theme/assets/js/shared/owl-carousel.js"></script>
<script>
var search_list = JSON.parse($('#search_list').val());
$('#search_by').empty();
var item = 0;
if(search_list['accession_number'])
{
    $('#search_by').append('Accession Number : <span class="red"> '+search_list['accession_number']+' </span>');
    item++;
}
if(search_list['stem_pubescence_density'])
{
    $('#search_by').append(' Stem pubescence density : ');
    for(i =0 ;i<search_list['stem_pubescence_density'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['stem_pubescence_density'][i]+' </span>');
    }
    item++;
}
if(search_list['stem_internode_length'])
{
    $('#search_by').append(' Stem internode length : ');
    for(i =0 ;i<search_list['stem_internode_length'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['stem_internode_length'][i]+' </span>');
    }
  
    item++;
}
if(search_list['number_of_leaves_under_1st_inflorescence'])
{
    $('#search_by').append(' Number of leaves under 1st inflorescence : ');
    for(i =0 ;i<search_list['number_of_leaves_under_1st_inflorescence'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['number_of_leaves_under_1st_inflorescence'][i]+' </span>');
    }
  
    item++;
}
if(search_list['leaf_attitude'])
{
    $('#search_by').append(' Leaf attitude : ');
    for(i =0 ;i<search_list['leaf_attitude'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['leaf_attitude'][i]+' </span>');
    }
  
    item++;
}
if(search_list['leaf_type'])
{
    $('#search_by').append(' Leaf type : ');
    for(i =0 ;i<search_list['leaf_type'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['leaf_type'][i]+' </span>');
    }
  
    item++;
}
if(search_list['fruit_weight_g'])
{
    $('#search_by').append(' Fruit Weight : ');
    for(i =0 ;i<search_list['fruit_weight_g'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['fruit_weight_g'][i]+' </span>');
    }
  
    item++;
}
if(search_list['fruit_size'])
{
    $('#search_by').append(' Fruit Size : ');
    for(i =0 ;i<search_list['fruit_size'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['fruit_size'][i]+' </span>');
    }
  
    item++;
}
if(item==0)
{
    $('#search_by').append(' Accession Number : <span class="red"> All </span>');
}
</script>
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
    
        unset($where);
        unset($where_new);
        $where = 'WHERE ';
        $i=0;
        if(!empty($_POST['accession_number']))
        {
            $accession_number =$_POST['accession_number'];
            $where .= "cha_data_tomato.accession_number LIKE '%$accession_number%'";
            $where .= ' AND ';
        }
            if(isset($_POST['stem_pubescence_density']))
            {
                foreach($_POST['stem_pubescence_density'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    $where .= "cha_data_tomato.stem_pubescence_density = '$value'";
                    $i++;
                }
                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['stem_internode_length']))
            {
                foreach($_POST['stem_internode_length'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    if($value == 'short')
                    {
                        $where .= "cha_data_tomato.stem_internode_length < '7'";
                    }
                    if($value == 'intermediate')
                    {   
                        $where .= "cha_data_tomato.stem_internode_length >='7' AND cha_data_tomato.stem_internode_length <='8'";
                    }
                    if($value == 'long')
                    {
                        $where .= "cha_data_tomato.stem_internode_length > '8'";
                    }
                    $i++;
                }   

                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['number_of_leaves_under_1st_inflorescence']))
            {
                foreach($_POST['number_of_leaves_under_1st_inflorescence'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    $where .= "cha_data_tomato.id_number_of_leaves_under_1st_inflorescence = '$value'";
                    $i++;
                }   

                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['leaf_attitude']))
            {
                foreach($_POST['leaf_attitude'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    $where .= "cha_data_tomato.id_leaf_attitude = '$value'";
                    $i++;
                }
                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['leaf_type']))
            {
                foreach($_POST['leaf_type'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    $where .= "cha_data_tomato.id_leaf_type = '$value'";
                    $i++;
                }
                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['fruit_weight_g']))
            {
                foreach($_POST['fruit_weight_g'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    if($value=='30-50')
                    {
                        $where .= "cha_data_tomato.fruit_weight_g BETWEEN 30 AND 50";
                    }
                    else
                    {
                        $where .= "cha_data_tomato.fruit_weight_g $value";
                    }
                    $i++;
                }
                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['fruit_size']))
            {
                foreach($_POST['fruit_size'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    if($value == 'medium'){$id = 1;}
                    if($value == 'small'){$id = 2;}
                    if($value == 'very small'){$id = 3;}
                        $where .= "cha_data_tomato.id_fruit_size = '$id'";
                    $i++;
                }
                $i=0;
                $where .= ' AND ';
            }
        if($where == 'WHERE ')
        {

           $where ="";
        }   
        $length_w = strlen($where);
        $where_new = substr($where, 0, -5);
        $con = ConDb::getInstance();
        $sql = "SELECT * FROM `cha_data_tomato` $where_new";
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