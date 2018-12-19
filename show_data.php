<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include('head.php'); ?>   
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.17/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.2.5/css/fixedColumns.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.1/js/dataTables.fixedColumns.min.js"></script> 
  </head>
  <style>
 table.dataTable {
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }

    .dataTables_filter {
        display: none;
    }
    #data_info
    {
        display: none;
    }
    .DTFC_LeftBodyLiner {
        overflow-y: hidden !important;
    }

    .dataTables_wrapper .dataTable .btn {
        padding: 0.5rem 0.81rem;

    }

    .table-bordered th,
    .table-bordered td {
        border: 0px;
    }

    table.dataTable thead th,
    table.dataTable tfoot th {
        font-weight: normal;
    }

    table.dataTable thead th,
    table.dataTable thead td {
        border-bottom: 0px;
    }

.new{
	color:blue;
}

</style> 
<?php   include_once("PHPExcel-1.8/Classes/PHPExcel.php"); ?>
  <body class="sidebar-icon-only">
    <div class="container-scroller">
    <?php include('navbar.php'); ?>   
      <div class="container-fluid page-body-wrapper">        
      <?php include('sidebar.php'); ?>    
        <div class="main-panel">
            <div class="content-wrapper">
            <!-- หน้าเว็บ -->
            <?php $List=getAllFact(); ?>
            <?php
    $tmpFile = $_FILES["fileUpload"]["tmp_name"];  
    $fileName = $_FILES["fileUpload"]["name"];  // เก็บชื่อไฟล์
    $_fileup = $_FILES["fileUpload"];
    $info = pathinfo($fileName);
    $allow_file = array("csv","xls","xlsx");
/*  print_r($info);         // ข้อมูลไฟล์   
    print_r($_fileup);*/
    if($fileName!="" && in_array($info['extension'],$allow_file)){
        // อ่านไฟล์จาก path temp ชั่วคราวที่เราอัพโหลด
        $objPHPExcel = PHPExcel_IOFactory::load($tmpFile);      
         
         
        // ดึงข้อมูลของแต่ละเซลในตารางมาไว้ใช้งานในรูปแบบตัวแปร array
        $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
          
        // วนลูปแสดงข้อมูล
		$data_arr=array();
	    foreach ($cell_collection as $cell) {
            // ค่าสำหรับดูว่าเป็นคอลัมน์ไหน เช่น A B C ....
            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            // คำสำหรับดูว่าเป็นแถวที่เท่าไหร่ เช่น 1 2 3 .....
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            // ค่าของข้อมูลในเซลล์นั้นๆ เช่น A1 B1 C1 ....
            $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();          
             
            // เริ่มขึ้นตอนจัดเตรียมข้อมูล
            // เริ่มเก็บข้อมูลบรรทัดที่ 2 เป็นต้นไป
            $start_row = 1;
			// กำหนดชื่อ column ที่ต้องการไปเรียกใช้งาน
			//$col_name[] = array( "A"=>"0");
			//$col_name[] = array( "B"=>"1");
			//print_r($col_name);
            $col_name = array( 
                "A"=>"0","B"=>"1","C"=>"2","D"=>"3","E"=>"4","F"=>"5","G"=>"6","H"=>"7","I"=>"8",
                "J"=>"9","K"=>"10","L"=>"11","M"=>"12","N"=>"13","O"=>"14","P"=>"15","Q"=>"16",
                "R"=>"17","S"=>"18","T"=>"19","U"=>"20","V"=>"21","W"=>"22","X"=>"23","Y"=>"24",
                "Z"=>"25","AA"=>"26","AB"=>"27","AC"=>"28","AD"=>"29","AE"=>"30","AF"=>"31","AG"=>"32",
                "AH"=>"33","AI"=>"34","AJ"=>"35","AK"=>"36","AL"=>"37","AM"=>"38","AN"=>"39","AO"=>"40",
                "AP"=>"41","AQ"=>"42","AR"=>"43","AS"=>"44","AT"=>"45","AU"=>"46","AV"=>"47","AW"=>"48",
                "AX"=>"49","AY"=>"50","AZ"=>"51","BA"=>"52","BB"=>"53","BC"=>"54","BD"=>"55","BE"=>"56",
                "BF"=>"57","BG"=>"58","BH"=>"59","BI"=>"60","BJ"=>"61","BK"=>"62","BL"=>"63","BM"=>"64",
                "BN"=>"65","BO"=>"66","BP"=>"67","BQ"=>"68","BR"=>"69","BS"=>"70","BT"=>"71","BU"=>"72",
                "BV"=>"73","BW"=>"74","BX"=>"75","BY"=>"76","BZ"=>"77","CA"=>"78","CB"=>"79","CC"=>"80",
                "CD"=>"81","CE"=>"82","CF"=>"83"
			);
			if($row >= $start_row){
                $data_arr[$row-$start_row][$col_name[$column]] = $data_value;                                               
            }
        }       
//      print_r($data_arr);
    }
 
?>
<?php
// สร้างฟังก์ชั่นสำหรับจัดการกับข้อมุลที่เป็นค่าว่าง หรือไม่มีข้อมูลน้้น

function prepare_data($data){
    // กำหนดชื่อ filed ให้ตรงกับ $col_name ด้านบน
	$arr_field = array();
    if(is_array($data)){
        foreach($arr_field as $v){
            if(!isset($data[$v])){
                $data[$v]="";           
            }
        }
    }
    return $data;
}
function search_id($item,$List1){
	$chk=false;

	foreach($List1 as $key=>$value)
	{
				if($value==$item)
				{
				$chk=true;
				$data=$item;
				break;
				}
				
			
		
		
	}
	return $chk;
	
}
function searchdata($item)
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "tomatoes";
	$conn = mysqli_connect($servername, $username, $password,$database);
	
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		mysqli_set_charset($conn, "utf8");
		//echo "Connected successfully";
		$sql = "SELECT * FROM cha_data_tomato WHERE accession_number='$item' " ;
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result);
		{
			
			foreach($result as $key)
            {
				
				foreach($key as $key2=>$value)
				{
					if($key2[0] == 'i' && $key2[1] =='d')
					{
						
					}
					else if($key2 == 'NO')
                    {
                        
                    }
					else
					{			
						$head[]=$key2;			
						@$List[] = $value;
					}
				}
            }
		}
		mysqli_close($conn);
		@$List_item=array($head,$List);
		return @$List_item;
}
?>

<?php
// นำข้อมูลที่ดึงจาก excel หรือ csv ไฟล์ มาวนลูปแสดง
if(isset($data_arr) && count($data_arr)>0)
{
$check_add=0;
$chkLength=0;
	?>
            <form method="POST">
	
    <table id="data" class="table table-striped" style="width:100%">
       <thead>
<?php	 

for($i=0;$i<count($data_arr[0]);$i++)
{
   if($i==0)
   {
       echo"<tr>";
       for($j=0;$j<count($data_arr);$j++)
       { 
           @$data_arr[$j][$i]=prepare_data($data_arr[$j][$i]);							
           if($j==0){echo"<th>".$data_arr[$j][$i]."</th>";}
           
           else if(search_id($data_arr[$j][$i],$List))
           { 
               
               @$id[]=$data_arr[$j][$i];
               
?>					
                     <th><?php echo$data_arr[$j][$i]; ?><lable style="font-weight:normal">  Replace All</lable> <input data-colum="NO<?php echo $j?>"class="NO_All" type="checkbox" checked/></th>
               
           
<?php		 
           }
           else
           {
               
               
               
               
               echo"<th>".$data_arr[$j][$i] ."<lable style='font-weight:normal'> Add All</lable> <input type='checkbox' checked/></th>";
           }
       }
       echo"</tr>
       </thead>
       <tbody>";
   }
   else
   {
       echo"<tr>";
       for($j=0;$j<count($data_arr);$j++)
       { 
          
           $data_arr[$j][$i]=prepare_data($data_arr[$j][$i]);						
           if($j==0)
           {
?>					
               
               <td><?php echo$data_arr[$j][$i]; ?></td>	
<?php		
           }
           else if($data_arr[$j][0]==@$id[$j-1])
           {   
               $check=searchdata(@$id[$j-1]); 
               if($check[1][$i]!=$data_arr[$j][$i])
               {
                   
                   if($check[1][$i]=="")
                   {
                       
               ?>

                       <div><td class='table-danger'>
                   
                       <input type='hidden' name="<?php echo'NO'.$j.'[]'?>" value="update">
                       <input type='hidden' name="<?php echo'NO'.$j.'[]'?>" value="<?php echo $data_arr[$j][0]  ?>">
                       
                       <input type='checkbox'  name="<?php echo'NO'.$j.'[]'?>" value="<?php echo$check[0][$i].'@'.$data_arr[$j][$i] ?>" checked><lable style="font-weight:normal" class='new'>  <?php echo$data_arr[$j][$i] ?></lable></div>
                       
                       <?php
                       echo "<div>
                       NULL,"."<span class='new'>".$data_arr[$j][$i]."</span>
                       </div></td>";
                       if($chkLength==0)
                       {
                           $chkLength++;
                           ?>
                           <input type='hidden' name='length' value='<?php echo (count($data_arr)-1) ?>'>
                           <?php
                       }

                       
                   }
                   else
                   {
                       $data1=$check[1][$i];
                       $data2=$data_arr[$j][$i];
                       if(is_numeric($check[1][$i]))
                       {
                        $data1=round($check[1][$i],2);
                       }
                       if(is_numeric($data_arr[$j][$i]))
                       {
                        $data2=round($data_arr[$j][$i],2);
                       }
                       
                       
                       if($data1!=$data2)
                       {
                           ?>
                           <div><td class='table-danger'>
                           
                       
                           <input type='hidden' name="<?php echo'NO'.$j.'[]'?>" value="update">
                           <input type='hidden' name="<?php echo'NO'.$j.'[]'?>" value="<?php echo $data_arr[$j][0]  ?>">
                           
                           <input type='checkbox' name="<?php echo 'NO'.$j.'[]'?>" value="<?php echo$check[0][$i].'@'.$data_arr[$j][$i] ?>" checked><lable style="font-weight:normal" class='new'>  <?php echo$data_arr[$j][$i] ?></lable></div>
                           
                           <?php
                           echo "<div>
                           ".$check[1][$i].",<span class='new'>".$data_arr[$j][$i]."</span>
                           </div></td>";
                           if($chkLength==0)
                           {
                               $chkLength++;
                               ?>
                               <input type='hidden' name='length' value='<?php echo (count($data_arr)-1) ?>'>
                               <?php
                           }
                       }
                       else
                       {
                           echo"<td>".$check[1][$i]."</td>";
                       }
                   
       
                   }
               }
               else
               {

                   echo"<td>".$check[1][$i]."</td>";

               }
               
           }
           else
           {
               $check=searchdata("LE001");
               
               ?>
               
               <input type='hidden' name="<?php echo'NO'.$j.'[]'?>" value="insert">
               <?php
               if($check_add==0)
               {
               
               ?>
               <input type='hidden' name="<?php echo 'NO'.$j.'[]'?>" value="<?php echo$data_arr[0][0].'@'.$data_arr[$j][0] ?>">
               
               <?php
               $check_add++;
               }
               if($chkLength==0)
               {
                   $chkLength++;
                   ?>
                   <input type='hidden' name='length' value='<?php echo (count($data_arr)-1) ?>'>
                   <?php
               }
               ?>
               <input type='hidden' name="<?php echo 'NO'.$j.'[]'?>" value="<?php echo$check[0][$i].'@'.$data_arr[$j][$i] ?>">
               
               <?php
               echo"<td class='table-primary'>".$data_arr[$j][$i]."</td>";
               
           }
       
           
       }	
       echo"</tr>";
   
   }
   
}
?>			  </tbody>
       </table>       
       <button type ="submit" class="btn btn-success btn-block" name="action" value="acceptData" >ยืนยัน</button>
            </div>   
            <?php
}

  ?>
  </form>
<script>
$(document).ready(function() {
    var table = $('#data').DataTable( {
        fixedColumns: {
                leftColumns: 1
            },
            scrollY: "400px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            ordering: false,
            columnDefs: [
                { searchable: false, targets: 0 }
            ]
    } );
    $(".NO_All").click(function(){
        var s = $(this).attr("data-colum");
        var x = $(this).prop("checked");
        if(x)
        {
            $("input[name='"+s+"[]']").prop("checked",true);
        }
        else
        {
            $("input[name='"+s+"[]']").prop("checked",false);
        }
    });
} );
</script>
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
        function getAllFact()
            {
                 $con = ConDb::getInstance();
                $sql = 'SELECT * FROM cha_data_tomato';
                $stmt = $con->query($sql);
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if($result)
                {
                    foreach($result as $key)
                    {
                    
                        foreach($key as $key2=>$value)
                        {
                        
                            if(($key2[0] == 'i' && $key2[1] =='d'))
                            {
                                
                            }
                            else if($key2 == 'NO')
                            {
                                
                            }
                            else
                            {
                                $fact_list[] = $value;
                            }
                        }
                    
                    
                    }
                    return $fact_list;
                }
                else
                {
                    return FALSE;
                }
        }
?>             

          
            <?php include('footer.php'); ?> 
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    </body>
</html>
