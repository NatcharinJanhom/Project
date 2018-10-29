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
 .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 28px;
}
.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 21px;
  width: 21px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 28px;
}

.slider.round:before {
  border-radius: 50%;
}
.card-body h5 {
    margin-bottom: 0;
    color:#ff0017;
    font-size: 1.2rem;
    font-weight: 600;
  } 
  .card.item {
     border: 1px solid #ff0017;
    
  }
  .mdi::before {
    font-size: 19px;
    line-height: 14px;
}
h5 {
    margin-bottom: 0;
    color: #ff0017;
    font-size: 1.2rem;
    font-weight: 600;
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
                <h5>Admin</h5>
                <h5>Data ownwe on User</h5>
                <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                            <label>Data owner</lable>
                            <table style="margin-left: 50px;" id="owner" class="table  table-bordered" style="width:100%">
                                <thead>  
                                    <tr>
                                        <th>User</th>
                                        <th>Accession number</th>
                                        <th>Status</th>
                                        <th>Share</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Asree</td>  
                                        <td>LE001</td>    
                                        <td>
                                            <select class='form-control' id='permis1'disabled>
                                                <option value="Private">Private</option>
                                                <option value="Public">Public</option>
                                            </select>
                                        </td>
                                        
                                        <td>
                                            <label >Yes  </lable>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Asree</td> 
                                        <td>LE002</td>    
                                        <td>
                                            <select class='form-control' id='permis2'disabled>
                                                <option value="Public">Public</option>
                                                <option value="Private">Private</option>
                                            </select>
                                        </td>
                                        <td>
                                            <label >Yes </lable>
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                        <td>Asree</td> 
                                        <td>LE003</td>    
                                        <td>
                                            <select class='form-control' id='permis3'disabled>
                                                <option value="Private">Private</option>
                                                <option value="Public">Public</option>
                                            </select>
                                        </td>
                                        <td>
                                            <label >No</lable>
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                         <td>Asree</td> 
                                        <td>LE004</td>    
                                        <td>
                                            <select class='form-control' id='permis4'disabled>
                                                <option value="Public">Public</option>
                                                <option value="Private">Private</option>                                          
                                            </select>
                                        </td>
                                        <td>
                                            <label >Yes </lable>
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                        <td>Asree</td> 
                                        <td>LE005</td>    
                                        <td>
                                            <select class='form-control' id='permis5'disabled>
                                                <option value="Private">Private</option>
                                                <option value="Public">Public</option>
                                            </select>
                                        </td>
                                        <td>
                                            <label >Yes </lable>
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                        <td>Asree</td> 
                                        <td>LE006</td>    
                                        <td>
                                            <select class='form-control' id='permis6'disabled>
                                                <option value="Private">Private</option>
                                                <option value="Public">Public</option>
                                            </select>
                                        </td>
                                        <td>
                                            <label >no </lable>
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                        <td>Ton</td> 
                                        <td>LE007</td>    
                                        <td>
                                            <select class='form-control' id='permis6' disabled>
                                                <option value="Private">Private</option>
                                                <option value="Public">Public</option>
                                            </select>
                                        </td>
                                        <td>
                                            <label >no </lable>
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                        <td>Ton</td> 
                                        <td>LE008</td>    
                                        <td>
                                            <select class='form-control' id='permis6' disabled>
                                                <option value="Private">Private</option>
                                                <option value="Public">Public</option>
                                            </select>
                                        </td>
                                        <td>
                                            <label >no </lable>
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                        <td>Jump</td> 
                                        <td>LE009</td>    
                                        <td>
                                            <select class='form-control' id='permis6' disabled>
                                                <option value="Private">Private</option>
                                                <option value="Public">Public</option>
                                            </select>
                                        </td>
                                        <td>
                                            <label >no </lable>
                                        </td>
                                       
                                    </tr>
                                </tbody>
                            </table>
                </div>
                </div>
                </div>
               
                </div>
            </div>   

        <!-- modal start -->      
            <div id="static_modal" class="modal fade">
            <div class="modal-dialog modal-lg-6">
            <div class="modal-content">
                      <div class="modal-body">
                        <table style="margin-left: 10px;" id="owner" class="table  table-bordered" style="width:100%">
                                <thead>  
                                    <tr>
                                        <th>User</th>
                                        <th>Status</th>
                                        <th>Share date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><i class="mdi mdi-account" data-name="mdi-account"></i>Fiw</td>    
                                        <td> 
                                            <label class="switch">
                                                <input type="checkbox" id='ch' checked>  <!--  onclick="showSwal()"  -->
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td>10 / 10 / 2561</td> 
                                    </tr>
                                    <tr>
                                        <td><i class="mdi mdi-account" data-name="mdi-account"></i>Asree</td>    
                                        <td> 
                                            <label class="switch">
                                                <input type="checkbox" id='ch' checked>  <!--  onclick="showSwal()"  -->
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td>10 / 9 / 2561</td> 
                                    </tr>
                                    <tr>
                                        <td><i class="mdi mdi-account" data-name="mdi-account"></i>Ton</td>    
                                        <td> 
                                            <label class="switch">
                                                <input type="checkbox" id='ch' >  <!--  onclick="showSwal()"  -->
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td></td> 
                                    </tr>
                                    <tr>
                                        <td><i class="mdi mdi-account" data-name="mdi-account"></i>Jump</td>    
                                        <td> 
                                            <label class="switch">
                                                <input type="checkbox" id='ch' >  <!--  onclick="showSwal()"  -->
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td></td> 
                                    </tr>
                                </tbody>
                        </table>


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
    </body>
</html>
<script >
	
$(document).ready(function() {
	$('#owner').DataTable();
    $('#share').DataTable();
    
    $(".static").click(function() {


        $("#static_modal").modal('show');
    });

} );
	</script>