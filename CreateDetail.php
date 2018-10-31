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

   
    <script type="text/javascript" src="theme/assets/js/croppie.js"></script>
    <link href="theme/assets/js/croppie.css" rel="stylesheet" type="text/css">
    <link href="sweetalert.css" rel="stylesheet"/>
    <script>src = "sweetalert.min.js"</script>
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

         //Circle Crop
        $(document).ready(function () {
            var $uploadCrop;

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

        // Crop Square
        $(document).ready(function () {
            var $uploadCrop;

            function readFile(input) {
                if (input.files && input.files[0]) 
                {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        //Circle
                        $uploadCrop.croppie('bind', {
                            url: e.target.result
                        });
                        $('.upload-demo2').addClass('ready');
                       

                    }
                    reader.readAsDataURL(input.files[0]);
                }
               
            }
       
            $uploadCrop = $('#upload-demo2').croppie({
                viewport: {
                    width: 200,
                    height: 200,
                    type: 'square'
                },
                boundary: {
                    width: 300,
                    height: 300
                }
            });

            $('#upload2').on('change', function () { readFile(this); });
            $('.upload-result').on('click', function (ev) {
                $uploadCrop.croppie('result', {
                    type: 'canvas',
                    size: 'original'
                }).then(function (resp) {
                    $('#imagebase64').val(resp);
                    $('#form2').submit();
                });
            });

            
        });



        
        function closex()
        {
            myWindow.close();
        }

        $(function() { enable_cb();
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
                                    
                                    <label>*Type of crop (Please choose type of crop before upload your image)</label></br>
                                    <input name="" type="checkbox" id="cb1" >Crop by circle
                                    <input name="" type="checkbox" id="cb2" >Crop by square                      
                                    
                                </div>


                                <div class="form-group">
                                    <label>Upload and crop image</label>
                                    <br>
                                    <button type="button" class="btn btn-success mr-2 btn-crop" >Upload image</button>
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
     <!-- Modal -->
     <div class="modal fade" id="myModal1">
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
                                                            <button class="btn btn-primary">Result</button>
                                                            <button class="btn btn-default" onclick="closex()">Close</button>
                                                            </div>
                                                        </form>     
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <!-- Modal -->
     <div class="modal fade" id="myModal2">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <div class="card-body">
                                                        <form action="" id="form2" method="post">
                                                            <div id="upload-demo2"></div>
                                                            <input type="hidden" id="imagebase64" name="imagebase64">
                                                            <div class="cenbut">
                                                            <input type="file" id="upload2" value="Choose a file" ><br><br>
                                                            <button class="btn btn-primary ">Crop Image</button>
                                                            <button class="btn btn-default" onclick="closex()">Close</button>
                                                            </div>
                                                        </form>     
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

    <script>
    $(".btn-crop").click(function(){
        var cb1 = $("#cb1")[0].checked;
        var cb2 = $("#cb2")[0].checked;
        if(cb1)
        {
            $('#myModal1').modal('show');
        }
        else if(cb2)
        {
            $('#myModal2').modal('show');
        }
      
    });
</script>
</body>
