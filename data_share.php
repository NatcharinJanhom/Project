<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include('head.php'); ?>    
  
  
  </head>
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
                <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                            <label>Data owner</lable>
                            <table  id="owner" class="table  table-bordered" style="width:100%">
                                <thead>  
                                    <tr>
                                        <th>Accession number</th>
                                        <th>Status</th>
                                        <th>Share</th>
                                        <th><i class="mdi mdi-account-plus" data-name="mdi-account-plus"></i>Add / <i class="mdi mdi-account-minus" data-name="mdi-account-minus"></i>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>LE001</td>    
                                        <td>
                                            <select class='form-control' id='permis1'>
                                                <option value="Private">Private</option>
                                                <option value="Public">Public</option>
                                            </select>
                                        </td>
                                        
                                        <td>
                                            <label >Yes  </lable>
                                        </td>
                                        <td>
                                            <button style="margin-left: 25%;" type="button" class="static btn btn-warning"><i class="mdi mdi-share-variant" data-name="mdi-share-variant"></i>Share</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>LE002</td>    
                                        <td>
                                            <select class='form-control' id='permis2'>
                                                <option value="Public">Public</option>
                                                <option value="Private">Private</option>
                                            </select>
                                        </td>
                                        <td>
                                            <label >Yes </lable>
                                        </td>
                                        <td>
                                            <button style="margin-left: 25%;" type="button" class="static btn btn-warning" disabled><i class="mdi mdi-share-variant" data-name="mdi-share-variant"></i>Share</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>LE003</td>    
                                        <td>
                                            <select class='form-control' id='permis3'>
                                                <option value="Private">Private</option>
                                                <option value="Public">Public</option>
                                            </select>
                                        </td>
                                        <td>
                                            <label >No</lable>
                                        </td>
                                        <td>
                                            <button style="margin-left: 25%;" type="button" class="static btn btn-warning" ><i class="mdi mdi-share-variant" data-name="mdi-share-variant"></i>Share</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>LE004</td>    
                                        <td>
                                            <select class='form-control' id='permis4'>
                                                <option value="Public">Public</option>
                                                <option value="Private">Private</option>                                          
                                            </select>
                                        </td>
                                        <td>
                                            <label >Yes </lable>
                                        </td>
                                        <td>
                                            <button style="margin-left: 25%;" type="button" class="static btn btn-warning" disabled><i class="mdi mdi-share-variant" data-name="mdi-share-variant"></i>Share</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>LE005</td>    
                                        <td>
                                            <select class='form-control' id='permis5'>
                                                <option value="Private">Private</option>
                                                <option value="Public">Public</option>
                                            </select>
                                        </td>
                                        <td>
                                            <label >Yes </lable>
                                        </td>
                                        <td>
                                            <button style="margin-left: 25%;" type="button" class="static btn btn-warning"><i class="mdi mdi-share-variant" data-name="mdi-share-variant"></i>Share</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>LE006</td>    
                                        <td>
                                            <select class='form-control' id='permis6'>
                                                <option value="Private">Private</option>
                                                <option value="Public">Public</option>
                                            </select>
                                        </td>
                                        <td>
                                            <label >no </lable>
                                        </td>
                                        <td>
                                            <button style="margin-left: 25%;" type="button" class="static btn btn-warning"><i class="mdi mdi-share-variant" data-name="mdi-share-variant"></i>Share</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                </div>
                </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                            <label>Data share</lable>
                            <table style="margin-left: 30px;" id="share" class="table  table-bordered" style="width:100%">
                                <thead>  
                                    <tr>
                                        <th>Accession number</th>
                                        <th>Data Owner</th>
                                        <th>Share date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>LE001</td>    
                                        <td>
                                            <label>Asree</lable>
                                        </td>
                                        <td>10 / 6 / 2561</td> 
                                    </tr>
                                    <tr>
                                        <td>LE002</td>    
                                        <td>
                                            <label>Fiw</lable>
                                        </td>
                                        <td>10 / 2 / 2561</td> 
                                    </tr>
                                    <tr>
                                        <td>LE003</td>    
                                        <td>
                                            <label>Ton</lable>
                                        </td>
                                        <td>10 / 7 / 2561</td> 
                                    </tr>
                                    <tr>
                                        <td>LE004</td>    
                                        <td>
                                            <label>Jump</lable>
                                        </td>
                                        <td>10 / 6 / 2561</td> 
                                    </tr>
                                    <tr>
                                        <td>LE005</td>    
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
            <div id="static_modal" class="modal fade">
            <div class="modal-dialog modal-lg-6">
            <div class="modal-content">
                      <div class="modal-body">
                        <table style="margin-left: 75px;" id="share_fix" class="table  table-bordered" style="width:100%">
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
                                    <tr>
                                        <td><i class="mdi mdi-account" data-name="mdi-account"></i>Lek</td>    
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
        $('#share_fix').DataTable();
        $("#static_modal").modal('show');
    });

} );
	</script>