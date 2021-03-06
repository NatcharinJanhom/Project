<html>

<head>
    <?php include('head.php'); ?>
</head>

<style>
    #bodypic1,
    #profile-5-2,
    #AA,
    #bodypic3 {
        margin-top: 20px;
    }

    .form-control,
    .asColorPicker-input,
    .dataTables_wrapper select,
    .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text],
    .jsgrid .jsgrid-table .jsgrid-filter-row select,
    .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number],
    .select2-container--default .select2-selection--single,
    .select2-container--default .select2-selection--single .select2-search__field,
    .tt-hint,
    .tt-query,
    .typeahead {
        border: 1px solid #f2f2f2;
        font-family: "Poppins", sans-serif;
        font-size: 1rem;
        padding: 0.56rem 0.75rem;
        line-height: 14px;
        font-weight: 300;
    }

    .content-wrapper {
        padding: 0rem 1.7rem;
        width: 100%;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }

    #myDIV {
        padding: 10px;
    }

    #Sp {
        margin-top: 12px;
        margin-left: 25px;
        margin-bottom: 12px;
    }

    .col-form-label {
        background-color: #ff9933;
    }

    #detail,
    #detail2 {
        margin-top: 30px;
        margin-left: auto;
    }

    #title {
        align-content: center;
        margin-top: 30px;

        margin-right: 700px;
        margin-left: 120px;
        background-color: lightblue;
    }

    .clearfix img {
        align-content: center;
        max-width: 120px;
        max-height: 120px;
        width: 100%;
        height: 100%;
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 0px;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
        background: #ff6258;
    }

    .tab-basic {
        border-bottom: none;
        margin-bottom: -15px;
    }

    .cc {
        margin-left: 12px;
    }


    input {

        text-align: center;
    }

    h1 {
        font-size: 1.2rem;
        font-weight: 600;
        text-align: left;
        color: tomato;
        margin-bottom: 20px;
    }

    .tab-basic .nav-item {
        margin-right: 5px;
    }

    .tab-basic .nav-item .nav-link,
    .tab-basic .nav-item .nav-link.active {
        color: red;
        padding: 10px;

    }

    .tab-basic .nav-item .nav-link.active {

        border-top: 1px solid #f12222;
        border-right: 1px solid #f12222;
        border-left: 1px solid #f12222;
        border-bottom: none;
        color: red;
        z-index: 999;
    }

    .nav-pills .nav-item .nav-link,
    .nav-tabs .nav-item .nav-link {
        line-height: 2;
    }

    .card .card-body {
        padding: 0rem 0rem;
    }

    .navv {
        background: none;

    }

    p {
        margin-bottom: 0rem;
        color: #f12222;
        font-weight: 600;
    }

    .img-card {}

    .mdi {
        font-size: 1.6rem;
    }

    .card-pic1 {
        padding: 9px;
        padding-top: 18px;
        background: none;
    }

    .x {
        padding-top: 14px;

    }
    #lat,#gene{
        color: black;
    }
    .img-a {
            vertical-align: middle;
            border-style: none;
            border-radius: 100%;
            max-height: 100px;
            max-width: 100px;
    }
    .sli {
        align-content: center;
        max-width: 120px;
        max-height: 120px;
        width: 100%;
        height: 100%;
    }
    .info_m{
        all: initial;
        * {
            all: unset;
        } 
    }
    .info_m{
        style=font-size: 20px; 
    } 
</style>

<body class="sidebar-icon-only">
    <div class="container-scroller">
        <?php include('navbar2.php'); ?>
        <div class="container-fluid page-body-wrapper">
            <?php include('sidebar2.php'); ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $ans=locationAll(); 
    $js_array = json_encode($ans, JSON_UNESCAPED_UNICODE);   
    
            for($k = 0;$k <=sizeof($ans);$k++)
            {
                $la =0;//
                $long =0;
                $a_l=0;$p_l=0;$c_l=0;
                if($ans[$k]['a_long']!=NULL && $ans[$k]['a_la']!=NULL)
                {
                    $a_l=1;
                }
                if($ans[$k]['p_long']!=NULL && $ans[$k]['p_la']!=NULL)
                {
                    $p_l=1;
                }
                if($ans[$k]['c_long']!=NULL && $ans[$k]['c_la']!=NULL)
                {
                    $c_l=1;
                }
                if($a_l==1)
                {
                    $la=$ans[$k]['a_la'];
                    $long=$ans[$k]['a_long'];
                    $detail = "Country : "." ".$ans[$k]['country']." "." <br>Province : "." ".$ans[$k]['province']." "."<br>Amp :  "." ".$ans[$k]['amp'].",<br>Accession : "." ".$ans[$k]['accession']."";
                    $acs = $ans[$k]['accession'];
                    for($m = 0;$m<= $k;$m++)
                   {
                           if($m == $k){
                            $arr[] = array($la,$long,$detail,$acs);
                           }
                           
                           if($arr[$m][0] == $la && $arr[$m][1] == $long)
                           {
                                //$arr[$m][2] = $arr[$m][2]."\n".$detail;
                                $arr[$m][3] = $arr[$m][3].",".$acs;
                                break;
                           }
                   }
                }
                
                else if($p_l==1)
                {
                    $la=$ans[$k]['p_la'];
                    $long=$ans[$k]['p_long'];
                    $detail = "Country : "." ".$ans[$k]['country']." "." <br>Province : "." ".$ans[$k]['province']." <br>Accession : "." ".$ans[$k]['accession']."";
                    $acs = $ans[$k]['accession'];
                    for($m = 0;$m<= $k;$m++)
                   {
                           if($m == $k){
                            $arr[] = array($la,$long,$detail,$acs);
                           }
                           
                           if($arr[$m][0] == $la && $arr[$m][1] == $long)
                           {
                                //$arr[$m][2] = $arr[$m][2]."\n".$detail;
                                $arr[$m][3] = $arr[$m][3].",".$acs;
                                break;
                           }
                   }
                }
                else if($c_l==1)
                {
                    $la=$ans[$k]['c_la'];
                    $long=$ans[$k]['c_long'];
                    $detail = "Country : "." ".$ans[$k]['country']." <br>Accession : "." ".$ans[$k]['accession']."";
                    $acs = $ans[$k]['accession'];
                    for($m = 0;$m<= $k;$m++)
                    {
                            if($m == $k){
                                $arr[] = array($la,$long,$detail,$acs);
                            }
                            
                            if($arr[$m][0] == $la && $arr[$m][1] == $long)
                            {
                                //$arr[$m][2] = $arr[$m][2]."\n".$detail;
                                $arr[$m][3] = $arr[$m][3].",".$acs;
                                break;
                            }
                    }
                }
            }
            $js_array = json_encode($arr, JSON_UNESCAPED_UNICODE);
            echo " <script> var arrJ = ". $js_array . ";console.log(". $js_array ."); </script>";           

    ?>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <h1>Germplasm Search</h1>
                            </div>
                        </div>
                       

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div id="myDIV">
                                            <div id="map" style="width:100%; height: 400;">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-content tab-content-solid">
                                    <div class="tab-pane fade active show" id="home-5-1" role="tabpanel" aria-labelledby="tab-5-1">
                                        <div id="detail" class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="col-sm-12">
                                                    <p>
                                                        <i class="mdi mdi-map-marker-multiple " data-name="mdi-map-marker-multiple"></i>Target &nbsp; &nbsp;
                                                       <div class="form-inline">
                                                        lat  : <input style = "margin:5px" id = "lat" type="text" name="lat" value="">
                                                        lon : <input style = "margin:5px" id = "lon" type="text" name="lon" value="">
                                                        Accession : <input style = "margin:5px" id = "acce" type="text" name="acce" value="">
                                                        <button id = "search" type="button">Search</button>
                                                        </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="detail" class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="col-sm-6">
                                                    <p>Number of varieties found &nbsp; &nbsp;
                                                        <span id="gene"></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>



                                        <div id="myImage1" class='row remo'>

                                        </div>
                                        <div id="bodypic2">
                                            <div class="row">
                                                <p id="Sp" class="col-lg-3 ">Species found nearby</p>
                                            </div>
                                            <div class="row">
                                                <div class="img-card col-xl-2 col-lg-2 col-md-3 col-sm-3 ">
                                                    <div class="card card-pic1">
                                                        <div class="card-body card-pic1">
                                                            <div class="clearfix">
                                                                <center>
                                                                    <img class="img-a" src="pic/t1.jpg">
                                                                    <a href="detail.php">
                                                                        <p>LE042</p>
                                                                    </a>
                                                                </center>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img-card col-xl-2 col-lg-2 col-md-3 col-sm-3 ">
                                                    <div class="card card-pic1">
                                                        <div class="card-body card-pic1">
                                                            <div class="clearfix">
                                                                <center>
                                                                    <img class="img-a"  src="pic/t2.jpg">
                                                                    <a href="detail.php">
                                                                        <p>LE043</p>
                                                                    </a>
                                                                </center>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img-card col-xl-2 col-lg-2 col-md-3 col-sm-3 ">
                                                    <div class="card card-pic1">
                                                        <div class="card-body card-pic1">
                                                            <div class="clearfix">
                                                                <center>
                                                                    <img class="img-a" src="pic/t3.jpg">
                                                                    <a href="detail.php">
                                                                        <p>LE044</p>
                                                                    </a>
                                                                </center>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                  <!--  <div class="tab-pane fade" id="profile-5-2" role="tabpanel" aria-labelledby="tab-5-2">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <p>Breeding center </p>
                                                <br>
                                            </div>
                                        </div>
                                   !-->     
                                        <?php /*<div id="bodypic3" >
                                            <div class="row">
                                                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 ">
                                                    <div class="card card-pic1">
                                                        <div class="card-body card-pic1">
                                                            <div class="clearfix">
                                                                <center>
                                                                    <img class="img-a nevber" src="pic/t1.jpg">
                                                                    <a href="detail.php">
                                                                        <p class="clearfix2">LE042</p>
                                                                    </a>
                                                                </center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img-card col-xl-2 col-lg-2 col-md-3 col-sm-3 ">
                                                    <div class="card card-pic1">
                                                        <div class="card-body card-pic1">
                                                            <div class="clearfix">
                                                                <center>
                                                                    <img class="img-a nevber" src="pic/t3.jpg">
                                                                    <a href="detail.php">
                                                                        <p class="clearfix2">LE043</p>
                                                                    </a>
                                                                </center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img-card  col-xl-2 col-lg-2 col-md-3 col-sm-3 ">
                                                    <div class="card card-pic1">
                                                        <div class="card-body card-pic1">
                                                            <div class="clearfix">
                                                                <center>
                                                                    <img class="img-a nevber" src="pic/t2.jpg">
                                                                    <a href="detail.php">
                                                                        <p class="clearfix2">LE044</p>
                                                                    </a>
                                                                </center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>*/
                                        ?>
                                   <!--   </div>!-->  
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
    $( document ).ready(function() {
        $("#search").click(function() {
           var lat_in = $("#lat").val();
           var lon_in = $("#lon").val();  
           var acce = $("#acce").val();      
           var i_ta =0;
           
           
           if(lat_in != '' && lon_in != '')
           {
                    
                    for (i_ta=0; i_ta<arrJ.length ;i_ta++)
                    {
                        if((arrJ[i_ta][0] == lat_in & arrJ[i_ta][1]== lon_in) )
                        {
                                find_posi(arrJ[i_ta][0],arrJ[i_ta][1], arrJ[i_ta][2],arrJ[i_ta][3],i_ta ) ;  
                                break;
                        }
                    }
           }
           else if(acce !=' ')
           {
               
                    for (i_ta=0; i_ta<arrJ.length ;i_ta++)
                    {
                        var sp = [];
                        sp = arrJ[i_ta][3].split(",");
                        
                        for (i_ta2=0; i_ta2<sp.length ;i_ta2++)
                        {
                            //alert(sp[i_ta2]);
                            if(sp[i_ta2] == acce)
                            {
                                
                                find_posi(arrJ[i_ta][0],arrJ[i_ta][1], arrJ[i_ta][2],arrJ[i_ta][3],i_ta ) ;  
                                i_ta = arrJ.length+2;
                                break;
                            }
                                
                        }
                    } 
           }
           

        });
    });
    function showimg(acs) {

        $(".remo").empty();
        var sp = acs.split(",");
        //var len = sp.length;
        var s = ""
        for (i = 1; i <= sp.length; i++) {
            $('#myImage1').append("<div class='img-card col-xl-2 col-lg-2 col-md-2 col-sm-2'><div class='card card-pic1'><div class='card-body card-pic1'><div class='clearfix'><center><img id='myImage" + (i + 1) + "'  class='remo img-a'  ><a href='detail.php'><p class='remo'><span id='acs" + i + "' class='remo'> </span></p></a></center> </div></div></div></div>");
            $('#myImage' + (i + 1)).attr({ src: 'pic/t' + i + '.jpg' });
            $('#acs' + (i)).append(sp[(i - 1)]);
           

        }
    }
    var map,marker,infowindow;
    
    
    function asree() {
        $('#bodypic2').hide();
         map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: 13.7244416, lng: 100.3529157 },
            zoom: 5,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        infowindow = new google.maps.InfoWindow();
        var  i;


        for (i = 0; i < arrJ.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(arrJ[i][0], arrJ[i][1]),
                map: map
            });
               google.maps.event.addListener(marker, 'click', (function (marker, i) {

                return function () {
                    $("#lat").empty();
                    $("#long").empty();
                    $("#acce").empty();
                    $('#bodypic2').show();
                    var res = arrJ[i][3].split(",");
                    $("#lat").val(arrJ[i][0]);
                    $("#lon").val(arrJ[i][1]);
                    //document.getElementById('lon').innerHTML = arrJ[i][1];
                    document.getElementById('gene').innerHTML = res.length;
                    showimg(arrJ[i][3]);
                    // findNearestMarker(arrJ[i][0],arrJ[i][1])
                    infowindow.setContent('<div class="info_m" >'+arrJ[i][2]+'<br>'+arrJ[i][3]+'</div>');
                    infowindow.open(map, marker);
                }
            })(marker, i));
            
            
        }
       
        
        
    }
    function find_posi(l,o,c,c_acc,i_p) {
       
        var sp = c_acc.split(",");
        //console.log(sp[0]);
        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(l, o),
                            map: map,
                            icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png'
                        });
                    google.maps.event.addListener(marker, 'click', (function (marker, i_p) {

                    return function () {          
                    infowindow.setContent('<div style="font-size: 18px;">'+c+'<br>'+c_acc+'</div>');
                    infowindow.open(map, marker);
                        }
                    })(marker, i_p));
    }


    function rad(x) {return x*Math.PI/180;}
    function find_closest_marker( event ) {
        
        var lat = event.latLng.lat();
        var lng = event.latLng.lng();
        var R = 6371; // radius of earth in km
        var distances = [];
        var closest = -1;
        for( i=0;i<map.markers.length; i++ ) {
            var mlat = map.markers[i].position.lat();
            var mlng = map.markers[i].position.lng();
            var dLat  = rad(mlat - lat);
            var dLong = rad(mlng - lng);
            var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
                Math.cos(rad(lat)) * Math.cos(rad(lat)) * Math.sin(dLong/2) * Math.sin(dLong/2);
            var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
            var d = R * c;
            distances[i] = d;
            if ( closest == -1 || d < distances[closest] ) {
                closest = i;
            }
        }
    
        alert(map.markers[closest].title);
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