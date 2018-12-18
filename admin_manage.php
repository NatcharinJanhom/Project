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
  .btn{
    height: 25px;
  }
  .badge{
    height: 20px;
    width: 60px;
  }
  .btn2{
    height: 40px;
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
                  <h5>User Management</h5>
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
            <tbody>
            <?php foreach($member_all as $key=>$value)
            {
              ?>
              <tr>
              <td><?php echo$value['firstname']?></td>
              <td><?php echo$value['lastname']?></td>
              <td><?php echo$value['email']?></td>
              <td><?php echo$value['permission']?></td>
              <?php 
                    if($value['status']==='Active')
                    echo"<td><center> <span class='badge badge-success badge'>Active</span> </center>  </td>";
                    else if($value['status']==='Blocked')
                    echo"<td><center><span class='badge badge-danger badge'>Blocked</span></center></td>";
                    else if($value['status']==='Waiting')
                    echo"<td><center><span class='badge badge-warning badge'>Waiting</span></center></td>";
              ?>
              <td><center><button type="button" class='static btn btn-outline-warning' data-id="<?php echo$value['id_member'] ?>" data-firstname="<?php echo$value['firstname'] ?>" data-lastname="<?php echo$value['lastname'] ?>" data-email="<?php echo$value['email']?>" data-permission="<?php echo$value['permission']?>"  data-status="<?php echo$value['status']?>">Edit</button>
              <span style="padding-left:10px;"></span><button type='button' class='btn btn-outline-danger' data-id ="<?php echo$value['id_member'] ?>">Delete</button></center></td>
              <?php if($value['status']==='Blocked')
              {
                ?>
                 <td> <label class="switch">
                                      <input type="checkbox" checked>
                                      <span class="slider round"></span>
                                    </label>
                    </td>
              
                    <?php 
              }
                    else
              {
                    ?>
                    <td> <label class="switch">
                                      <input type="checkbox" id='ch' onclick="showSwal()"  >
                                      <span class="slider round"></span>
                                    </label>
                    </td>
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
            
            <div id="static_modal" class="modal fade">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                      <div class="modal-body">
                      <form method="post" action="update.php" >
                          <div class="form-group row">
                             <div class='col-md-4'>
                              <label for='edit_n'>Name</label>  <input type="text" class='form-control' id='edit_firstname'>
                              </div>
                              <div class='col-md-4'>
                              <label for='edit_s'>Surname</label>  <input type="text" class='form-control' id='edit_lastname'>
                              </div>
                              <div class='col-md-4'>
                              <label for='edit_e'>Email</label>  <input type="text" class='form-control' id='edit_email'>
                              
                           
                          </div>
                      </div>
                      <div class='row '>
                      <div class='col-md-6'>
                      <div class='form-group'>
                      <label>Permission</label> 
                      <select class='form-control' id='edit_permission'>
                      <option value="Admin">Admin</option>
                      <option value="member">Member</option>
                      
                    </select>
                      </div>
                      </div>
                      <div class='col-md-6'>
                      <div class='form-group'>
                        <label>Status</label> 
                        <select class='form-control' id='edit_status'>
                        <option value="Active">Active</option>
                        <option value="Waiting-Email">Waiting-Email</option>
                        <option value="Block">Block</option>
                       
                      </select>
                      </div>
                      </div>
                      </div>         


                        <div class='modal-footer'>
                        <button type='submit' class='btn btn2 btn-success'>Save</button>
                        <button data-dismiss="modal" type='button' class='btn btn2'>Cancle</button>
                        </div>
                        </form>

                      </div>
            </div>
            </div>
            </div>



            <script>
            $(document).ready(function() {
                 $('#example').DataTable();
                 $(".static").click(function() {
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
            <script src="theme/assets/js/shared/todolist.js"></script>
            <script src="theme/assets/js/shared/alert.js"></script>
            <script>
            function showSwal()
            {

              var xc = $("#ch")[0].checked;
                      if(xc)
                      {
                        $("#ch").prop('checked', false);
                      }
                      else{
                        $("#ch").prop('checked', true);
                      }
              swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3f51b5',
                cancelButtonColor: '#ff4081',
                confirmButtonText: 'Great ',
                buttons: {
                  cancel: {
                    text: "Cancel",
                    value: null,
                    visible: true,
                    className: "btn btn-danger",
                    closeModal: true,
                  },
                  confirm: {
                    text: "OK",
                    value: true,
                    visible: true,
                    className: "btn btn-primary",
                    closeModal: true
                  }
                }
              }).then(function(z) {
                      var st = $("#ch")[0].checked;
                      if(st)
                      {
                        $("#ch").prop('checked', false);
                      }
                      else{
                        $("#ch").prop('checked', true);
                      }
                     
                      console.log(st);
                      if(!z)
                      {
                        var st2 = $("#ch")[0].checked;
                            if(st2)
                            {
                              $("#ch").prop('checked', false);
                            }
                            else
                              $("#ch").prop('checked', true);
                      }
                          


                      });
                    }
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

