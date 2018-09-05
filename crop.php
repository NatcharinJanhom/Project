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
    <script type="text/javascript" src="theme/assets/js/croppie.js"></script>
    <link href="theme/assets/js/croppie.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">

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
                    
                        <div class='card'>
                            <div class="card-body">
                                <form action="test-image.php" id="form" method="post">
                                    <input type="file" id="upload" value="Choose a file">
                                    <div id="upload-demo"></div>
                                    <input type="hidden" id="imagebase64" name="imagebase64">
                                    <button class="btn btn-primary upload-result">Summit</button>
                                    <input type="button" value="Cancel" class="btn btn-light" onclick="goBack()">
                                </form>
                                <div>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>