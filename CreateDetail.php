<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">



    <?php include('head.php'); ?>
    <script>
        function goBack() {
            window.history.back()
        }
    </script>

    <style>
        .card-title {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            color: #404852;
            margin-bottom: 10px;
            font-size: 25px;
            text-transform: capitalize;
        }
      
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
     
    </style>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="theme/assets/js/croppie.js"></script>
    <link href="theme/assets/js/croppie.css" rel="stylesheet" type="text/css">

    <script>
        $(document).ready(function () {

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

        $(document).ready(function () {
            var $uploadCrop;


            function readFile(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $uploadCrop.croppie('bind', {
                            url: e.target.result
                        });
                        $('.upload-demo').addClass('ready');

                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $uploadCrop = $('#upload-demo').croppie({
                viewport: {
                    width: 200,
                    height: 200,
                    type: 'circle'
                },
                boundary: {
                    width: 300,
                    height: 300
                }
            });

            $('#upload').on('change', function () { readFile(this); });
            $('.upload-result').on('click', function (ev) {
                $uploadCrop.croppie('result', {
                    type: 'canvas',
                    size: 'original'
                }).then(function (resp) {
                    $('#imagebase64').val(resp);
                    $('#form').submit();
                });
            });

        });



    </script>
</head>



<body class="sidebar-icon-only">
    <div class="container-scroller">
        <?php include('navbar.php'); ?>
        <div class="container-fluid page-body-wrapper">
            <?php include('sidebar.php'); ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="card">
                        <div class="card-body">

                            <h2>Create Detail</h2>
                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="InputTitle">
                                        <input id="toggleElement" type="checkbox" name="toggle" onchange="toggleStatus()" />Title or No Title :</label>
                                    <BR>
                                    <div id="elementsToOperateOn">
                                        <input type="text" class="form-control" id="InputTitle" placeholder="Title">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label>Upload and crop image</label>
                                    <br>
                                    <button type="button" class="btn btn-success mr-2" data-toggle="modal" data-target="#myModal">Upload files</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                 
                                                        <form action="" id="form" method="post">
                                                            
                                                          
                                                           
                                                            <input type="hidden" id="imagebase64" name="imagebase64">
                                                            <div class="center">
                                                            <input type="file" id="upload" >
                                                            <button class="btn btn-success mr-2">Crop</button>
  
                                                           
                                                        </form>
   
                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="InputMessage">Textarea :</label>
                                    <textarea class="form-control" id="InputMessage" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                                <input type="button" value="Cancel" class="btn btn-light" onclick="goBack()">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>