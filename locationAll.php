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
        background-color: #00FFFF;
        /* background: none; */
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
    span#lon_c,span#lat_c{
        color:black;
    }
    #content_search1,#content_search2{
        margin-top: 20px;
        margin-bottom: 20px;
        margin-right: 20px;
        margin-left: 20px;
    }
    .content_search_paddind{
        padding: 8px;
    }
</style>

<body class="sidebar-icon-only">
    <div class="container-scroller">
        <?php include('navbar.php'); ?>
        <div class="container-fluid page-body-wrapper">
            <?php include('sidebar.php'); ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <?php
            error_reporting(E_ALL ^ E_NOTICE);
            $ans=locationAll(); 
            $js_array = json_encode($ans, JSON_UNESCAPED_UNICODE);  ///////////////// ทำ json ของข้อมูลที่ดึงมาทั้งหมด////////////
            for($k = 0;$k <=sizeof($ans);$k++)  ///////ทำ หนึ่งจุด lat/long ต่อหลาย accsession
            {
                $la =0;
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
                if($a_l==1) /////////////// ถ้ามีอำเภอให้เช็คก่อนแล้วค่อยไลไป จังหวัด ประเทศ //////////
                {
                    $la=$ans[$k]['a_la'];
                    $long=$ans[$k]['a_long'];
                    $detail = "Country : "." ".$ans[$k]['country']." "." <br>Province : "." ".$ans[$k]['province']." "."<br>Amp :  "." ".$ans[$k]['amp'].",<br>Accession Number: "." ";
                    $acs = $ans[$k]['accession'];
                    for($m = 0;$m<= $k;$m++)
                    {
                           if($m == $k){
                            $arr[] = array($la,$long,$detail,$acs); /////// สร้าง กลุ่ม จุดใหม่
                           }
                           if($arr[$m][0] == $la && $arr[$m][1] == $long)
                           {
                                if(strlen($arr[$m][2]) < strlen($detail))////// ถ้าจุดที่เข้ามาใหม่มีข้อมูลที่ละเอียดขึ้น
                                {
                                    $arr[$m][2] = $detail;
                                }
                                $arr[$m][3] = $arr[$m][3].",".$acs; //////ต่อจุด lat/long เดิมที่มีอยู่
                                break;
                           }
                    }
                }
                else if($p_l==1)///////จังหวัด
                {
                    $la=$ans[$k]['p_la'];
                    $long=$ans[$k]['p_long'];
                    $detail = "Country : "." ".$ans[$k]['country']." "." <br>Province : "." ".$ans[$k]['province']." <br>Accession Number: "." ";
                    $acs = $ans[$k]['accession'];
                    for($m = 0;$m<= $k;$m++)
                   {
                           if($m == $k){
                            $arr[] = array($la,$long,$detail,$acs);
                           }
                           if($arr[$m][0] == $la && $arr[$m][1] == $long)
                           {
                                if(strlen($arr[$m][2]) < strlen($detail))////// ถ้าจุดที่เข้ามาใหม่มีข้อมูลที่ละเอียดขึ้น
                                {
                                    $arr[$m][2] = $detail;
                                }
                                $arr[$m][3] = $arr[$m][3].",".$acs;
                                break;
                           }
                   }
                }
                else if($c_l==1)///////ประเทศ
                {
                    $la=$ans[$k]['c_la'];
                    $long=$ans[$k]['c_long'];
                    $detail = "Country : "." ".$ans[$k]['country']." <br>Accession Number : "." ";
                    $acs = $ans[$k]['accession'];
                    for($m = 0;$m<= $k;$m++)
                    {
                            if($m == $k){
                                $arr[] = array($la,$long,$detail,$acs);
                            }
                            if($arr[$m][0] == $la && $arr[$m][1] == $long)
                            {
                                $arr[$m][3] = $arr[$m][3].",".$acs;
                                break;
                            }
                    }
                }
            }
            $js_array = json_encode($arr, JSON_UNESCAPED_UNICODE); ///////// แปลง arr ที่ทำเปลี่ยนกลุ่มแล้วส่งขึ้น json //////
            echo " <script> var arrJ = ". $js_array . ";console.log(". $js_array ."); </script>";           

    ?>
                        <br>
                        <div class="row">
                            <div class="col-lg-6">
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
                                        <div class="row content_search_paddind">
                                            <div class="col-lg-12 col-md-12">
                                            <div class="card  ">
                                            <div id = "content_search1" class="card-body ">
                                                <div id="detail" class="row">
                                                    <div class="col-lg-6 col-md-6 A1">
                                                
                                                        <i class="mdi mdi-map-marker-multiple " data-name="mdi-map-marker-multiple"></i>Target &nbsp; &nbsp;
                                                        <div class="form-inline">
                                                                    <p>Latitude  : <span style = "margin:5px " id = "lat_c" type="text" name="lat" ></span></p>
                                                                    <p>Longitude : <span style = "margin:5px " id = "lon_c" type="text" name="lon" ></span></p>
                                                        </div>
                                                
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 A2">
                                                        <div class="template-demo">
                                                            <div id="value-range" class="ul-slider slider-success noUi-target noUi-ltr noUi-horizontal"></div>
                                                                <p class="mt-3">Value Area ( m. ) :
                                                                <span id="huge-value"></span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row content_search_paddind">
                                            <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                            <div id = "content_search2" class="card-body ">
                                            <div id="detail" class=" row">
                                            <div class="col-lg-12">
                                                    <p> 
                                                        <i class="mdi mdi-map-marker-multiple " data-name="mdi-map-marker-multiple"></i> Target Search &nbsp; &nbsp;
                                                       <div class="form-inline">
                                                       Latitude  : <input style = "margin:5px" id = "lat" type="text" name="lat" value="">
                                                       Longitude : <input style = "margin:5px" id = "lon" type="text" name="lon" value="">
                                                            , Accession Number : <input style = "margin:5px" id = "acce" type="text" name="acce" value="">
                                                            <button id = "search-acc" type="button">Search</button>
                                                        </div>
                                                    </p>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div  class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="col-sm-6">
                                                    <p>Found species &nbsp; &nbsp;
                                                        <span id="gene"></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="myImageA1" class='row remo'></div>
                                        <div  class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="col-sm-6">
                                                    <p>Similar species found &nbsp; &nbsp;
                                                        <span id="Sp"></span><input style = "margin:5px" id = "distance_search" type="text" name="distance_search" value="100000" hidden>
                                                        
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="myImageF1" class='row found_area'></div>

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
    $( document ).ready(function() {
        $("#acce").change(function() {
            $("#lat").val('');
            $("#lon").val('');
        });
        $("#lat").change(function() {
            $("#acce").val('');
        });
        $("#search-acc").click(function() {
           var lat_in = $("#lat").val();//distance_search
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
function showimg(acs) 
    {
        $(".remo").empty();
        var sp = acs.split(",");
        var s = ""
        var i;
        for (i = 1; i <= sp.length; i++) {
            $('#myImageA1').append("<div class='img-card col-xl-2 col-lg-2 col-md-2 col-sm-2'><div class='card card-pic1'><div class='card-body card-pic1'><div class='clearfix'><center><img id='myImageA" + (i + 1) + "'  class='remo img-a'  ><a href='detail.php'><p class='remo'><span id='acs" + i + "' class='remo'> </span></p></a></center> </div></div></div></div>");
            $('#myImageA' + (i + 1)).attr({ src: 'pic/t' + i + '.jpg' });
            $('#acs' + (i)).append(sp[(i - 1)]);
        }
    }
function showimg_Sp(acs) 
    {
        $(".found_area").empty();
        if(acs.length !== 0)
        {
            
            console.log("tst");
            var sp = acs.join(","); //////// ทำ array LExx ให้เป็นสติงตัวเดียว
            sp = sp.split(",");
            document.getElementById('Sp').innerHTML = sp.length;
            var i;
            for (i = 1; i <= sp.length; i++) 
            {
                $('#myImageF1').append("<div class='img-card col-xl-2 col-lg-2 col-md-2 col-sm-2'><div class='card card-pic1'><div class='card-body card-pic1'><div class='clearfix'><center><img id='myImageF" + (i + 1) + "'  class='remo img-a'  ><a href='detail.php'><p class='remo'><span id='acsF" + i + "' class='remo'> </span></p></a></center> </div></div></div></div>");
                $('#myImageF' + (i + 1)).attr({ src: 'pic/t' + i + '.jpg' });
                $('#acsF' + (i)).append(sp[(i - 1)]);
            }
        }
        else
            document.getElementById('Sp').innerHTML = '0';
        
       
    }
var map,marker,infowindow,areaNear = [];
var searchArea,searchAreaRadius,startLat,startLng;
function asree() 
    {
        searchAreaRadius = $("#distance_search").val(), // metres$("#lat").val();//distance_search
        startLat = 9.215077,
        startLng = 99.266872;
        searchAreaRadius = parseInt(searchAreaRadius,10);
        console.log(searchAreaRadius);
        var startLatLng = new google.maps.LatLng(startLat, startLng);
         map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: 13.7244416, lng: 100.3529157 },
            zoom: 5,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        searchArea = new google.maps.Circle({
            strokeColor: '#FF0000',
            strokeOpacity: 0.5,
            strokeWeight: 2,
            fillColor: '#FF0000',
            fillOpacity: 0.2,
            map: map,
            center: startLatLng,
            radius: searchAreaRadius
        });
        map.markers = [];
        infowindow = new google.maps.InfoWindow();
        var  i,res;
        for (i = 0; i < arrJ.length; i++) { //////// set แต่ละ mark
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(arrJ[i][0], arrJ[i][1]),
                map: map,
                title: arrJ[i][3]
            });
            map.markers.push(marker);
               google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    $("#lat_c").empty();
                    $("#long_c").empty();
                    $("#acce").empty();
                  
                    res = arrJ[i][3].split(",");
                    document.getElementById('lat_c').innerHTML = arrJ[i][0];
                    document.getElementById('lon_c').innerHTML = arrJ[i][1];
                    document.getElementById('gene').innerHTML = res.length;//////ส่ง ขนาดไปให้แสดงจำนวนที่พบ
                    showimg(arrJ[i][3]);
                    infowindow.setContent('<div class="info_m" >'+arrJ[i][2]+'<br>'+arrJ[i][3]+'</div>');
                    infowindow.open(map, marker);
                    if (marker.getAnimation() !== null) //////// set animation
                    {
                        marker.setAnimation(null);
                    } 
                    else {
                        marker.setAnimation(google.maps.Animation.BOUNCE);
                    }               
                }
            })(marker, i));   
            google.maps.event.addListener(marker, 'click', function(e) {
                startLatLng = e.latLng;
                searchArea.setOptions({
                center: startLatLng
                });
                      map.panTo(e.latLng);
                      areaNear = [];
                      var i_na=0;//////// ตัวแปรเพิ่มขนาดอาเรย์ คำตอบ
                        // find markers in area
                        for (var i_n = 0; i_n <map.markers.length; i_n++)
                        {
                            if(map.markers[i_n].getPosition() != searchArea.getCenter() )
                            {
                                    //console.log('Marker: ' + map.markers[i_n].title + ', position: ' + map.markers[i_n].getPosition());
                                    // ---------- Here comes the error: 
                                    // TypeError: e is undefined
                                    if (google.maps.geometry.spherical.computeDistanceBetween(map.markers[i_n].getPosition(), searchArea.getCenter()) <= searchArea.getRadius()) 
                                    { 
                                        areaNear[i_na] = map.markers[i_n].title;
                                        i_na++;
                                        //console.log('=> is in searchArea');
                                    } 
                                    else
                                    {
                                        //console.log('=> is NOT in searchArea');
                                    }
                            }   
                        }
                        showimg_Sp(areaNear);
            });
            google.maps.event.addDomListener(window, 'load', asree);
        } 
    }
function rad(x) {return x*Math.PI/180;}
function find_posi(l,o,c,c_acc,i_p) {   
        var sp = c_acc.split(",");
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
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwVxLnsuNM9mJUqDFkj6r7FSxVcQCh4ic&callback=asree" async defer></script>
<?php
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
function locationAll()
    {
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
    <!-- <script src="theme/assets/js/shared/ion-range-slider.js"></script>
    <script src="theme/assets/js/shared/no-ui-slider.js"></script> -->
    <script >
    
    (function($) {
  'use strict';
  // Range Slider
  if ($("#value-range").length) {
    var bigValueSlider = document.getElementById('value-range'),
      bigValueSpan = document.getElementById('huge-value');

    noUiSlider.create(bigValueSlider, {
      start: 1,
      step: 0,
      range: {
        min: 0,
        max: 2000
      }
    });
    var i=0,j=0;
    var range = [];
    for(i=0;i<=200000;i=i+100)
    {
        range[j] = i.toString();
        j++;
    }
    
    bigValueSlider.noUiSlider.on('update', function(values, handle) {
      //console.log(range[Math.floor(values)]);
      $("#distance_search").val(range[Math.floor(values)]);
      asree();

      bigValueSpan.innerHTML = range[Math.floor(values)];
    });
  }
  if ($("#skipstep").length) {
    var skipSlider = document.getElementById('skipstep');
    noUiSlider.create(skipSlider, {
      range: {
        'min': 0,
        '10%': 10,
        '20%': 20,
        '30%': 30,
        // Nope, 40 is no fun.
        '50%': 50,
        '60%': 60,
        '70%': 70,
        // I never liked 80.
        '90%': 90,
        'max': 100
      },
      snap: true,
      start: [20, 90]
    });
    var skipValues = [
      document.getElementById('skip-value-lower'),
      document.getElementById('skip-value-upper')
    ];

    skipSlider.noUiSlider.on('update', function(values, handle) {
      skipValues[handle].innerHTML = values[handle];
    });
  }
})(jQuery);
    
    
    </script>