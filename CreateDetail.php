<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include('head.php'); ?>  
    <script>
        function goBack()
        {
        window.history.back()
        }
    </script>

    <script>
            $(document).ready(function() {
                
                handleStatusChanged();
                
            });
            
            function handleStatusChanged() {
                $('#toggleElement').on('change', function () {
                    toggleStatus();   
                });
            }
            
            function toggleStatus() {
                if ($('#toggleElement').is(':checked')) {
                    $('#elementsToOperateOn :input').attr('disabled', true);
                } else {
                    $('#elementsToOperateOn :input').removeAttr('disabled');
                }   
            }
            
    </script>
  </head>

  <style>
    .card-title {
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        color: #404852;
        margin-bottom: 10px;
        font-size: 25px;
        text-transform: capitalize;
    }
     </style>

  <body class="sidebar-icon-only">
    <div class="container-scroller">
    <?php include('navbar.php'); ?>   
      <div class="container-fluid page-body-wrapper">        
        <?php include('sidebar.php'); ?>    
             <div class="main-panel">
                    <div class="content-wrapper">
                <div class="container">
            <div>
        </div>
    </div>
    


    <div class="card-body">
                    <h4 class="card-title">Create Detail</h4>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="InputTitle"><input id="toggleElement" type="checkbox" name="toggle" onchange="toggleStatus()" />Title or No Title</label><BR>
                            <div id="elementsToOperateOn">
                            <input type="text" class="form-control" id="InputTitle" placeholder="Title"> 
                            </div>
                        </div>
                      
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                          </span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="InputMessage">Textarea</label> <textarea class="form-control" id="InputMessage" rows="3"></textarea> </div>
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <input type="button" value="Cancel" class="btn btn-light" onclick="goBack()">     
                    </form>
     </div>
     

     


    