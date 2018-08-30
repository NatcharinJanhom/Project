<html>

<head>
    <?php include('head.php'); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="initial-scale=1.0">
    </script>
</head>

<style>
    #detail {
        margin-top: 30px;
    }

    #title {
        align-content: center;
        margin-top: 30px;

        margin-right: 700px;
        margin-left: 120px;
        background-color: lightblue;
    }

    p {

        margin-left: 20px;
    }

    input {
        text-align: center;
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



                        <div class="row">
                            <div class="col-lg-12">
                                <div id="myDIV">
                                    <h5>
                                        <a href="#" onclick='window.history.back();'>
                                            <i class="fas fa-angle-left"></i>Back</a>
                                    </h5>
                                    <br>
                                    <div id="map" style="width:100%; height: 800;">

                                    </div>
                                </div>
                            </div>
                        </div>

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
                        <div class="row">
                                    <div class="col-lg-2">
                                        <div id="pic"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="detailacs"></div>
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
        $("#pic").empty();
        $(".remo").remove();
        console.log(acs);
        var sp = acs.split(",");
        //var len = sp.length;
        for (i = 0; i < sp.length; i++) {
            var k = i + 1;
            $("#pic").after('<img id="myImage' + k + '"  class="remo" style="width:100px" > ');
            $('#myImage' + k + '').attr({ src: 'pic/t' + k + '.jpg' });
            $("#detailacs").after("<p class='remo'>Accession Number :</p> <input type='text' id='acs" + k + "'  class='remo' >");
            //$('#myImage' + k + '').after("<p class='remo'>Accession Number :</p> <input type='text' id='acs'" + k + "'  class='remo' >");
            $('#acs'+k).val(sp[i]);
            console.log(sp[i]);
           
            //document.getElementById('acs'+k+'').value = sp[i];


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
                    infowindow.setContent(arrJ[i][2]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
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