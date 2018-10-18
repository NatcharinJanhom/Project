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
        
        .cenbut{
            text-align: center;
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
            var $uploadCropSquare;

            function readFile(input) {
                if (input.files && input.files[0]) 
                {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        //Circle
                        $uploadCrop.croppie('bind', {
                            url: e.target.result
                        });
                        $('.upload-demo').addClass('ready');
                       

                    }
                    reader.readAsDataURL(input.files[0]);
                }
               
            }
            //Circle Crop
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

        function closex()
        {
            myWindow.close();
        }

        $(function() 
        {
        enable_cb();
        $("#cb1").click(enable_cb);
        $("#cb2").click(enable_cb);
        });

        function enable_cb() {
            if ($('#cb1').is(':checked')) {
                $('#cb2').attr('disabled',true);   
            }
            else
            {
                $('#cb2').removeAttr('disabled');   
            }
            
            if ($('#cb2').is(':checked')) {
                $('#cb1').attr('disabled',true);   
            }
            else
            {
                $('#cb1').removeAttr('disabled');   
            }     
           
        }



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
                                <label>Type of crop:</lable><br><br>
                                <input name="" type="checkbox" value="" id="cb1" class="cb1">Circle
                                <input name="" type="checkbox" value="" id="cb2" class="cb2">Square
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
                                                 
                                                    
                                                    <div class="card-body">
                                                        <form action="" id="form" method="post">
                                                            <div id="upload-demo"></div>
                                                            <input type="hidden" id="imagebase64" name="imagebase64">
                                                            <div class="cenbut">
                                                            <input type="file" id="upload" value="Choose a file" ><br><br>
                                                            <button class="btn btn-primary ">Crop Image</button>
                                                            <button class="btn btn-default" onclick="closex()">Close</button>
                                                            </div>
                                                        </form>     
                                                    </div>
                                                
   
                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="InputMessage">Textarea :</label>
                                    <textarea class="form-control" id="InputMessage" rows="3"></textarea>
                                </div>

                                <div class="form-group">
                                <label>Image side:</lable><br><br>
                                <input name="" type="checkbox" value="" id="cb1" class="cb1">ImgLeft
                                <input name="" type="checkbox" value="" id="cb2" class="cb2">ImgRight
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