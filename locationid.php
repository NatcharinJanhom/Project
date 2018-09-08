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
    .sli {
        align-content: center;
        max-width: 120px;
        max-height: 120px;
        width: 100%;
        height: 100%;
    }
</style>

<body>
    <div class="container-scroller"> 
       
        <div class="container-fluid page-body-wrapper">
           
            <div class="main-panel">
                <div class="content-wrapper">
                    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $ans=location();     
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
                    $arr[] = array($la,$long,$detail,$acs);
                    /*for($m = 0;$m<= $k;$m++)
                    {
                            if($m == $k){
                                $arr[] = array($la,$long,$detail,$acs);
                            }
                            
                            if($arr[$m][0] == $la && $arr[$m][1] == $long)
                            {
                                $arr[$m][2] = $arr[$m][2]."\t".$detail;
                                $arr[$m][3] = $arr[$m][3].",".$acs;
                                break;
                            }
                    }*/
                }
                else if($ch1==1&&$ch2==0)
                {
                    $la=$ans[$k]['p_la'];
                    $long=$ans[$k]['p_long'];
                    $detail = "พันธ์ุ"." ".$ans[$k]['accession']." "."ประเทศ "." ".$ans[$k]['country']." "."จังหวัด "." ".$ans[$k]['province'];
                    $acs = $ans[$k]['accession'];
                    $arr[] = array($la,$long,$detail,$acs);
                    /*for($m = 0;$m<= $k;$m++)
                   {
                           if($m == $k){
                            $arr[] = array($la,$long,$detail,$acs);
                           }
                           
                           if($arr[$m][0] == $la && $arr[$m][1] == $long)
                           {
                                $arr[$m][2] = $arr[$m][2]."\t".$detail;
                                $arr[$m][3] = $arr[$m][3].",".$acs;
                                break;
                           }
                   }*/
                }
                else if($ch1==0&&$ch2==0)
                {
                    $la=$ans[$k]['a_la'];
                    $long=$ans[$k]['a_long'];
                    $detail = "พันธ์ุ"." ".$ans[$k]['accession']." "."ประเทศ "." ".$ans[$k]['country']." "."จังหวัด "." ".$ans[$k]['province']." "."อำเภอ ";
                    $acs = $ans[$k]['accession'];
                    $arr[] = array($la,$long,$detail,$acs);
                    /*for($m = 0;$m<= $k;$m++)
                   {
                           if($m == $k){
                            $arr[] = array($lFa,$long,$detail,$acs);
                           }
                           
                           if($arr[$m][0] == $la && $arr[$m][1] == $long)
                           {
                                $arr[$m][2] = $arr[$m][2]."\t".$detail;
                                $arr[$m][3] = $arr[$m][3].",".$acs;
                                break;
                           }
                   }*/
                }
            }
            $js_array = json_encode($arr, JSON_UNESCAPED_UNICODE);
            echo " <script> var arrJ = ". $js_array . "; </script>";           

    ?>
                        <br>
                       
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
                    infowindow.setContent('พันธ์ุ LE001 ประเทศ Thailand จังหวัด Kamphaengpet');
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }





</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwVxLnsuNM9mJUqDFkj6r7FSxVcQCh4ic&callback=asree" async defer></script>

<?php

 function location()
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
        LEFT join amp on amp.id_amp = fact_data_country.id_amp   WHERE accession='LE050' ";
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