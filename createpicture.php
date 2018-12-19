<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php'); ?>
    <script>
        function goBack() {
            window.history.back()
        }
    </script>
    <link rel="stylesheet" href="./theme/assets/js/dropzone-5.5.0/dist/dropzone.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="./theme/assets/js/dropzone-5.5.0/dist/dropzone.min.js"></script>
</head>
<style>
    a {
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

                    <div class="card">
                        <div class="card-body">
                            <h2>Create Picture</h2>
                            <div class="form-group">
                                    <label for="InputTitle">Title :</label>
                                    <input type="text" class="form-control" id="InputTitle" placeholder="Title"> </div>
                            <form action="/" class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                            
                            </form><br>
                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                            <input type="button" value="Cancel" class="btn btn-light" onclick="goBack()">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
 
