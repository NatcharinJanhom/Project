<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php'); ?>

    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.17/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.2.5/css/fixedColumns.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.1/js/dataTables.fixedColumns.min.js"></script>
</head>
<style>
    .card.item {
        border: 1px solid #ff0017;

    }

    .accordion.basic-accordion .card .card-header a[aria-expanded="true"],
    .accordion.basic-accordion .card .card-header a[aria-expanded="false"] {
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

    #data_info {
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

    .image {
        max-height: 160px;
        max-width: 160px;
        width: 100%;
        height: 100%;
    }

    .margin0 {
        margin-bottom: 0;
    }

    .card .card-body.unpad {
        padding: 0px;
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 0px;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
        background: #ff6258;
    }

    .tab-simple-styled .nav-item .nav-link.active {

        border-top: 1px solid #f12222;
        border-right: 1px solid #f12222;
        border-left: 1px solid #f12222;
        border-bottom: none;
        color: red;
    }

    .tab-simple-styled .nav-item .nav-link,
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

    a,
    a:hover {
        text-decoration: none;
        color: #f12222;
    }

    .red {
        color: #f12222;
    }

    .breadcrumb {
        margin-bottom: 0rem;
    }

    .card .card-body.top {
        padding: 0rem;
    }

    .right {
        text-align: right;
    }

    table tr td {
        height: 30px !important;
    }

    table.dataTable tbody td {
        padding: 5px 5px 5px 10px;
    }

    .table td img {
        border-radius: 100%;
        max-height: 100px;
        max-width: 100px;
        width: 100%;
        height: 100%;
    }

    table tr td img,
    table tr td.imge {
        height: 100px !important;
        width: 100px !important;
        text-align: center !important;
    }

    @media (min-width: 992px) {
        .sidebar-icon-only .main-panel {
            width: calc(100% - 75px);
        }
    }

    .accordion.accordion-body-filled .card .card-header a {
        padding: 0.56rem 1.375rem;
        font-weight: 300;
    }

    .accordion .card .card-header a {
        display: block;
        padding: 0.1rem 1.00rem 0.1rem 1.00rem;
        color: #424964;
        text-decoration: none;
        font-size: 0.875rem;
        position: relative;
        font-weight: 600;
        transition-property: border-color, background;
        -webkit-transition-property: border-color, background;
        -webkit-transition-duration: 0.5s;
        transition-duration: 0.5s;
        text-overflow: ellipsis;
        overflow: hidden;
        max-width: 100%;
        white-space: nowrap;
    }

    .addB.collapsed {
        width: 264px;
    }

    table {
        width: 800px;
    }

    .accordion.accordion-body-filled .card .card-header a:before {
        top: unset;
        font-size: 15px;
    }

    .table td img.mo {
        max-height: 60px;
        max-width: 60px;
    }

    .p-4 {
        padding: 0rem !important;
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
                    <h5>Data owner & Data share</h5>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <label>Data owner</label>

                                    <table id="owner" class="table  table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Accession number</th>
                                                <th>Status</th>
                                                <th>Share</th>
                                                <th>
                                                    <i class="mdi mdi-account-plus" data-name="mdi-account-plus"></i>Add /
                                                    <i class="mdi mdi-account-minus" data-name="mdi-account-minus"></i>Remove</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                      
                                      $asses = search_ass(); //search qurey ว่า ผู้ใช้คนที่ล็อกอิน มึขณะนั้นเป็นเจ้าของสายพันธุ์ไหนบ้าง
                                      echo'<script>console.log('.json_encode($asses).');</script>';
                                      $temp_acc = "test";
                                            foreach($asses as $key=>$value)
                                            {  
                                                ?>
                                            <tr>
                                                <?php
                                                  echo "<td>".$value['accession_number']."</td>";

                                                
                                                if($value['status_ow']== "Public"){
                                                      echo "<td>
                                                      <select class='form-control shared_pub' id='chang_PrPu".$value['accession_number']."' disabled>";
                                                          echo "
                                                                <option value=1>UnPublic</option>
                                                                <option value=0 selected>".$value['status_ow']."</option>   
                                                            </select>
                                                        </td>"; 
                                                      }
                                                else{
                                                      echo "<td>
                                                      <select class='form-control shared_pub' data-acc=".$value['accession_number']." id='chang_PrPu".$value['accession_number']."' >";                                          
                                                      echo "
                                                      <option value=0>Public</option>
                                                      <option value=1 selected>".$value['status_ow']."</option>   </select>
                                                      </td>"; 
                                                      }
                                                if($value['status_sh']=="shared" || $value['status_ow']== "Public"){ 
                                                          echo " <td>
                                                          <p id='status_sh".$value['accession_number']."' value = 'xxx'>yes</p>
                                                      </td>";
                                                } 
                                                else{
                                                          echo " <td>
                                                          <p  id='status_sh".$value['accession_number']."' value = 'xxx'>no</p>
                                                      </td>";
                                                }
                                              ?>
                                                    <td>
                                                        <div class="form-group row">
                                                            <div class='col-md-3'>
                                                           
                                                            <?php
                                                                if($value['status_ow']== "Public")
                                                                {
                                                                    ?>
                                                                        <button id="<?php echo $value['accession_number']?>" data-id-owner="<?php echo $value['id_member']?>" data-fact="<?php echo $value['id_fact_tomato']?>" data-a="<?php echo $value['accession_number']?>" type="button" class="static btn btn-warning" disabled>
                                                                        <i class="mdi mdi-share-variant" data-name="mdi-share-variant"></i>Share</button>
                                                                    <?php
                                                                }
                                                                else
                                                                {
                                                                    ?>
                                                                        <button id="<?php echo $value['accession_number']?>" data-id-owner="<?php echo $value['id_member']?>" data-fact="<?php echo $value['id_fact_tomato']?>" data-a="<?php echo $value['accession_number']?>" type="button" class="static btn btn-warning" >
                                                                        <i class="mdi mdi-share-variant" data-name="mdi-share-variant"></i>Share</button>
                                                                    <?php
                                                                }
                                                            ?>   
                                                            </div>
                                                            
                                                    </td>
                                            </tr>

                                            <?php
                                                
                                            }  
                                                     
                                    ?>

                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <label>Data shared me</label>

                                    <table id="owner_shareMe" class="table  table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Accession number</th>
                                                        <th>Data Owner</th>
                                                        <th>Share date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                    $asses2 = search_user_shared_me();
                                                    if($asses2 != false)
                                                    {

                                                         
                                                        foreach($asses2 as $key2=>$value2)
                                                        {  
                                                ?>
                                                            <tr>
                                                                <?php
                                                                echo "<td>".$value2['accession_number']."</td>";
                                                                echo "<td>".$value2['firstname']."</td>";
                                                                echo "<td>".$value2['date_shared']."</td>";
                                                                ?>
                                                            </tr>   
                                                            <?php      
                                                        } 
                                                    }
                                                    else
                                                    {
                                                        
                                                    }
                                                        ?>            
                                                </tbody>
                                            </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal start -->
                    <div id="static_modal2" class="modal fade">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content" style="width:100% ">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-3 h-100">
                                            <h6 class="card-title">Shared</h6>
                                            <div class="bg-light p-4">
                                                <div id="profile-list-left1" class="py-2">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 h-100" style="padding-top: 3.7%;">
                                            <div class="bg-light p-4">
                                                <div id="profile-list-left2" class="py-2">
                                                    <div class="card rounded mb-2">
                                                        <div class="card-body p-3">
                                                            <div class="media">
                                                                <img src="theme/assets/images/faces/face5.jpg" alt="image" class="img-sm mr-3 rounded-circle">
                                                                <div class="media-body">
                                                                    <h6 class="mb-1 l2_1"></h6>
                                                                    <p class="mb-0 text-muted l2_2"> Date share </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 h-100">
                                            <h6 class="card-title">Unshared</h6>
                                            <div class="bg-light p-4">
                                                <div id="profile-list-right1" class="py-2">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 h-100" style="padding-top: 3.7%;">
                                            <div class="bg-light p-4">
                                                <div id="profile-list-right2" class="py-2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- modal End -->
                    <?php include('footer.php'); ?>
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <script>
            $(document).ready(function () {
                
                var x = 0;
                if (x == 0) {
                    var table = $('#owner').DataTable({
                        paging: false,
                        ordering: false,
                        columnDefs: [
                            { searchable: false, targets: 0 }
                        ]
                    });
                    var table2 = $('#share').DataTable({

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
<!-- start ตัวเก็บค่าเสริช จากคิวรี่ -->
<input type="hidden" id="search_list" value=''>
<!-- end ตัวเก็บค่าเสริช จากคิวรี่ -->
<script>
    $(document).ready(function () {
        // start ปุ่มเปลี่ยนสถานะ จาก public หรือ private เช็คการยืนยัน
        $('.shared_pub').change(function (e) {
            $(this).attr('data-acc');
            var c = $(e)[0].currentTarget.id;
            var le_id =  $(this).attr('data-acc');
            swal({
                text: 'Do you want to chang "Public"  ?',
                icon: 'error',
                buttons: {
                    confirm: {
                        text: "OK",
                        value: true,
                        visible: true,
                        className: "btn btn-danger",
                        closeModal: true
                    },
                    cancel: {
                        text: "Cancel",
                        value: null,
                        visible: true,
                        className: "btn btn-default",
                        closeModal: true,
                    }
                }
            }).then(function (z) {
                 console.log(e);
                if (z) {
                    document.getElementById(c).selectedIndex = 0;
                    document.getElementById(c).disabled = true;  
                    document.getElementById("status_sh"+le_id).innerHTML = "yes";
                    document.getElementById(le_id).disabled = true;
                    var id_owner_Pb = "<?php echo $_SESSION['member']['id_member'];?>";
                    $.ajax({
                        url: "ajax_upSt_owner.php",
                        method: "GET",
                        data: { aj_o:id_owner_Pb , aj_l: le_id },
                        success: function (data) {
                            //alert('success');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(xhr.status);
                            alert(thrownError);
                        }
                    });

                }
                else {
                    document.getElementById(c).selectedIndex = 1;
                }
            });
        });
        // end ปุ่มเปลี่ยนสถานะ จาก public หรือ private เช็คการยืนยัน

        // start evan หลังปิด modal จะโหลด ใหม่หมดเพราะในหน้าหลักมีการตรวจสอบ stastus shared
        $('#static_modal2').on('hidden.bs.modal', function () {
            window.location.reload();
        });
        // end evan หลังปิด modal จะโหลด ใหม่หมดเพราะในหน้าหลักมีการตรวจสอบ stastus shared
        // stared evan เมื่อกดปุ่ม shared จะสร้าง modal สำหรับเลือกคนที่จะ shared
        $(".static").click(function () {
            var Lexx = $(this).attr('data-a');
            var sesio_id = "<?php echo $_SESSION['member']['id_member'];?>";
            $.ajax({
                url: "ajax_shared_Un.php",
                method: "GET",
                data: { LExx: Lexx, User_id: sesio_id },
                success: function (data) 
                {
                    //console.log(data);
                    $('#profile-list-right1').empty();
                    $('#profile-list-left1').empty();
                    $('#profile-list-right2').empty();
                    $('#profile-list-left2').empty();
                    var js2 = data;
                    console.log('Star log___tesst');
                    console.log(js2);
                    console.log('End log___tesst');
                    var i = 0;
                    var tog1 = true;
                    var tog2 = true;
                    for (i = 0; i < js2.length; i++) {
                        if(js2[i]['id_member_owner']!=null)
                        {
                            if (tog1) {
                            $('#profile-list-left1').append('<div class="card rounded mb-2"><div class="card-body p-3"><div class="media"><img  src="theme/assets/images/faces/face5.jpg" alt="image" class="img-sm mr-3 rounded-circle"><div class="media-body"><h6 class="mb-1 f_name">' + js2[i]['firstname'] + '</h6><p  class="mb-0  date-sh ">Date share : ' + js2[i]['date_shared'] + '</p><p  class="mb-0 text-muted  "  data_id_ow=' + js2[i]['id_member_owner'] + ' data_id_sh=' + js2[i]['id_member'] + '></p></div></div></div></div>');
                            tog1 = false;
                            }
                            else {
                                $('#profile-list-left2').append('<div class="card rounded mb-2"><div class="card-body p-3"><div class="media"><img  src="theme/assets/images/faces/face5.jpg" alt="image" class="img-sm mr-3 rounded-circle"><div class="media-body"><h6 class="mb-1 f_name">' + js2[i]['firstname'] + '</h6><p  class="mb-0   date-sh ">Date share : ' + js2[i]['date_shared'] + '</p><p  class="mb-0 text-muted  " data_id_ow=' + js2[i]['id_member_owner'] + ' data_id_sh=' + js2[i]['id_member'] + '></p></div></div></div></div>');
                                tog1 = true;
                            }
                        }
                        else
                        {
                            if (tog2) {
                            $('#profile-list-right1').append('<div class="card rounded mb-2"><div class="card-body p-3"><div class="media"><img  src="theme/assets/images/faces/face5.jpg" alt="image" class="img-sm mr-3 rounded-circle"><div class="media-body"><h6 class="mb-1 f_name">' + js2[i]['firstname'] + '</h6><p  class="mb-0   date-sh "></p><p  class="mb-0 text-muted  " data_id_ow=' + js2[i]['id_member_owner'] + ' data_id_sh=' + js2[i]['id_member'] + '  ></p></div></div></div></div>');
                            tog2 = false;
                            }
                            else {
                                $('#profile-list-right2').append('<div class="card rounded mb-2"><div class="card-body p-3"><div class="media"><img  src="theme/assets/images/faces/face5.jpg" alt="image" class="img-sm mr-3 rounded-circle"><div class="media-body"><h6 class="mb-1 f_name">' + js2[i]['firstname'] + '</h6><p  class="mb-0   date-sh "></p><p  class="mb-0 text-muted  " data_id_ow=' + js2[i]['id_member_owner'] + ' data_id_sh=' + js2[i]['id_member'] + '></p></div></div></div></div>');
                                tog2 = true;
                            }
                        }
                        
                    }
                    
                }
            });
            // end evan เมื่อกดปุ่ม shared จะสร้าง modal สำหรับเลือกคนที่จะ shared

            $("#static_modal2").modal('show');
        });
    });


</script>



<script>
    'use strict';

    var shareTochange,shareTochangeUn;
    var d = new Date();
    var date_sh = (d.getFullYear()) + '-' + (d.getMonth() + 1) + '-' + d.getDate();
    var id_fa,id_m_o,id_m_s,LE;
    $(document).ready(function () {
        $(".static").click(function () {
            LE = $(this).attr('data-a');
            id_fa = $(this).attr('data-fact');
            id_m_o = $(this).attr('data-id-owner');
        });
    });
    dragula([document.getElementById("profile-list-left1"), document.getElementById("profile-list-right1"), document.getElementById("profile-list-left2"), document.getElementById("profile-list-right2")])
        .on('drop', function (el) {
            shareTochange = $(el).find('.text-muted');
            shareTochangeUn = $(el).find('.date-sh');
           // console.log(shareTochangeUn[0].outerText);
            //console.log($($(el)[0].parentNode)[0].id);
            id_m_s = shareTochange[0].attributes[2].value;
            console.log( shareTochange);
            if(( $($(el)[0].parentNode)[0].id =='profile-list-right1' || $($(el)[0].parentNode)[0].id =='profile-list-right2') && shareTochangeUn[0].outerText !='')
            {
                console.log('if1');
                console.log(id_fa+' '+id_m_o+' '+id_m_s+' '+LE+' '+date_sh+' ');
                $.ajax({
                        url: "ajax_changNSH.php",
                        method: "GET",
                        data: { aj_f: id_fa, aj_o: id_m_o, aj_s: id_m_s, aj_l: LE, aj_d: date_sh },
                        success: function (data) {

                        },
                        error: function () {
                            alert('failure');
                        }
                    });
                shareTochangeUn.empty();
            }
            else if(shareTochangeUn[0].outerText == '' && ( $($(el)[0].parentNode)[0].id =='profile-list-left2' || $($(el)[0].parentNode)[0].id =='profile-list-left1') ) //ย้ายซ้ายไปขวา sh -> Unsh
            {
                console.log('if2');
                console.log(id_fa+' '+id_m_o+' '+id_m_s+' '+LE+' '+date_sh+' ');
                $(shareTochangeUn).append('Date share : ' + date_sh + '');
                $.ajax({
                        url: "ajax_changSH.php",
                        method: "GET",
                        data: { aj_f: id_fa, aj_o: id_m_o, aj_s: id_m_s, aj_l: LE, aj_d: date_sh },
                        success: function (data) {
                            //alert('success');
                        },
                        error: function () {
                            alert('failure');
                        }
                    });
            }     
        });

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
    /////// start มีครอบครองกี่่ LE และ LE อะไรบ้าง
function search_ass()
    {
        unset($where);
        unset($where_new);
      
        $i=0; 
        $user_c = $_SESSION['member']['id_member'];
        $where = "WHERE data_owner.id_member ='$user_c'";
        //$where ="";
        $length_w = strlen($where);
        $where_new = substr($where, 0, -5);
        $con = ConDb::getInstance();
                // $sql = "SELECT * FROM
                // (SELECT data_owner.status_ow,data_owner.id_member,data_owner.accession_number AS acc FROM data_owner $where)AS t1
                // LEFT JOIN data_shared ON data_shared.id_member_owner = t1.id_member AND data_shared.accession_number = t1.acc
                // GROUP BY data_shared.id_member_owner,data_shared.accession_number,data_shared.date_shared
                // ORDER BY data_shared.id_member_owner DESC,data_shared.accession_number DESC,data_shared.date_shared DESC";
                $sql = "SELECT data_owner.id_member,data_owner.accession_number,data_owner.id_fact_tomato,data_shared.status_sh,data_owner.status_ow FROM 
                (SELECT max(id_data_shared) AS max_id,data_shared.accession_number AS acc_n FROM `data_shared` WHERE data_shared.id_member_owner = '$user_c' 
                GROUP BY data_shared.accession_number)AS t1
                INNER JOIN data_shared ON t1.max_id = data_shared.id_data_shared
                RIGHT JOIN data_owner ON data_owner.accession_number  = data_shared.accession_number
                WHERE  data_owner.id_member = '$user_c'
                GROUP BY data_owner.accession_number";
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
    //////// end มีครอบครองกี่่ LE และ LE อะไรบ้าง
       /////// start มีครอบครองกี่่ LE และ LE อะไรบ้าง
function search_user_shared_me()
{
    $user_c = $_SESSION['member']['id_member'];
    $con = ConDb::getInstance();
            $sql = "SELECT data_shared.id_member_owner,data_shared.id_member_shared,data_shared.accession_number,data_shared.id_fact_tomato,data_shared.date_shared,member.id_member,member.firstname FROM
            (	SELECT max(data_shared.id_data_shared)AS max_id FROM data_shared 
                WHERE data_shared.id_member_shared = '$user_c' 
                 GROUP BY data_shared.accession_number,data_shared.id_member_shared
             ) r
             INNER JOIN 
             data_shared ON data_shared.id_data_shared = r.max_id AND data_shared.status_sh!='Unshared'
              LEFT JOIN member ON member.id_member = data_shared.id_member_owner
              WHERE  member.id_member != '$user_c'";
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
//////// end มีครอบครองกี่่ LE และ LE อะไรบ้าง
    ?>