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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  </head>
  <style>
      a
      {
    color: #6c757d;
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

    <h2>Create Picture</h2>
    <div class="card-body">
               
                <form class="forms-sample">
                    <div class="form-group">
                            <label for="InputTitle">Title</label>
                            <input type="text" class="form-control" id="InputTitle" placeholder="Title"> </div>
                 
                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                            <input type="button" value="Cancel" class="btn btn-light" onclick="goBack()">     
                </form>
            </div>
