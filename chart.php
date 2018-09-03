<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include('head.php'); ?>    
  </head>
  <style>
    .chart-data{
        border:solid 1px #E0E0E0;
        padding:50px;
        margin:20px;
        border-radius:10px;
    }
</style>
  <body class="sidebar-icon-only">
    <div class="container-scroller">
    <?php include('navbar.php'); ?>   
      <div class="container-fluid page-body-wrapper">        
      <?php include('sidebar.php'); ?>    
        <div class="main-panel">
            <div class="content-wrapper">
            <!-- หน้าเว็บ -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                            <label for=""></label>
    <select name="cha" id="cha" class="form-control">
        <option value="">-- Select Character --</option>
        <option value="Flesh colour intensity">Flesh colour intensity</option>
        <option value="Flesh colour of peiricarp (interior)">Flesh colour of peiricarp (interior)</option>
        <option value="Blossom end scar condition">Blossom end scar condition</option>
        <option value="Blotchy ripening">Blotchy ripening</option>
        <option value="Colour (intensity) of core">Colour (intensity) of core</option>
        <option value="Concentric cracking">Concentric cracking</option>
        <option value="Corolla blossom type">Corolla blossom type</option>
        <option value="Corolla colour">Corolla colour</option>
        <option value="Easiness of fruit to detach from pedicel">Easiness of fruit to detach from pedicel</option>
        <option value="Easiness of fruit wall (skin) to be peeled">Easiness of fruit wall (skin) to be peeled</option>
        <option value="Exterior colour of immature fruit">Exterior colour of immature fruit</option>
        <option value="Exterior colour of mature fruit">Exterior colour of mature fruit</option>
        <option value="Foliage density">Foliage density</option>
        <option value="Fruit blossom end shape">Fruit blossom end shape</option>
        <option value="Fruit cross-sectional shape">Fruit cross-sectional shape</option>
        <option value="Fruit fasciation">Fruit fasciation</option>
        <option value="Fruit firmness (after storage)">Fruit firmness (after storage)</option>
        <option value="Fruit pubescence">Fruit pubescence</option>
        <option value="Fruit shoulder shape">Fruit shoulder shape</option>
        <option value="Fruit size">Fruit size</option>
        <option value="Hypocotyl colour">Hypocotyl colour</option>
        <option value="Hypocotyl colour intensity">Hypocotyl colour intensity</option>
        <option value="Hypocotyl pubescence">Hypocotyl pubescence</option>
        <option value="Inflorescence type">Inflorescence type</option>
        <option value="Intensity of exterior colour">Intensity of exterior colour</option>
        <option value="Leaf attitude">Leaf attitude</option>
        <option value="Leaf type">Leaf type</option>
        <option value="Plant growth type">Plant growth type</option>
        <option value="Predominant fruit shape">Predominant fruit shape</option>
        <option value="Puffiness appearance">Puffiness appearance</option>
        <option value="Radial cracking">Radial cracking</option>
        <option value="Ribbing at calyx end">Ribbing at calyx end</option>
        <option value="Secondary fruit shape">Secondary fruit shape</option>
        <option value="Seed colour">Seed colour</option>
        <option value="Seed shape">Seed shape</option>
        <option value="Shape of pistil scar">Shape of pistil scar</option>
        <option value="Skin colour of ripe fruit">Skin colour of ripe fruit</option>
        <option value="Stem pubescence density">Stem pubescence density</option>
        <option value="Style hairiness">Style hairiness</option>
        <option value="Style position">Style position</option>
        <option value="Style shape">Style shape</option>
        
    </select>
    <div class="chart-data"> 
        <canvas id="myChart1"></canvas><br/>
        <canvas id="myChart2"></canvas><br/>
        <div id="table-data">
        </div>
    </div>
    
    <script>
    $(document).ready(function() {
        $("#cha").change(function() {
            $("#myChart1").remove();
            $("#myChart2").remove();
            $('.chart-data').append('<canvas id="myChart1"><canvas>');
            $('#myChart1').after('<canvas id="myChart2"><canvas>');
            var input_cha = $("#cha").val();
            if (input_cha != '') {
                $.ajax({
                    url: "ajaxChart.php",
                    method: "GET",
                    data: { cha: input_cha },
                    success: function(data) {
                        //console.log(data);
                        //document.getElementById('title').innerHTML = 
                        var name = [];
                        var count = [];
                        var coloR = [];
                        var dynamicColors = function() {
                        var r = Math.floor(Math.random() * 255);
                        var g = Math.floor(Math.random() * 255);
                        var b = Math.floor(Math.random() * 255);
                        return "rgb(" + r + "," + g + "," + b + ")";
                        };

                        for (var i in data) {
                            name.push(data[i].cha);
                            count.push(data[i].count_sum);
                            coloR.push(dynamicColors());
                        }
                        var chartdata = {
                            labels: name,
                            datasets: [{
                                label: 'จำนวน',
                                backgroundColor: 'rgba(247,100,88)',
                                borderColor: 'rgba(247,100,88)',
                                hoverBackgroundColor: 'rgba(255,98,88)',
                                hoverBorderColor: 'rgba(255,98,88)',
                                data: count
                            }]
                        };
                        var ctx = document.getElementById("myChart1");
                        ctx.height = 80;
                        var barGraph = new Chart(ctx, {
                            type: 'bar',
                            data: chartdata,
                            options: {
                                scales: {
                                        xAxes: [{
                                                barPercentage: 1,
                                                categoryPercentage: 0.3 / 10 * chartdata.datasets[0].data.length
                                                }],
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true,
                                            min: 0,
                                          
                                        }
                                    }]
                                }
                            
                            }
                        });

                        var chartdata = {
                            labels: name,
                            datasets: [{
                                label: 'จำนวน',
                                backgroundColor:[
                                    'rgba(30,136,229)',
                                    'rgba(67,160,71)',
                                    'rgba(253,216,53)',
                                    'rgba(244,81,30)',
                                    'rgba(109,76,65)',
                                    'rgba(229,57,53)',
                                    'rgba(94,53,177)',
                                    'rgba(57,73,171)',
                                    'rgba(142,36,170)',
                                    'rgba(3,155,229)',
                                    'rgba(0,137,123)',
                                    'rgba(124,179,66)',
                                    'rgba(192,202,51)',
                                    'rgba(41,98,255)',

                                ],
                                data: count
                            }]
                        };
                        var ctx2 = document.getElementById("myChart2");
                        ctx2.height = 80;
                        var barGraph = new Chart(ctx2, {
                            type: 'pie',
                            data: chartdata
                        });
                        var tabledetail=$("#table-data");
                        tabledetail.remove();
                        $(".chart-data").append(' <br/><div id="table-data"></div>');
                        var tabledetail=$("#table-data");
                        tabledetail.append('<table class="table table-bordered" id="row"><tr><th></th><th>Amount</th><th>Percent</th></tr>');
                        var sum =0;
                        for(i=0;i<data.length;i++)
                        {
                            sum=parseInt(sum)+parseInt(data[i].count_sum);
                            
                        }
                        for(i=0;i<data.length;i++)
                        {
                           
                            var x =(data[i].count_sum/sum)*100;
                            $("#row").append('<tr><td>'+data[i].cha+'</td><td>'+data[i].count_sum+'</td><td>'+x.toFixed(2)+'%</td></tr>');
                        }
                        tabledetail.append('</table>');
                        console.log(data);
                        console.log("sum"+sum);

                    },

                    error: function(data) {
                        console.log("error");
                        console.log(data);
                    }
                });
            }
        });
    });
    </script>
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
