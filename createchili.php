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
                <h2 class="card-title">Crete Title</h2>
                <form class="forms-sample">
                    <div class="form-group">
                            <label for="InputTitle">Title</label>
                            <input type="text" class="form-control" id="InputTitle" placeholder="Title"> </div>
                    <div class="form-group">
                            <label for="InputSubTitle">Subtitle</label>
                            <input type="text" class="form-control" id="InputSubTitle" placeholder="Subtitle"> </div>
                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                            <input type="button" value="Cancel" class="btn btn-light" onclick="goBack()">     
                </form>
            </div>


                     