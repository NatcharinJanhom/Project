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
.accordion.accordion-body-filled .card .card-header a {
     padding:0.56rem 1.375rem; 
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
.addB.collapsed
{
    width: 264px;
}
table 
{
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
    padding: 0rem !important; }
  </style>
  <body class="sidebar-icon-only">
    <div class="container-scroller">
    <?php include('navbar.php'); ?>   
      <div class="container-fluid page-body-wrapper">        
      <?php include('sidebar.php'); ?>    
        <div class="main-panel">
            <div class="content-wrapper">
            <!-- หน้าเว็บ -->
                <h5 >Data owner & Data share</h5>
                <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                            <label>Data owner</label>
                           
                            <table id="owner" class="table  table-striped table-bordered" >
                                <thead>  
                                    <tr>
                                        <th>Accession number</th>
                                        <th>Status</th>
                                        <th>Share</th>
                                        <th><i class="mdi mdi-account-plus" data-name="mdi-account-plus"></i>Add / <i class="mdi mdi-account-minus" data-name="mdi-account-minus"></i>Remove</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                      $asses = search_ass();
                                           
                                            foreach($asses as $key=>$value)
                                            {
                                                ?><tr><?php
                                                  echo "<td>".$value['accession_number']."</td>";

                                                
                                                if($value['status_ow']== "Public"){
                                                      echo "<td>
                                                      <select class='form-control' id='permis2'>";
                                                          echo "
                                                                <option value=UnPublic>UnPublic</option>
                                                                <option value=Public selected>".$value['status_ow']."</option>   
                                                            </select>
                                                        </td>"; 
                                                      }
                                                else{
                                                      echo "<td>
                                                      <select class='form-control' id='permis2'>";                                          
                                                      echo "
                                                      <option value=Public>Public</option>
                                                      <option value=UnPublic selected>".$value['status_ow']."</option>   </select>
                                                      </td>"; 
                                                      }
                                                if($value['id_member_shared']!=null){ 
                                                          echo " <td>
                                                          <label >yes</lable>
                                                      </td>";
                                                } 
                                                else{
                                                          echo " <td>
                                                          <label >no</lable>
                                                      </td>";
                                                }

                                              //////////////////////////////////////////////////////  
                                              ?>
                                              <td>
                                              <div class="form-group row">
                                                  <div class='col-md-3'>
                                                  <button id="<?php echo $value['accession_number']?>" data-a ="<?php echo $value['accession_number']?>" type="button" class="static btn btn-warning"><i class="mdi mdi-share-variant" data-name="mdi-share-variant"></i>Share</button>
                                                  </div>
                                                  <div class='col-md-9' >
                                                  <div class="accordion accordion-body-filled" id="accordion-9" role="tablist">
                                                  <div class="card">
                                                    <div class="card-header" role="tab" id="headingOne-9">
                                                      <h1 class="mb-0">
                                                        <a data-toggle="collapse" href="#collapseOne-9" aria-expanded="false" aria-controls="collapseOne-9" > shared all users</a>
                                                      </h1>
                                                    </div>
                                                    <div id="collapseOne-9" class="collapse" role="tabpanel" aria-labelledby="headingOne-9" data-parent="#accordion-9">
                                                      <div class="card-body">Madeena , Jump  </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                </div>
                                                </div>  
                                              </td>
                                              <?php
                                              
                                                //////////////////////////////////////////////////////

                                                ?></tr>
                                                
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
                            <label>Data share</lable>
                            <table id="share" class="table  table-bordered" style="width:600px ">
                                <thead>  
                                    <tr>
                                        <th>Accession number</th>
                                        <th>Data Owner</th>
                                        <th>Share date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>LE007</td>    
                                        <td>
                                            <label>Asree</lable>
                                        </td>
                                        <td>10 / 6 / 2561</td> 
                                    </tr>
                                    <tr>
                                        <td>LE008</td>    
                                        <td>
                                            <label>Fiw</lable>
                                        </td>
                                        <td>10 / 2 / 2561</td> 
                                    </tr>
                                    <tr>
                                        <td>LE009</td>    
                                        <td>
                                            <label>Ton</lable>
                                        </td>
                                        <td>10 / 7 / 2561</td> 
                                    </tr>
                                    <tr>
                                        <td>LE0010</td>    
                                        <td>
                                            <label>Jump</lable>
                                        </td>
                                        <td>10 / 6 / 2561</td> 
                                    </tr>
                                    <tr>
                                        <td>LE0011</td>    
                                        <td>
                                            <label>Lek</lable>
                                        </td>
                                        <td>10 / 8 / 2561</td> 
                                    </tr>
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
                      <h6 class="card-title" >Shared</h6>
                        <div class="bg-light p-4">     
                            <div id="profile-list-left1" class="py-2">
                                    
                            </div>
                        </div>
                      </div>
                       

                      <div class="col-md-3 h-100" style = "padding-top: 3.7%;">
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
                      <div class="col-md-3 h-100" style = "padding-top: 3.7%;">
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
    <script >
              $(document).ready(function () {   
                        var x = 0;                          
                                         if (x==0){
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
          <input type="hidden" id="search_list" value=''>
          <input type="text" id="test_1" name="test_2" value='ssss' >
<script >

$(document).ready(function() { 
    $('#static_modal2').on('hidden.bs.modal', function () {
        window.location.reload();
    })
    $(".static").click(function() {
        var Lexx = $(this).attr('data-a');
        var sesio_name = "<?php echo $_SESSION['member']['username'];?>";
        $.ajax({
                    url: "ajax_unshared.php",
                    method: "GET",
                    data: { LExx: Lexx , User_n: sesio_name},
                    success: function(data)
                    {
                                   //console.log(data);
                                    $('#profile-list-right1').empty();
                                    $('#profile-list-right2').empty();
                                        var js2 = data;
                                        console.log('log___right');
                                        console.log(js2);
                                        var i = 0;
                                        var tog = true;
                                        for (i=0 ;i<js2.length;i++)
                                        {
                                        //console.log(i+' '+js[i]['accession_number']);
                                                if (tog)
                                                {
                                                            $('#profile-list-right1').append('<div class="card rounded mb-2"><div class="card-body p-3"><div class="media"><img  src="theme/assets/images/faces/face5.jpg" alt="image" class="img-sm mr-3 rounded-circle"><div class="media-body"><h6 class="mb-1 l1_1">'+js2[i]['firstname']+'</h6><p  class="mb-0 text-muted l1_1 " data_id_mem='+js2[i]['id_member']+'></p></div></div></div></div>'); 
                                                        tog = false;
                                                }
                                                else
                                                {
                                                            $('#profile-list-right2').append('<div class="card rounded mb-2"><div class="card-body p-3"><div class="media"><img  src="theme/assets/images/faces/face5.jpg" alt="image" class="img-sm mr-3 rounded-circle"><div class="media-body"><h6 class="mb-1 l1_1">'+js2[i]['firstname']+'</h6><p  class="mb-0 text-muted l1_1 " data_id_mem='+js2[i]['id_member']+'></p></div></div></div></div>'); 
                                                        tog = true;
                                                }  
                                        }
                    }
                });
        <?php $search_list = search() ?>
       $("#search_list").val('');
       $("#search_list").val('<?php echo json_encode($search_list); ?>');
       $('#profile-list-left1').empty();
       $('#profile-list-left2').empty();
       var search_list2 = $('#search_list').val();
        //console.log(search_list['accession_number']);
        var js = JSON.parse(search_list2);
        console.log('log ----left');
        console.log(js);
        var i = 0;
        var sh = $(this).attr('data-a');
        //console.log('len'+js.length);
        var tog = true;
        for (i=0 ;i<js.length;i++)
        {
           //console.log(i+' '+js[i]['accession_number']);
           if(js[i]['accession_number'] == sh && js[i]['status_sh'] != "Unshared" && js[i]['status_sh'] != null)
           {
                  if (tog)
                  {
                              $('#profile-list-left1').append('<div class="card rounded mb-2"><div class="card-body p-3"><div class="media"><img  src="theme/assets/images/faces/face5.jpg" alt="image" class="img-sm mr-3 rounded-circle"><div class="media-body"><h6 class="mb-1 l1_1">'+js[i]['firstname']+'</h6><p  class="mb-0 text-muted l1_1" data_id_mem_on='+js[i]['mem_sh']+' data_id_mem='+js[i]['id_member_shared']+' data_id_fa='+js[i]['id_fact_tomato']+' data_id_fa='+js[i]['id_fact_tomato']+' data_id_acc='+js[i]['accession_number']+' >Date share : '+js[i]['date_shared']+'</p></div></div></div></div>'); 
                        tog = false;
                  }
                  else
                  {
                              $('#profile-list-left2').append('<div class="card rounded mb-2"><div class="card-body p-3"><div class="media"><img  src="theme/assets/images/faces/face5.jpg" alt="image" class="img-sm mr-3 rounded-circle"><div class="media-body"><h6 class="mb-1 l1_1">'+js[i]['firstname']+'</h6><p  class="mb-0 text-muted l1_1" data_id_mem_on='+js[i]['mem_sh']+' data_id_mem='+js[i]['id_member_shared']+' data_id_fa='+js[i]['id_fact_tomato']+' data_id_fa='+js[i]['id_fact_tomato']+' data_id_acc='+js[i]['accession_number']+' >Date share : '+js[i]['date_shared']+'</p></div></div></div></div>'); 
                        tog = true;
                  }
          }        
        }

      
        $("#static_modal2").modal('show');
    });
} );


	</script>



<script >

'use strict';
    var iconTochange;
    var shareTochange;
    var d = new Date();
    var date_sh =(d.getFullYear()+543)+'/'+(d.getMonth()+1)+'/'+d.getDate();
    //var date_sh_ =d.getDate()+'/'+(d.getMonth()+1)+'/'+(d.getFullYear()+543);
   //alert(date_sh);
    var Lexx2 ='';
    $(document).ready(function() { 
    $(".static").click(function() {
         Lexx2 = $(this).attr('data-a');
    });
    } );
    dragula([document.getElementById("profile-list-left1"), document.getElementById("profile-list-right1"), document.getElementById("profile-list-left2"), document.getElementById("profile-list-right2")])
      .on('drop', function(el) {
        //alert(el.parentElement.id);
       //console.log($(el));
       shareTochange = $(el).find('.text-muted');
       
       var xx = el.parentElement.id;
       var key = Object.keys(shareTochange)[0];
       var value = shareTochange[key].innerHTML;
       if(xx == "profile-list-right1" || xx =="profile-list-right2")
       {
            if((value).length>5)
            {
                console.log(shareTochange);
                var id_m_o = shareTochange[0].attributes.data_id_mem_on.nodeValue; 
                var id_m = shareTochange[0].attributes.data_id_mem.nodeValue; 
                var id_a = shareTochange[0].attributes.data_id_acc.nodeValue; 
                $.ajax({
                      url: "ajax_changNSH.php",
                      method: "GET",
                      data: {id_m_oJ:id_m_o,id_mJ:id_m,id_aJ:id_a},
                      success: function(data)
                      {
                                
                      },
                        error: function(){
                            alert('failure');
                        }
                  });
                shareTochange.empty();
            }
           
       }
        if(xx == "profile-list-left1" || xx =="profile-list-left2")
       {
            
           
            var Lexx3 = Lexx2;
            var search_list2 = $('#search_list').val();
            var js = JSON.parse(search_list2);
            console.log(js);
            if((value).length<5)
            {
                var id_mem_ow = js[0]['mem_sh'];
                var data_idMem_sh = shareTochange[0].attributes.data_id_mem.nodeValue; 
                var i = 0;
                var fact_t = '';
                for(i=0;i<=js.length;i++)   ///////////  หา fact toamto เพื่อ ไป insert
                {
                    if (js[i]['accession_number'] == Lexx3 )
                    {
                        fact_t = js[i]['id_fact_tomato'];
                        break;
                    }
                }
                shareTochange.append(" Date share : "+date_sh);
                    $.ajax({
                      url: "ajax_changSH.php",
                      method: "GET",
                      data: {id_fa:fact_t,id_m_o:id_mem_ow,id_m_s:data_idMem_sh,LE:Lexx3,dat_sh:date_sh},
                      success: function(data)
                      {
                                 
                      },
                        error: function(){
                            alert('failure');
                        }
                  });
            }
       }
      })

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
function search()
    {
        
    
        unset($where);
        unset($where_new);
        $where = 'WHERE ';

        $i=0; 
        $user_c = $_SESSION['member']['username'];
        $where .= "member.username='$user_c'";
        //$where ="";
        $length_w = strlen($where);
        $where_new = substr($where, 0, -5);
        $con = ConDb::getInstance();
        //print_r($where);
        $sql = "SELECT * FROM (SELECT t1.id_member AS mem_sh,t1.id_fact_tomato,t1.accession_number,t1.status_ow,data_shared.id_member_shared,data_shared.status_sh,data_shared.date_shared FROM
        (SELECT data_owner.id_fact_tomato,data_owner.id_member,data_owner.accession_number,data_owner.status_ow FROM `member` INNER JOIN data_owner ON member.id_member = data_owner.id_member $where )AS t1
        LEFT JOIN data_shared ON t1.id_member = data_shared.id_member_owner AND t1.accession_number = data_shared.accession_number)AS t2 
        LEFT JOIN member ON t2.id_member_shared = member.id_member";
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
function search_ass()
    {
        
    
        unset($where);
        unset($where_new);
        $where = 'WHERE ';

        $i=0; 
        $user_c = $_SESSION['member']['username'];
        $where .= "member.username='$user_c'";
        //$where ="";
        $length_w = strlen($where);
        $where_new = substr($where, 0, -5);
        $con = ConDb::getInstance();
        //print_r($where);
        $sql = "SELECT t1.accession_number,t1.status_ow,data_shared.id_member_shared FROM (SELECT data_owner.id_member,data_owner.accession_number,data_owner.status_ow FROM `member` INNER JOIN data_owner ON member.id_member = data_owner.id_member $where )AS t1
LEFT JOIN data_shared ON t1.id_member = data_shared.id_member_owner AND t1.accession_number = data_shared.accession_number GROUP BY t1.accession_number";
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
