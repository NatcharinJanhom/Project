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
.text-result
{
    padding: 0 1.81rem 1rem 0;
    font-size: 0.875rem;
    color: #495057;
    text-align:right;
}
.card .card-body.card-unpad-bottom
{
    padding: 1.88rem 1.81rem 0 1.81rem;
}
</style>
<body class="sidebar-icon-only">
<?php $tomato = search(); ?>
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
                <div class="card-body card-unpad-bottom">
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
               <p class="text-result">Search results <span class="red"><?php echo$tomato[1]?></span> items</p>
             
            
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
                                                    <?php 
                                                    if($tomato)
                                                    {                                                       
                                                     ?>
                                                    <form action="detail.php" id="send_id" method="post">
                                                    <input type="hidden" name="id_fact_tomato" id="id_fact_tomato">                                                   
                                                    </form>
                                                    <table id="data" class="table  table-bordered" style="width:100%">
                                                        <thead>
                                                        
                                                            <tr align="center">
                                                                <th >Accession number</th>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<th ><button type='button' data-id='".$value['NO']."'class='btn btn-danger btn-sm btn-send' >".$value['accession_number']??'-'."</button></th>";
                    }
                    ?>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        
                                                        <tr>
                                                                <td bgcolor='#ff6258' class="text-white">Photo</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td bgcolor='#ff6258'></td>";
                    }
                    ?>
                                                            </tr>
                                                        <tr>
                                                            <td> </td>
                                                            <?php
                                                            $x=1;
                                                                foreach($tomato[0] as $key=>$value)
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
                                                                <td bgcolor='#ff6258' class="text-white">Fruit</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td bgcolor='#ff6258'></td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Fruit weight</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['fruit_weight_g']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Fruit size</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['fruit_size']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Exterior colour of mature fruit</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['exterior_colour_of_mature_fruit']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Predominant fruit shape</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['predominant_fruit_shape']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Intensity of greenback</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['intensity_of_greenback']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Fruit shoulder shape</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['fruit_shoulder_shape']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Easiness of fruit to detach from pedicel</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['easiness_of_fruit_to_detach_from_pedicel']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Easiness of fruit to detach from pedicel</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['easiness_of_fruit_wall_skin_to_be_peeled']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Fruit blossom end shape</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['fruit_blossom_end_shape']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Shape of pistil scar</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['shape_of_pistil_scar']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td bgcolor='#ff6258' class="text-white">Plant</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td bgcolor='#ff6258'></td>";
                    }
                    ?>
                                                            </tr>
                                                            <!--
                                                            <tr>
                                                                <td>Plant size</td>
                                                                <?php /*
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['plant_size']??'-'."</td>";
                    }
                    */
                    ?>
                                                            </tr>
                                                            -->
                                                            
                                                                <td>Stem pubescence density</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['stem_pubescence_density']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Stem internode length</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['stem_internode_length']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td bgcolor='#ff6258' class="text-white">Leaf</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td bgcolor='#ff6258'></td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td> Number of leaves under 1st inflorescence</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['number_of_leaves_under_1st_inflorescence']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Leaf attitude</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['leaf_attitude']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Leaf type</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['leaf_type']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td bgcolor='#ff6258' class="text-white">Flower</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td bgcolor='#ff6258'></td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Number of days to flowering</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['number_of_days_to_flowering']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Number of flowers</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['number_of_flowers_per']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Corolla colour</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['corolla_colour']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Style position</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['style_position']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td bgcolor='#ff6258' class="text-white">Seed</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td bgcolor='#ff6258'></td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Seed shape</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['seed_shape']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Seed colour</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['seed_colour']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td bgcolor='#ff6258' class="text-white">Other</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td bgcolor='#ff6258'></td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Hypocotyl colour</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['hypocotyl_colour']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Hypocotyl colour intensity</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['hypocotyl_colour_intensity']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Hypocotyl pubescence</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
                    {
                        echo "<td>".$value['hypocotyl_pubescence']??'-'."</td>";
                    }
                    ?>
                                                            </tr>
                                                            <tr>
                                                                <td>Plant growth type</td>
                                                                <?php
                    foreach($tomato[0] as $key=>$value)
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
        // if(isset($_POST['stem_internode_length']))
        // {
        //     $stem_internode_length=array();
        //     foreach($_POST['stem_internode_length'] as $value)
        //     {
        //         $stem_internode_length[]=$value;
        //     }   
        //     $search_list['stem_internode_length']= $stem_internode_length;            
        // }
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
            $tmp =$_POST['fruit_weight_g'];
            $val =explode(",",$tmp); 
            $fruit_weight_g[]=$val[0];
            $fruit_weight_g[]=$val[1];
            
            $search_list['fruit_weight_g']= $fruit_weight_g;     
        }
        if(isset($_POST['stem_internode_length']))
        {
            $stem_internode_length=array();
            $tmp =$_POST['stem_internode_length'];
            $val =explode(",",$tmp); 
            $stem_internode_length[]=$val[0];
            $stem_internode_length[]=$val[1];
            
            $search_list['stem_internode_length']= $stem_internode_length;     
        }
        if(isset($_POST['number_of_days_to_flowering']))
        {
            $number_of_days_to_flowering=array();
            $tmp =$_POST['number_of_days_to_flowering'];
            $val =explode(",",$tmp); 
            $number_of_days_to_flowering[]=$val[0];
            $number_of_days_to_flowering[]=$val[1];
            
            $search_list['number_of_days_to_flowering']= $number_of_days_to_flowering;     
        }
        if(isset($_POST['number_of_flowers_per']))
        {
            $number_of_flowers_per=array();
            $tmp =$_POST['number_of_flowers_per'];
            $val =explode(",",$tmp); 
            $number_of_flowers_per[]=$val[0];
            $number_of_flowers_per[]=$val[1];
            
            $search_list['number_of_flowers_per']= $number_of_flowers_per;     
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
        if(isset($_POST['exterior_colour_of_mature_fruit']))
        {
            $exterior_colour_of_mature_fruit=array();
            foreach($_POST['exterior_colour_of_mature_fruit'] as $key=>$value)
            {
                $exterior_colour_of_mature_fruit[]=$value;
            }
            $search_list['exterior_colour_of_mature_fruit']= $exterior_colour_of_mature_fruit;     
        }
        if(isset($_POST['predominant_fruit_shape']))
        {
            $predominant_fruit_shape=array();
            foreach($_POST['predominant_fruit_shape'] as $key=>$value)
            {
                $predominant_fruit_shape[]=$value;
            }
            $search_list['predominant_fruit_shape']= $predominant_fruit_shape;     
        }
        if(isset($_POST['intensity_of_greenback']))
        {
            $intensity_of_greenback=array();
            foreach($_POST['intensity_of_greenback'] as $key=>$value)
            {
                $intensity_of_greenback[]=$value;
            }
            $search_list['intensity_of_greenback']= $intensity_of_greenback;     
        }
        if(isset($_POST['fruit_shoulder_shape']))
        {
            $fruit_shoulder_shape=array();
            foreach($_POST['fruit_shoulder_shape'] as $key=>$value)
            {
                $fruit_shoulder_shape[]=$value;
            }
            $search_list['fruit_shoulder_shape']= $fruit_shoulder_shape;     
        }
        if(isset($_POST['easiness_of_fruit_to_detach_from_pedicel']))
        {
            $easiness_of_fruit_to_detach_from_pedicel=array();
            foreach($_POST['easiness_of_fruit_to_detach_from_pedicel'] as $key=>$value)
            {
                $easiness_of_fruit_to_detach_from_pedicel[]=$value;
            }
            $search_list['easiness_of_fruit_to_detach_from_pedicel']= $easiness_of_fruit_to_detach_from_pedicel;     
        }
        if(isset($_POST['easiness_of_fruit_wall_skin_to_be_peeled']))
        {
            $easiness_of_fruit_wall_skin_to_be_peeled=array();
            foreach($_POST['easiness_of_fruit_wall_skin_to_be_peeled'] as $key=>$value)
            {
                $easiness_of_fruit_wall_skin_to_be_peeled[]=$value;
            }
            $search_list['easiness_of_fruit_wall_skin_to_be_peeled']= $easiness_of_fruit_wall_skin_to_be_peeled;     
        }
        if(isset($_POST['fruit_blossom_end_shape']))
        {
            $fruit_blossom_end_shape=array();
            foreach($_POST['fruit_blossom_end_shape'] as $key=>$value)
            {
                $fruit_blossom_end_shape[]=$value;
            }
            $search_list['fruit_blossom_end_shape']= $fruit_blossom_end_shape;     
        }
        if(isset($_POST['shape_of_pistil_scar']))
        {
            $shape_of_pistil_scar=array();
            foreach($_POST['shape_of_pistil_scar'] as $key=>$value)
            {
                $shape_of_pistil_scar[]=$value;
            }
            $search_list['shape_of_pistil_scar']= $shape_of_pistil_scar;     
        }
        if(isset($_POST['stem_pubescence_density']))
        {
            $stem_pubescence_density=array();
            foreach($_POST['stem_pubescence_density'] as $key=>$value)
            {
                $stem_pubescence_density[]=$value;
            }
            $search_list['stem_pubescence_density']= $stem_pubescence_density;     
        }
        if(isset($_POST['corolla_colour']))
        {
            $corolla_colour=array();
            foreach($_POST['corolla_colour'] as $key=>$value)
            {
                $corolla_colour[]=$value;
            }
            $search_list['corolla_colour']= $corolla_colour;     
        }
        if(isset($_POST['style_position']))
        {
            $style_position=array();
            foreach($_POST['style_position'] as $key=>$value)
            {
                $style_position[]=$value;
            }
            $search_list['style_position']= $style_position;     
        }
        if(isset($_POST['seed_shape']))
        {
            $seed_shape=array();
            foreach($_POST['seed_shape'] as $key=>$value)
            {
                $seed_shape[]=$value;
            }
            $search_list['seed_shape']= $seed_shape;     
        }
        if(isset($_POST['seed_colour']))
        {
            $seed_colour=array();
            foreach($_POST['seed_colour'] as $key=>$value)
            {
                $seed_colour[]=$value;
            }
            $search_list['seed_colour']= $seed_colour;     
        }
        if(isset($_POST['hypocotyl_colour']))
        {
            $hypocotyl_colour=array();
            foreach($_POST['hypocotyl_colour'] as $key=>$value)
            {
                $hypocotyl_colour[]=$value;
            }
            $search_list['hypocotyl_colour']= $hypocotyl_colour;     
        }
        if(isset($_POST['hypocotyl_colour_intensity']))
        {
            $hypocotyl_colour_intensity=array();
            foreach($_POST['hypocotyl_colour_intensity'] as $key=>$value)
            {
                $hypocotyl_colour_intensity[]=$value;
            }
            $search_list['hypocotyl_colour_intensity']= $hypocotyl_colour_intensity;     
        }
        if(isset($_POST['hypocotyl_pubescence']))
        {
            $hypocotyl_pubescence=array();
            foreach($_POST['hypocotyl_pubescence'] as $key=>$value)
            {
                $hypocotyl_pubescence[]=$value;
            }
            $search_list['hypocotyl_pubescence']= $hypocotyl_pubescence;     
        }
        if(isset($_POST['plant_growth_type']))
        {
            $plant_growth_type=array();
            foreach($_POST['plant_growth_type'] as $key=>$value)
            {
                $plant_growth_type[]=$value;
            }
            $search_list['plant_growth_type']= $plant_growth_type;     
        }
        ?>
        <input type="hidden" id="search_list" value='<?php echo json_encode($search_list); ?>'>
    
</body>
</html>
<script>
$('.btn-send').click(function(){
    var id = $(this).attr('data-id');
    $("#id_fact_tomato").val(id);
    $('#send_id').submit();
});
</script>
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
// if(search_list['stem_internode_length'])
// {
//     $('#search_by').append(' Stem internode length : ');
//     for(i =0 ;i<search_list['stem_internode_length'].length;i++)
//     {
//         if(i>0)
//         {
//             $('#search_by').append(', ');
//         }
//         $('#search_by').append('<span class="red"> '+search_list['stem_internode_length'][i]+' </span>');
//     }
  
//     item++;
// }
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
    $('#search_by').append(' Fruit Weight (g): ');
    for(i =0 ;i<search_list['fruit_weight_g'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(' - ');
        }
        $('#search_by').append('<span class="red"> '+search_list['fruit_weight_g'][i]+' </span>');
    }
  
    item++;
}
if(search_list['stem_internode_length'])
{
    $('#search_by').append(' Stem internode length (cm) : ');
    for(i =0 ;i<search_list['stem_internode_length'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(' - ');
        }
        $('#search_by').append('<span class="red"> '+search_list['stem_internode_length'][i]+' </span>');
    }
  
    item++;
}
if(search_list['number_of_days_to_flowering'])
{
    $('#search_by').append(' Number of days to flowering : ');
    for(i =0 ;i<search_list['number_of_days_to_flowering'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(' - ');
        }
        $('#search_by').append('<span class="red"> '+search_list['number_of_days_to_flowering'][i]+' </span>');
    }
  
    item++;
}
if(search_list['number_of_flowers_per'])
{
    $('#search_by').append(' Number of flowers : ');
    for(i =0 ;i<search_list['number_of_flowers_per'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(' - ');
        }
        $('#search_by').append('<span class="red"> '+search_list['number_of_flowers_per'][i]+' </span>');
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
if(search_list['exterior_colour_of_mature_fruit'])
{
    $('#search_by').append(' Exterior color of mature fruit : ');
    for(i =0 ;i<search_list['exterior_colour_of_mature_fruit'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['exterior_colour_of_mature_fruit'][i]+' </span>');
    }
  
    item++;
}
if(search_list['predominant_fruit_shape'])
{
    $('#search_by').append(' Predominant fruit shape : ');
    for(i =0 ;i<search_list['predominant_fruit_shape'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['predominant_fruit_shape'][i]+' </span>');
    }
  
    item++;
}
if(search_list['intensity_of_greenback'])
{
    $('#search_by').append(' Intensity of greenback : ');
    for(i =0 ;i<search_list['intensity_of_greenback'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['intensity_of_greenback'][i]+' </span>');
    }
  
    item++;
}
if(search_list['fruit_shoulder_shape'])
{
    $('#search_by').append(' Fruit shoulder shape : ');
    for(i =0 ;i<search_list['fruit_shoulder_shape'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['fruit_shoulder_shape'][i]+' </span>');
    }
  
    item++;
}
if(search_list['easiness_of_fruit_to_detach_from_pedicel'])
{
    $('#search_by').append(' Easiness of fruit to detach from the pedicel : ');
    for(i =0 ;i<search_list['easiness_of_fruit_to_detach_from_pedicel'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['easiness_of_fruit_to_detach_from_pedicel'][i]+' </span>');
    }
  
    item++;
}
if(search_list['easiness_of_fruit_wall_skin_to_be_peeled'])
{
    $('#search_by').append(' Easiness of fruit wall to be peeled : ');
    for(i =0 ;i<search_list['easiness_of_fruit_wall_skin_to_be_peeled'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['easiness_of_fruit_wall_skin_to_be_peeled'][i]+' </span>');
    }
  
    item++;
}
if(search_list['fruit_blossom_end_shape'])
{
    $('#search_by').append(' Fruit blossom end shape : ');
    for(i =0 ;i<search_list['fruit_blossom_end_shape'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['fruit_blossom_end_shape'][i]+' </span>');
    }
  
    item++;
}
if(search_list['shape_of_pistil_scar'])
{
    $('#search_by').append(' Shape of pistil scar : ');
    for(i =0 ;i<search_list['shape_of_pistil_scar'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['shape_of_pistil_scar'][i]+' </span>');
    }
  
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
if(search_list['corolla_colour'])
{
    $('#search_by').append(' Corolla colour : ');
    for(i =0 ;i<search_list['corolla_colour'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['corolla_colour'][i]+' </span>');
    }
  
    item++;
}
if(search_list['style_position'])
{
    $('#search_by').append(' Style position : ');
    for(i =0 ;i<search_list['style_position'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['style_position'][i]+' </span>');
    }
  
    item++;
}
if(search_list['seed_shape'])
{
    $('#search_by').append(' Seed shape : ');
    for(i =0 ;i<search_list['seed_shape'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['seed_shape'][i]+' </span>');
    }
  
    item++;
}
if(search_list['seed_colour'])
{
    $('#search_by').append(' Seed colour : ');
    for(i =0 ;i<search_list['seed_colour'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['seed_colour'][i]+' </span>');
    }
  
    item++;
}
if(search_list['hypocotyl_colour'])
{
    $('#search_by').append(' Hypocotyl colour : ');
    for(i =0 ;i<search_list['hypocotyl_colour'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['hypocotyl_colour'][i]+' </span>');
    }
  
    item++;
}
if(search_list['hypocotyl_colour_intensity'])
{
    $('#search_by').append(' Hypocotyl colour intensity : ');
    for(i =0 ;i<search_list['hypocotyl_colour_intensity'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['hypocotyl_colour_intensity'][i]+' </span>');
    }
  
    item++;
}
if(search_list['hypocotyl_pubescence'])
{
    $('#search_by').append(' Hypocotyl pubescence : ');
    for(i =0 ;i<search_list['hypocotyl_pubescence'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['hypocotyl_pubescence'][i]+' </span>');
    }
  
    item++;
}
if(search_list['plant_growth_type'])
{
    $('#search_by').append(' Plant growth type : ');
    for(i =0 ;i<search_list['plant_growth_type'].length;i++)
    {
        if(i>0)
        {
            $('#search_by').append(', ');
        }
        $('#search_by').append('<span class="red"> '+search_list['plant_growth_type'][i]+' </span>');
    }
  
    item++;
}
if(item==0)
{
    $('#search_by').append(' Accession Number : <span class="red"> All </span>');
}
</script>
<?php
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
function get_id($name_table,$id_table)
{
        $con = ConDb::getInstance();
        $sql = "SELECT id_$name_table FROM $name_table WHERE $name_table='$id_table'";
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
function search()
    {
        
    
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
            // if(isset($_POST['stem_internode_length']))
            // {
            //     foreach($_POST['stem_internode_length'] as $value)
            //     {
            //         if($i != 0)
            //         {
            //             $where .= " || ";
            //         }
            //         if($value == 'short')
            //         {
            //             $where .= "cha_data_tomato.stem_internode_length < '7'";
            //         }
            //         if($value == 'intermediate')
            //         {   
            //             $where .= "cha_data_tomato.stem_internode_length >='7' AND cha_data_tomato.stem_internode_length <='8'";
            //         }
            //         if($value == 'long')
            //         {
            //             $where .= "cha_data_tomato.stem_internode_length > '8'";
            //         }
            //         $i++;
            //     }   

            //     $i=0;
            //     $where .= ' AND ';
            // }
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
                $tmp =$_POST['fruit_weight_g'];
                $val =explode(",",$tmp);
                $where .= "cha_data_tomato.fruit_weight_g BETWEEN ".$val[0]." AND ".$val[1];
                $where .= ' AND ';
            }
            if(isset($_POST['stem_internode_length']))
            {
                $tmp =$_POST['stem_internode_length'];
                $val =explode(",",$tmp);
                $where .= "cha_data_tomato.stem_internode_length BETWEEN ".$val[0]." AND ".$val[1];
                $where .= ' AND ';
            }
            // if(isset($_POST['number_of_days_to_flowering']))
            // {
            //     $tmp =$_POST['number_of_days_to_flowering'];
            //     $val =explode(",",$tmp);
            //     $where .= "cha_data_tomato.number_of_days_to_flowering BETWEEN ".$val[0]." AND ".$val[1];
            //     $where .= ' AND ';
            // }
            if(isset($_POST['number_of_flowers_per']))
            {
                $tmp =$_POST['number_of_flowers_per'];
                $val =explode(",",$tmp);
                $where .= "cha_data_tomato.number_of_flowers_per BETWEEN ".$val[0]." AND ".$val[1];
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
                    if(get_id('fruit_size',$value))
                    {
                        
                        $id = get_id('fruit_size',$value);
                        
                        $id=$id[0]['id_fruit_size'];
                    }                    
                        $where .= "cha_data_tomato.id_fruit_size = '$id'";
                    $i++;
                }
                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['exterior_colour_of_mature_fruit']))
            {
                foreach($_POST['exterior_colour_of_mature_fruit'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    if(get_id('exterior_colour_of_mature_fruit',$value))
                    {
                        
                        $id = get_id('exterior_colour_of_mature_fruit',$value);
                        
                        $id=$id[0]['id_exterior_colour_of_mature_fruit'];
                    }                    
                        $where .= "cha_data_tomato.id_exterior_colour_of_mature_fruit = '$id'";
                    $i++;
                }
                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['predominant_fruit_shape']))
            {
                foreach($_POST['predominant_fruit_shape'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    if(get_id('predominant_fruit_shape',$value))
                    {
                        
                        $id = get_id('predominant_fruit_shape',$value);
                        
                        $id=$id[0]['id_predominant_fruit_shape'];
                    }                    
                        $where .= "cha_data_tomato.id_predominant_fruit_shape = '$id'";
                    $i++;
                }
                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['intensity_of_greenback']))
            {
                foreach($_POST['intensity_of_greenback'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    if(get_id('intensity_of_greenback',$value))
                    {
                        
                        $id = get_id('intensity_of_greenback',$value);
                        
                        $id=$id[0]['id_intensity_of_greenback'];
                    }                    
                        $where .= "cha_data_tomato.id_intensity_of_greenback = '$id'";
                    $i++;
                }
                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['fruit_shoulder_shape']))
            {
                foreach($_POST['fruit_shoulder_shape'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    if(get_id('fruit_shoulder_shape',$value))
                    {
                        
                        $id = get_id('fruit_shoulder_shape',$value);
                        
                        $id=$id[0]['id_fruit_shoulder_shape'];
                    }                    
                        $where .= "cha_data_tomato.id_fruit_shoulder_shape = '$id'";
                    $i++;
                }
                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['easiness_of_fruit_to_detach_from_pedicel']))
            {
                foreach($_POST['easiness_of_fruit_to_detach_from_pedicel'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    if(get_id('easiness_of_fruit_to_detach_from_pedicel',$value))
                    {
                        
                        $id = get_id('easiness_of_fruit_to_detach_from_pedicel',$value);
                        
                        $id=$id[0]['id_easiness_of_fruit_to_detach_from_pedicel'];
                    }                    
                        $where .= "cha_data_tomato.id_easiness_of_fruit_to_detach_from_pedicel = '$id'";
                    $i++;
                }
                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['easiness_of_fruit_wall_skin_to_be_peeled']))
            {
                foreach($_POST['easiness_of_fruit_wall_skin_to_be_peeled'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    if(get_id('easiness_of_fruit_wall_skin_to_be_peeled',$value))
                    {
                        
                        $id = get_id('easiness_of_fruit_wall_skin_to_be_peeled',$value);
                        
                        $id=$id[0]['id_easiness_of_fruit_wall_skin_to_be_peeled'];
                    }                    
                        $where .= "cha_data_tomato.id_easiness_of_fruit_wall_skin_to_be_peeled = '$id'";
                    $i++;
                }
                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['fruit_blossom_end_shape']))
            {
                foreach($_POST['fruit_blossom_end_shape'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    if(get_id('fruit_blossom_end_shape',$value))
                    {
                        
                        $id = get_id('fruit_blossom_end_shape',$value);
                        
                        $id=$id[0]['id_fruit_blossom_end_shape'];
                    }                    
                        $where .= "cha_data_tomato.id_fruit_blossom_end_shape = '$id'";
                    $i++;
                }
                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['shape_of_pistil_scar']))
            {
                foreach($_POST['shape_of_pistil_scar'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    if(get_id('shape_of_pistil_scar',$value))
                    {
                        
                        $id = get_id('shape_of_pistil_scar',$value);
                        
                        $id=$id[0]['id_shape_of_pistil_scar'];
                    }                    
                        $where .= "cha_data_tomato.id_shape_of_pistil_scar = '$id'";
                    $i++;
                }
                $i=0;
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
                    if(get_id('stem_pubescence_density',$value))
                    {
                        
                        $id = get_id('stem_pubescence_density',$value);
                        
                        $id=$id[0]['id_stem_pubescence_density'];
                    }                    
                        $where .= "cha_data_tomato.id_stem_pubescence_density = '$id'";
                    $i++;
                }
                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['corolla_colour']))
            {
                foreach($_POST['corolla_colour'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    if(get_id('corolla_colour',$value))
                    {
                        
                        $id = get_id('corolla_colour',$value);
                        
                        $id=$id[0]['id_corolla_colour'];
                    }                    
                        $where .= "cha_data_tomato.id_corolla_colour = '$id'";
                    $i++;
                }
                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['style_position']))
            {
                foreach($_POST['style_position'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    if(get_id('style_position',$value))
                    {
                        
                        $id = get_id('style_position',$value);
                        
                        $id=$id[0]['id_style_position'];
                    }                    
                        $where .= "cha_data_tomato.id_style_position = '$id'";
                    $i++;
                }
                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['seed_shape']))
            {
                foreach($_POST['seed_shape'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    if(get_id('seed_shape',$value))
                    {
                        
                        $id = get_id('seed_shape',$value);
                        
                        $id=$id[0]['id_seed_shape'];
                    }                    
                        $where .= "cha_data_tomato.id_seed_shape = '$id'";
                    $i++;
                }
                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['seed_colour']))
            {
                foreach($_POST['seed_colour'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    if(get_id('seed_colour',$value))
                    {
                        
                        $id = get_id('seed_colour',$value);
                        
                        $id=$id[0]['id_seed_colour'];
                    }                    
                        $where .= "cha_data_tomato.id_seed_colour = '$id'";
                    $i++;
                }
                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['hypocotyl_colour']))
            {
                foreach($_POST['hypocotyl_colour'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    if(get_id('hypocotyl_colour',$value))
                    {
                        
                        $id = get_id('hypocotyl_colour',$value);
                        
                        $id=$id[0]['id_hypocotyl_colour'];
                    }                    
                        $where .= "cha_data_tomato.id_hypocotyl_colour = '$id'";
                    $i++;
                }
                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['hypocotyl_colour_intensity']))
            {
                foreach($_POST['hypocotyl_colour_intensity'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    if(get_id('hypocotyl_colour_intensity',$value))
                    {
                        
                        $id = get_id('hypocotyl_colour_intensity',$value);
                        
                        $id=$id[0]['id_hypocotyl_colour_intensity'];
                    }                    
                        $where .= "cha_data_tomato.id_hypocotyl_colour_intensity = '$id'";
                    $i++;
                }
                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['hypocotyl_pubescence']))
            {
                foreach($_POST['hypocotyl_pubescence'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    if(get_id('hypocotyl_pubescence',$value))
                    {
                        
                        $id = get_id('hypocotyl_pubescence',$value);
                        
                        $id=$id[0]['id_hypocotyl_pubescence'];
                    }                    
                        $where .= "cha_data_tomato.id_hypocotyl_pubescence = '$id'";
                    $i++;
                }
                $i=0;
                $where .= ' AND ';
            }
            if(isset($_POST['plant_growth_type']))
            {
                foreach($_POST['plant_growth_type'] as $value)
                {
                    if($i != 0)
                    {
                        $where .= " || ";
                    }
                    if(get_id('plant_growth_type',$value))
                    {
                        
                        $id = get_id('plant_growth_type',$value);
                        
                        $id=$id[0]['id_plant_growth_type'];
                    }                    
                        $where .= "cha_data_tomato.id_plant_growth_type = '$id'";
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
        $sql = "SELECT * FROM `cha_data_tomato` $where_new ORDER BY id_accession_number";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $result[0] = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $result[1] =$stmt->rowCount();
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