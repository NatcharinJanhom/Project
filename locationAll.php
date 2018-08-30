<html>

<head>
    <?php include('head.php'); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="initial-scale=1.0">
    </script>
</head>

<style>
    #bodypic1,#profile-5-2,#AA,#bodypic3 {
        margin-top: 20px;
    }

    .content-wrapper {
        background: white;
        padding: 0rem 1.7rem;
        width: 100%;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }
    .tab-solid-danger .nav-link.active {
            background: green;
    }
    #detail,
    #Sp {
        margin-top: 30px;
    }

    #title {
        align-content: center;
        margin-top: 30px;

        margin-right: 700px;
        margin-left: 120px;
        background-color: lightblue;
    }

    .clearfix img {
        border-radius: 50%;
        align-content: center;
    }

    p {
       
    }

    .card-body {
        margin: auto;

        padding: 10px;
    }

    input {
      
        text-align: center;
    }

    .card {
        background-color: lightblue;
    }
</style>

<body>
    <div class="container-scroller">
        <?php include('navbar.php'); ?>
        <div class="container-fluid page-body-wrapper">
            <?php include('sidebar.php'); ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $ans=locationAll();     
            for($k = 0;$k <=sizeof($ans);$k++)
            {
                $la =0;//
                $long =0;
                $ch1=0;$ch2=0;$ch3=0;
                $la_c =$ans[$k]['c_la'];
                $long_c =$ans[$k]['c_long'];
                $detail = $ans[$k]['accession']." "."  ";
                if(empty($ans[$k]['a_long']))
                {
                    //echo "dd";
                    $ch1=1;
                }
                if(empty($ans[$k]['p_long']))
                {
                    $ch2=1;
                }
                if($ch1==1&&$ch2==1)
                {
                    $la=$ans[$k]['c_la'];
                    $long=$ans[$k]['c_long'];
                    $detail = "พันธ์ุ"." ".$ans[$k]['accession']." "."ประเทศ "." ".$ans[$k]['country'];
                    $acs = $ans[$k]['accession'];
                    for($m = 0;$m<= $k;$m++)
                    {
                            if($m == $k){
                                $arr[] = array($la,$long,$detail,$acs);
                            }
                            
                            if($arr[$m][0] == $la && $arr[$m][1] == $long)
                            {
                                $arr[$m][2] = $arr[$m][2]." ".$detail;
                                $arr[$m][3] = $arr[$m][3].",".$acs;
                                break;
                            }
                    }
                }
                else if($ch1==1&&$ch2==0)
                {
                    $la=$ans[$k]['p_la'];
                    $long=$ans[$k]['p_long'];
                    $detail = "พันธ์ุ"." ".$ans[$k]['accession']." "."ประเทศ "." ".$ans[$k]['country']." "."จังหวัด "." ".$ans[$k]['province'];
                    $acs = $ans[$k]['accession'];
                    for($m = 0;$m<= $k;$m++)
                   {
                           if($m == $k){
                            $arr[] = array($la,$long,$detail,$acs);
                           }
                           
                           if($arr[$m][0] == $la && $arr[$m][1] == $long)
                           {
                                $arr[$m][2] = $arr[$m][2]." ".$detail;
                                $arr[$m][3] = $arr[$m][3].",".$acs;
                                break;
                           }
                   }
                }
                else if($ch1==0&&$ch2==0)
                {
                    $la=$ans[$k]['a_la'];
                    $long=$ans[$k]['a_long'];
                    $detail = "พันธ์ุ"." ".$ans[$k]['accession']." "."ประเทศ "." ".$ans[$k]['country']." "."จังหวัด "." ".$ans[$k]['province']." "."อำเภอ ";
                    $acs = $ans[$k]['accession'];
                    for($m = 0;$m<= $k;$m++)
                   {
                           if($m == $k){
                            $arr[] = array($lFa,$long,$detail,$acs);
                           }
                           
                           if($arr[$m][0] == $la && $arr[$m][1] == $long)
                           {
                                $arr[$m][2] = $arr[$m][2]." ".$detail;
                                $arr[$m][3] = $arr[$m][3].",".$acs;
                                break;
                           }
                   }
                }
            }
            $js_array = json_encode($arr, JSON_UNESCAPED_UNICODE);
            echo " <script> var arrJ = ". $js_array . "; </script>";           

    ?>
                        <br>

                        <ul class="nav nav-tabs tab-solid tab-solid-danger" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="tab-5-1" data-toggle="tab" href="#home-5-1" role="tab" aria-controls="home-5-1" aria-selected="false">แหล่งที่พบ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-5-2" data-toggle="tab" href="#profile-5-2" role="tab" aria-controls="profile-5-2" aria-selected="false">ศูนย์ปรับปรุงพันธ์ุ</a>
                            </li>
                        </ul>

                        <div class="row">
                            <div class="col-lg-12">
                                <div id="myDIV">
                                    <div id="map" style="width:100%; height: 400;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="tab-content tab-content-solid">
                        <div class="tab-pane fade active show" id="home-5-1" role="tabpanel" aria-labelledby="tab-5-1">
                            <div id="detail" class="form-group row">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label">Lat</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lat">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label">Lon</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lon">
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">จำนวณพันธ์ุที่พบ</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="gene">
                                </div>
                            </div>
                            <div id="bodypic1">

                            </div>
                            <div id="bodypic2">
                                <p id="Sp">Species found nearby</p>
                                <div class="row">
                                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 grid-margin stretch-card">
                                        <div class="card card-statistics">
                                            <div class="card-body">
                                                <div class="clearfix">
                                                    <img class="nevber" src="pic/t1.jpg" style="width:100px">

                                                </div>
                                                <p class="clearfix2">xxxx</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 grid-margin stretch-card">
                                        <div class="card card-statistics">
                                            <div class="card-body">
                                                <div class="clearfix">
                                                    <img class="nevber" src="pic/t3.jpg" style="width:100px">

                                                </div>
                                                <p class="clearfix2">xxxx</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 grid-margin stretch-card">
                                        <div class="card card-statistics">
                                            <div class="card-body">
                                                <div class="clearfix">
                                                    <img class="nevber" src="pic/t2.jpg" style="width:100px">

                                                </div>
                                                <p class="clearfix2">xxxx</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="profile-5-2" role="tabpanel" aria-labelledby="tab-5-2">
                            <div class="row">
                                <label class="col-sm-3 col-form-label">ศูนย์ปรับปรุงพันธุ์ </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row" id="AA">
                                <label class="col-sm-3 col-form-label">จำนวนพันธุ์ </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div id="bodypic3">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 grid-margin stretch-card">
                                        <div class="card card-statistics">
                                            <div class="card-body">
                                                <div class="clearfix">
                                                    <img class="nevber" src="pic/t1.jpg" style="width:100px">

                                                </div>
                                                <p class="clearfix2">xxxx</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 grid-margin stretch-card">
                                        <div class="card card-statistics">
                                            <div class="card-body">
                                                <div class="clearfix">
                                                    <img class="nevber" src="pic/t3.jpg" style="width:100px">

                                                </div>
                                                <p class="clearfix2">xxxx</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 grid-margin stretch-card">
                                        <div class="card card-statistics">
                                            <div class="card-body">
                                                <div class="clearfix">
                                                    <img class="nevber" src="pic/t2.jpg" style="width:100px">

                                                </div>
                                                <p class="clearfix2">xxxx</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

<script>

    function showimg(acs) {

        $(".remo").remove();
        console.log(acs);
        var sp = acs.split(",");
        //var len = sp.length;
        for (i = 0; i < sp.length; i++) {
            var k = i + 1;
            $('#bodypic1').after("<div class='row remo' ><div class='col-lg-2'><div class='card card-statistics'><div class='card-body'><div class='clearfix'><img id='myImage" + k + "'  class='remo' style='width:100px' > </div></div></div></div><div class='col-lg-4'><div class='card card-statistics'><div class='card-body'> <div class='clearfix'><p class='remo'>Accession Number  <span> <input type='text' id='acs" + k + "'  class='remo' ></span></p></div></div></div></div></div>");
            $('#myImage' + k + '').attr({ src: 'pic/t' + k + '.jpg' });
            $('#acs' + k).val(sp[i]);
        }
    }
    function asree() {

        var map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: 13.7244416, lng: 100.3529157 },
            zoom: 5,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var infowindow = new google.maps.InfoWindow();
        var marker, i;


        for (i = 0; i < arrJ.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(arrJ[i][0], arrJ[i][1]),
                map: map
            });

            google.maps.event.addListener(marker, 'click', (function (marker, i) {

                return function () {
                    var res = arrJ[i][3].split(",");
                    document.getElementById('lat').value = arrJ[i][0];
                    document.getElementById('lon').value = arrJ[i][1];
                    document.getElementById('gene').value = res.length;
                    showimg(arrJ[i][3]);
                    // findNearestMarker(arrJ[i][0],arrJ[i][1])
                    infowindow.setContent(arrJ[i][2]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }

    function findNearestMarker(x, y) {
        var minDist = 1000,
            nearest_text = '*None*',
            markerDist,
            // get all objects added to the map
            objects = map.getObjects(),
            len = map.getObjects().length,
            i;

        // iterate over objects and calculate distance between them
        for (i = 0; i < len; i += 1) {
            markerDist = objects[i].getPosition().distance(x, y);
            if (markerDist < minDist) {
                minDist = markerDist;
                nearest_text = objects[i].getData();
            }
        }

        alert('The nearest marker is: ' + nearest_text);
    }



</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwVxLnsuNM9mJUqDFkj6r7FSxVcQCh4ic&callback=asree" async defer></script>

<?php

 function location($id)
    {
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
        $con = ConDb::getInstance();
        $sql = "SELECT accession,country,country.latitude as c_la,country.longitude as c_long,province,province.latitude as p_la,province.longitude as p_long,amp,
        amp.latitude as a_la,amp.longitude as a_long FROM fact_data_country 
        LEFT join country on country.id_country = fact_data_country.id_country 
        LEFT JOIN province on province.id_province = fact_data_country.id_province 
        LEFT join amp on amp.id_amp = fact_data_country.id_amp   WHERE accession='$id' ";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } 
     function locationAll()
    {
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
        $con = ConDb::getInstance();
        $sql = "SELECT accession,country,country.latitude as c_la,country.longitude as c_long,province,province.latitude as p_la,province.longitude as p_long,amp,
        amp.latitude as a_la,amp.longitude as a_long FROM fact_data_country 
        LEFT join country on country.id_country = fact_data_country.id_country 
        LEFT JOIN province on province.id_province = fact_data_country.id_province 
        LEFT join amp on amp.id_amp = fact_data_country.id_amp ";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } 


    ?>