<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/mdb.css">
</head>
<body>
	<div class="row my-5">
		<div class="col-md">
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<input type="text" name="tblNum" placeholder="Number Tables to generate" class="form-control" id="tblNum">
			<input type="button" class="btn btn-outline-info rounded" value="Submit" id="tblBtn" onclick="showTbl()">
		</div>
	</div>
	<div class="row" >
		<div class="col-md-10 offset-md-1" id="showTbl">
			
		</div>
	</div>
	

<?php
if(isset($_POST['btnTable']))
{
	$tblNum=$_POST['tblNum'];

		?>
		<script type="text/javascript">
		document.getElementById('generate').style.display="none";
	</script>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<h3>Please put your data in Table as required</h3>
			<h4>(First row will be the Heading of Table)</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md">
			<form method="post">
				<input type="text" value="<?php echo $tblNum;?>" name="tblNum">
		<?php
	for($k=1;$k<=$tblNum;$k++)
	{
		$columnNum=$_POST["columnNum$k"];
		$rowNum=$_POST["rowNum$k"];

		?>
			
			<input type="text" name="columnNum1<?php echo $k ?>" value="<?php echo $columnNum; ?>" hidden>
			<input type="text" name="rowNum1<?php echo $k ?>" value="<?php echo $rowNum; ?>" hidden >
			<table class="table table-bordered ">
			<?php
			for($i=1;$i<=$rowNum;$i++)
			{
				?>
				<tr>
				<?php
				for($j=1;$j<=$columnNum;$j++)
				{
					?>
					<td><input type="text" class="form-control cyan accent-4 text-white"  name="<?php echo $i.','.$j; ?>"></td>
					<?php
				}
				?>
				</tr>
				<?php
			}
			?>
			</table>
			
			
	<?php
	}
	?>			
				<input type="submit" class="btn btn-success" name="submitTbl">
			</form>
		</div>
	</div>
	<?php
}
if(isset($_POST['submitTbl']))
{
	$tblNum=$_POST['tblNum'];

	$html="<?php include '../../topTemplate.php'; ?>";
	$html=$html."<div class='table-responsive'>";
	for($k=1;$k<=$tblNum;$k++)
	{
		$columnNum=$_POST["columnNum1$k"];
		$rowNum=$_POST["rowNum1$k"];

			
			$html=$html."<table class='table  table-bordered table-hover'>";
			
			for($i=1;$i<=$rowNum;$i++)
			{
				$html=$html."
				<tr>";
				
				for($j=1;$j<=$columnNum;$j++)
				{
					$n=$i.",".$j;
					$p=$_POST["$n"];
					if($i==1)
					{
						$html=$html."<th>$p</th>";
					}
					else
					{
						$html=$html."<td>$p</td>";
					}
				}
				
				$html=$html."</tr>";
			}
			
			$html=$html."</table>";
	}
	$html=$html."</div>";
			$html=$html."<?php include '../../bottomTemplate.php'; ?>";
			mkdir("../2019/file1");
			$filename=fopen("../2019/file1/index.php", "w");
			if(fwrite($filename,$html))
			{
				fclose($filename);
				header("Location:../2019/file1/");
			}
			else
			{
				echo "error to add file";
			}
}
?>

<script type="text/javascript">
	//onChange HQ
function showTbl() {
   var tblNum =document.getElementById("tblNum").value;
    if (tblNum == "") {
        document.getElementById("showTbl").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("showTbl").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","../services/ajaxservices.php?tblNum="+tblNum,true);
        xmlhttp.send();
    }
    // alert(Scheduledate);


}

</script>
</body>
</html>