<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include('head.php'); ?>    
  
  </head>
  <style>
  .switch {
  position: relative;
  display: inline-block;
  width: 43px;
  height: 23px;
  margin-left : 30%;
  margin-top: 5%;
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
  height: 17.5px;
  width: 17.5px;
  left: 4px;
  bottom: 2.8px;
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
  -webkit-transform: translateX(18px);
  -ms-transform: translateX(18px);
  transform: translateX(18px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
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
  .btn-edit, .btn-delete{
    height: 25px;
  }
  .badge{
    height: 25px;
    width: 80px;
    text-align:center;
    font-weight: 400;
    font-size: 0.875rem;
  }
  .btn2{
    height: 40px;
  }
  .table td
  {
    height: 25px;
  }
  .btn_lock
  {
    text-align:center;
    height: 25px;
    width: 80px;
  }
  td button
  {
    text-align:center;
  }
  .pad-left10
  {
    padding-left:10px;
  }
  .red
  {
    color:red;
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
            <div class="col-lg-12 grid-margin">
              <div class="">
                <div class="card-body">
                  <h5>User Management <span class="pad-left10"><button type="button" class="btn btn-primary btn-create"><i class="fa fa-plus-circle"></i>Create user</button></span></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <?php                     
                      $member_all =get_all_member($_SESSION['member']['id_member']);
                ?>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Permission</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>block</th>

                </tr>
            </thead>
            <tbody id="tbody_start">
            <?php foreach($member_all as $key=>$value)
            {
              ?>
              <tr id="<?php echo$value['id_member']?>">
              <td><?php echo$value['firstname']?></td>
              <td><?php echo$value['lastname']?></td>
              <td><?php echo$value['email']?></td>
              <td><?php 
              if($value['permission']=='member')
              {
                echo"user";
              }
              else
              {
                echo$value['permission'];
              }?></td>
              <?php 
                    if($value['status']=='Active')
                    echo"<td><center> <span class='badge badge-success badge'>Active</span> </center>  </td>";
                    else if($value['status']=='Blocked')
                    echo"<td><center><span class='badge badge-danger badge'>Blocked</span></center></td>";
                    else if($value['status']=='Waiting')
                    echo"<td><center><span class='badge badge-warning badge'>Waiting</span></center></td>";
              ?>
              <td><center><button type="button" class='btn-edit btn btn-outline-warning' data-id="<?php echo$value['id_member'] ?>" data-firstname="<?php echo$value['firstname'] ?>" data-lastname="<?php echo$value['lastname'] ?>" data-email="<?php echo$value['email']?>" data-permission="<?php echo$value['permission']?>"  data-status="<?php echo$value['status']?>">Edit</button>
              <span style="padding-left:10px;"></span><button type='button' class='btn-delete btn btn-outline-danger' data-id ="<?php echo$value['id_member'] ?>" data-firstname="<?php echo$value['firstname'] ?>">Delete</button></center></td>
              <?php if($value['status']==='Blocked')
              {
                ?>
                 <td><center> <button type="button" data-id="<?php echo$value['id_member'] ?>" data-firstname="<?php echo$value['firstname'] ?>" data-lastname="<?php echo$value['lastname'] ?>" data-email="<?php echo$value['email']?>" data-permission="<?php echo$value['permission']?>"  data-status="<?php echo$value['status']?>" class="btn social-btn btn-google btn_lock">
                            <i class="fa fa-lock"></i>
                          </button>
                          </center></td>
              
                    <?php 
              }
                    else
              {
                    ?>
                    <td><center> <button type="button" data-id="<?php echo$value['id_member'] ?>" data-firstname="<?php echo$value['firstname'] ?>" data-lastname="<?php echo$value['lastname'] ?>" data-email="<?php echo$value['email']?>" data-permission="<?php echo$value['permission']?>"  data-status="<?php echo$value['status']?>" class="btn social-btn btn-social-outline-google btn_lock">
                            <i class="fa fa-unlock"></i>
                          </button>
                          </center> </td>
                    <?php
              }
              ?>
              </tr>
              <?php
            }
            ?>
                </tbody>
            </table>

            </div>    
            <div id="create_member" class="modal fade">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                      <h4 class="modal-title">Create user</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                      <div class="modal-body">
                      <div class="form-group row">
                             <div class='col-md-6'>
                              <label for='edit_n'>Username <span class="red"> * </span></label>  <input type="text" class='form-control' id='create_username'>
                              </div>
                              <div class='col-md-6'>
                              <label for='edit_s'>Password <span class="red"> * </span></label>  <input type="password" class='form-control' id='create_password'>
                              </div>
                      </div>
                          <div class="form-group row">
                             <div class='col-md-4'>
                              <label for='edit_n'>Name <span class="red"> * </span></label>  <input type="text" class='form-control' id='create_firstname'>
                              </div>
                              <div class='col-md-4'>
                              <label for='edit_s'>Surname <span class="red"> * </span></label>  <input type="text" class='form-control' id='create_lastname'>
                              </div>
                              <div class='col-md-4'>
                              <label for='edit_e'>Email <span class="red"> * </span></label>  <input type="text" class='form-control' id='create_email'>
                              
                           
                          </div>
                      </div>
                      <div class='row '>
                      <div class='col-md-6'>
                      <div class='form-group'>
                      <label>Permission</label> 
                      <select class='form-control' id='create_permission'>
                      
                      <option value="member">User</option>
                      <option value="expert">Expert</option>
                      <option value="admin">Admin</option>
                      
                    </select>
                      </div>
                      </div>
                      <div class='col-md-6'>
                      <div class='form-group'>
                        <label>Status</label> 
                        <select class='form-control' id='create_status'>
                        <option value="Active">Active</option>
                        <option value="Waiting">Waiting-Email</option>
                        <option value="Blocked">Block</option>
                       
                      </select>
                      </div>
                      </div>
                      </div>   
                      <div class='modal-footer'>
                        <button type='button' class='btn btn2 btn-success btn-create-member'>Save</button>
                        <button data-dismiss="modal" type='button' class='btn btn2'>Cancle</button>
                        </div>
                      </div>
            </div>
            </div>
            </div>      
            <div id="static_modal" class="modal fade">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Edit user</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                      <div class="modal-body">
                      <input type="hidden" id="edit_id">
                          <div class="form-group row">
                             <div class='col-md-4'>
                              <label for='edit_n'>Name <span class="red"> * </span></label>  <input type="text" class='form-control' id='edit_firstname'>
                              </div>
                              <div class='col-md-4'>
                              <label for='edit_s'>Surname <span class="red"> * </span></label>  <input type="text" class='form-control' id='edit_lastname'>
                              </div>
                              <div class='col-md-4'>
                              <label for='edit_e'>Email <span class="red"> * </span></label>  <input type="text" class='form-control' id='edit_email'>
                              
                           
                          </div>
                      </div>
                      <div class='row '>
                      <div class='col-md-6'>
                      <div class='form-group'>
                      <label>Permission</label> 
                      <select class='form-control' id='edit_permission'>
                      <option value="member">User</option>
                      <option value="expert">Expert</option>
                      <option value="admin">Admin</option>
                      
                    </select>
                      </div>
                      </div>
                      <div class='col-md-6'>
                      <div class='form-group'>
                        <label>Status</label> 
                        <select class='form-control' id='edit_status'>
                        <option value="Active">Active</option>
                        <option value="Waiting">Waiting-Email</option>
                        <option value="Blocked">Block</option>
                       
                      </select>
                      </div>
                      </div>
                      </div>         


                        <div class='modal-footer'>
                        <button type='button' class='btn btn2 btn-success btn-update'>Save</button>
                        <button data-dismiss="modal" type='button' class='btn btn2'>Cancle</button>
                        </div>
                      </div>
            </div>
            </div>
            </div>



            <script>
            $(document).ready(function() {
                 $('#example').DataTable();
                 $(".btn-update").click(function(){
                var id =   $("#edit_id").val();
                var firstname =   $("#edit_firstname").val();
                var lastname =  $("#edit_lastname").val();
                var email =   $("#edit_email").val();
                var permission = $("#edit_permission").val();
                var status =  $("#edit_status").val();
              $.ajax({
                url: "ajax_update_member.php",
                    method: "POST",
                    data: { id: id,
                      firstname: firstname,
                      lastname: lastname,
                      email: email,
                      permission: permission,
                      status: status},
                    success: function(data) {
                        $("#"+id).empty();
                        $("#"+id).append(`<td>`+firstname+`</td>
                        <td>`+lastname+`</td>
                        <td>`+email+`</td>`);
                        if(permission == 'member')
                        $("#"+id).append(`<td>user</td>`);
                        else
                        $("#"+id).append(`<td>`+permission+`</td>`);
                        if(status =='Active')
                        $("#"+id).append("<td><center> <span class='badge badge-success badge'>Active</span> </center>  </td>");
                        else if(status =='Blocked')
                        $("#"+id).append("<td><center><span class='badge badge-danger badge'>Blocked</span></center></td>");
                        else if(status =='Waiting')
                        $("#"+id).append("<td><center><span class='badge badge-warning badge'>Waiting</span></center></td>");
                        $("#"+id).append(`<td><center><button type="button" class='btn-edit btn btn-outline-warning' data-id="`+id+`" data-firstname="`+firstname+`"
                        data-lastname="`+lastname+`" data-email="`+email+`" data-permission="`+permission+`"  data-status="`+status+`">Edit</button>
                        <span style="padding-left:10px;"></span><button type='button' class='btn-delete btn btn-outline-danger' data-id ="`+id+`" data-firstname="`+firstname+`">Delete</button></center></td>`);
                        if(status =='Blocked')
                        {
                          $("#"+id).append(`<td><center> <button type="button" data-id="`+id+`" data-firstname="`+firstname+`"
                        data-lastname="`+lastname+`" data-email="`+email+`" data-permission="`+permission+`"  data-status="`+status+`" class="btn social-btn btn-google btn_lock">
                            <i class="fa fa-lock"></i>
                          </button>
                          </center></td>`);
                        }
                        else
                        {
                          $("#"+id).append(` <td><center> <button type="button" data-id="`+id+`" data-firstname="`+firstname+`"
                        data-lastname="`+lastname+`" data-email="`+email+`" data-permission="`+permission+`"  data-status="`+status+`" class="btn social-btn btn-social-outline-google btn_lock">
                            <i class="fa fa-unlock"></i>
                          </button>
                          </center> </td>`);
                      
                        }

                    },
                    error: function(data){
                        console.log("error");
                        console.log(data);
                    }
              });
              $("#static_modal").modal('hide');
            });
            $("#example").on('click','.btn-edit',function() {
                          var id =$(this).attr("data-id");
                          var firstname =  $(this).attr("data-firstname");
                          var lastname =  $(this).attr("data-lastname");
                          var email =  $(this).attr("data-email");
                          var permission =  $(this).attr("data-permission");
                          var status =  $(this).attr("data-status");
                          $("#edit_id").val(id);
                          $("#edit_firstname").val(firstname);
                          $("#edit_lastname").val(lastname);
                          $("#edit_email").val(email);
                          $("#edit_permission").val(permission);
                          $("#edit_status").val(status);
                          $("#static_modal").modal('show');
                 });
           
            } );
            
            </script>
            <script>
                 $("#example").on('click','.btn-delete',function() {
                          var id =$(this).attr("data-id");
                          var firstname =  $(this).attr("data-firstname");
                          swal({
                text:'Do you want to delete '+firstname+' ?',
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
              }).then(function(z) {
                if(z)
                {
                        $.ajax({
                        url: "ajax_delete_member.php",
                            method: "POST",
                            data: { id: id},
                            success: function(data) {
                                $("#"+id).remove();
                                console.log(data);
                            },
                            error: function(data){
                                console.log("error");
                                console.log(data);
                            }
                          });
                }
                });
            });
            </script>
            <script src="theme/assets/js/shared/alert.js"></script>
            <script>
            $("#example").on('click','.btn_lock',function(){
                          var id =$(this).attr("data-id");
                          var firstname =  $(this).attr("data-firstname");
                          var lastname =  $(this).attr("data-lastname");
                          var email =  $(this).attr("data-email");
                          var permission =  $(this).attr("data-permission");
                          var status =  $(this).attr("data-status");
              if(status == 'Blocked')
              {
                swal({
                text:'Do you want to unblock '+firstname+' ?',
                icon: 'warning',
                buttons: {
                  confirm: {
                    text: "OK",
                    value: true,
                    visible: true,
                    className: "btn btn-warning",
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
              }).then(function(z) {
                if(z)
                {
                  status = "Active";
                        $.ajax({
                      url: "ajax_update_block_member.php",
                          method: "POST",
                          data: { id: id,
                            status: status},
                          success: function(data) {
                              $("#"+id).empty();
                              $("#"+id).append(`<td>`+firstname+`</td>
                              <td>`+lastname+`</td>
                              <td>`+email+`</td>`);
                              if(permission == 'member')
                              $("#"+id).append(`<td>user</td>`);
                              else
                              $("#"+id).append(`<td>`+permission+`</td>`);
                              if(status =='Active')
                              $("#"+id).append("<td><center> <span class='badge badge-success badge'>Active</span> </center>  </td>");
                              else if(status =='Blocked')
                              $("#"+id).append("<td><center><span class='badge badge-danger badge'>Blocked</span></center></td>");
                              else if(status =='Waiting')
                              $("#"+id).append("<td><center><span class='badge badge-warning badge'>Waiting</span></center></td>");
                              $("#"+id).append(`<td><center><button type="button" class='btn-edit btn btn-outline-warning' data-id="`+id+`" data-firstname="`+firstname+`"
                              data-lastname="`+lastname+`" data-email="`+email+`" data-permission="`+permission+`"  data-status="`+status+`">Edit</button>
                              <span style="padding-left:10px;"></span><button type='button' class='btn-delete btn btn-outline-danger' data-id ="`+id+`" data-firstname="`+firstname+`">Delete</button></center></td>`);
                              if(status =='Blocked')
                              {
                                $("#"+id).append(`<td><center> <button type="button" data-id="`+id+`" data-firstname="`+firstname+`"
                        data-lastname="`+lastname+`" data-email="`+email+`" data-permission="`+permission+`"  data-status="`+status+`" class="btn social-btn btn-google btn_lock">
                                  <i class="fa fa-lock"></i>
                                </button>
                                </center></td>`);
                              }
                              else
                              {
                                $("#"+id).append(` <td><center> <button type="button" data-id="`+id+`" data-firstname="`+firstname+`"
                        data-lastname="`+lastname+`" data-email="`+email+`" data-permission="`+permission+`"  data-status="`+status+`" class="btn social-btn btn-social-outline-google btn_lock">
                                  <i class="fa fa-unlock"></i>
                                </button>
                                </center> </td>`);
                            
                              }
                          },
                          error: function(data){
                              console.log("error");
                              console.log(data);
                          }
                    });
                }
                      });

              }
              else
              {
                swal({
                text:'Do you want to block '+firstname+' ?',
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
              }).then(function(z) {
                if(z)
                {
                  status = "Blocked";
                        $.ajax({
                      url: "ajax_update_block_member.php",
                          method: "POST",
                          data: { id: id,
                            status: status},
                          success: function(data) {
                              $("#"+id).empty();
                              $("#"+id).append(`<td>`+firstname+`</td>
                              <td>`+lastname+`</td>
                              <td>`+email+`</td>`);
                              if(permission == 'member')
                              $("#"+id).append(`<td>user</td>`);
                              else
                              $("#"+id).append(`<td>`+permission+`</td>`);
                              if(status =='Active')
                              $("#"+id).append("<td><center> <span class='badge badge-success badge'>Active</span> </center>  </td>");
                              else if(status =='Blocked')
                              $("#"+id).append("<td><center><span class='badge badge-danger badge'>Blocked</span></center></td>");
                              else if(status =='Waiting')
                              $("#"+id).append("<td><center><span class='badge badge-warning badge'>Waiting</span></center></td>");
                              $("#"+id).append(`<td><center><button type="button" class='btn-edit btn btn-outline-warning' data-id="`+id+`" data-firstname="`+firstname+`"
                              data-lastname="`+lastname+`" data-email="`+email+`" data-permission="`+permission+`"  data-status="`+status+`">Edit</button>
                              <span style="padding-left:10px;"></span><button type='button' class='btn-delete btn btn-outline-danger' data-id ="`+id+`" data-firstname="`+firstname+`">Delete</button></center></td>`);
                              if(status =='Blocked')
                              {
                                $("#"+id).append(`<td><center> <button type="button" data-id="`+id+`" data-firstname="`+firstname+`"
                        data-lastname="`+lastname+`" data-email="`+email+`" data-permission="`+permission+`"  data-status="`+status+`" class="btn social-btn btn-google btn_lock">
                                  <i class="fa fa-lock"></i>
                                </button>
                                </center></td>`);
                              }
                              else
                              {
                                $("#"+id).append(` <td><center> <button type="button" data-id="`+id+`" data-firstname="`+firstname+`"
                        data-lastname="`+lastname+`" data-email="`+email+`" data-permission="`+permission+`"  data-status="`+status+`" class="btn social-btn btn-social-outline-google btn_lock">
                                  <i class="fa fa-unlock"></i>
                                </button>
                                </center> </td>`);
                            
                              }
                              
                          },
                          error: function(data){
                              console.log("error");
                              console.log(data);
                          }
                    });
                }
                      });
              }
              

            });
            </script>
            <script>
            $(".btn-create").click(function(){
              $("#create_member").modal("show");
            });
            $(".btn-create-member").click(function(){
              var username =   $("#create_username").val();
              var password =   $("#create_password").val();
                var firstname =   $("#create_firstname").val();
                var lastname =  $("#create_lastname").val();
                var email =   $("#create_email").val();
                var permission = $("#create_permission").val();
                var status =  $("#create_status").val();
                $.ajax({
                url: "ajax_create_member.php",
                    method: "POST",
                    data: {
                      username: username,
                      password: password,
                      firstname: firstname,
                      lastname: lastname,
                      email: email,
                      permission: permission,
                      status: status},
                    success: function(data) {
                      if(data)
                      {
                        $("#tbody_start").prepend(`<tr id="`+data+`"><td>`+firstname+`</td>
                        <td>`+lastname+`</td>
                        <td>`+email+`</td></tr>`);
                        if(permission == 'member')
                        $("#"+data).append(`<td>user</td>`);
                        else
                        $("#"+data).append(`<td>`+permission+`</td>`);
                        if(status =='Active')
                        $("#"+data).append("<td><center> <span class='badge badge-success badge'>Active</span> </center>  </td>");
                        else if(status =='Blocked')
                        $("#"+data).append("<td><center><span class='badge badge-danger badge'>Blocked</span></center></td>");
                        else if(status =='Waiting')
                        $("#"+data).append("<td><center><span class='badge badge-warning badge'>Waiting</span></center></td>");
                        $("#"+data).append(`<td><center><button type="button" class='btn-edit btn btn-outline-warning' data-id="`+data+`" data-firstname="`+firstname+`"
                        data-lastname="`+lastname+`" data-email="`+email+`" data-permission="`+permission+`"  data-status="`+status+`">Edit</button>
                        <span style="padding-left:10px;"></span><button type='button' class='btn-delete btn btn-outline-danger' data-id ="`+data+`" data-firstname="`+firstname+`">Delete</button></center></td>`);
                        if(status =='Blocked')
                        {
                          $("#"+data).append(`<td><center> <button type="button" data-id="`+data+`" data-firstname="`+firstname+`"
                        data-lastname="`+lastname+`" data-email="`+email+`" data-permission="`+permission+`"  data-status="`+status+`" class="btn social-btn btn-google btn_lock">
                            <i class="fa fa-lock"></i>
                          </button>
                          </center></td>`);
                        }
                        else
                        {
                          $("#"+data).append(` <td><center> <button type="button" data-id="`+data+`" data-firstname="`+firstname+`"
                        data-lastname="`+lastname+`" data-email="`+email+`" data-permission="`+permission+`"  data-status="`+status+`" class="btn social-btn btn-social-outline-google btn_lock">
                            <i class="fa fa-unlock"></i>
                          </button>
                          </center> </td>`);
                      
                        }
                       
                      }
                    },
                    error: function(data){
                        console.log("error");
                        console.log(data);
                    }
              });
             $("#create_username").val('');
             $("#create_password").val('');
              $("#create_firstname").val('');
             $("#create_lastname").val('');
             $("#create_email").val('');
              $("#create_member").modal('hide');
            });
            </script>
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
  function get_all_member($id_member)
  {
    $con = ConDb::getInstance();
    $sql = "SELECT * FROM member WHERE id_member != '$id_member' ";
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

