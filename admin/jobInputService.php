<?php
error_reporting(0);

if(isset($_POST['submitTbl']))
{

	$pagename=$_POST['pagename'];
	$vacancytitle=$_POST['vacancyTitle'];
	$postname=$_POST['postName'];
	$postdescription=$_POST['postDescription'];
	$totalvacancy=$_POST['totalVacancy'];
	$state=$_POST['state'];
	$org=$_POST['org'];

	$appstartdate=$_POST['appStartDate'];
	$applastdate=$_POST['appLastDate'];
	$feelastdate=$_POST['feeLast'];
	$admitcardavailabledate=$_POST['admitcardDate'];
	$examdate=$_POST['defaultExamDate'];
	$preexamdate=$_POST['preExamDate'];
	$mainsexamdate=$_POST['mainsExamDate'];

	$appfeegen=$_POST['genFee'];
	$appfeeobc=$_POST['obcFee'];
	$appfeesc=$_POST['scstFee'];
	$feemode=$_POST['paymode'];

	$applyonline=$_POST['applyonline'];
	$login=$_POST['login'];
	$feepay=$_POST['feepay'];
	$downloadnotification=$_POST['downloadnotification'];
	$admitcard=$_POST['admitcard'];
	$officialwebsite=$_POST['officialwebsite'];
	$pagelink=$pagename;

	$currentdate=date("Y-m-d");
	
	$sql="Insert into vacancy (vc_title,vc_pagelink,vc_createdate,vc_description,vc_state_id,vc_org_id) values('$vacancytitle','$pagelink','$currentdate','$postdescription','$state','$org');";
		
		$sql=$sql."Insert into slug(slug_vid,slug_createdate,slug_applyurl,slug_notificationurl,slug_loginurl,slug_paymenturl,slug_admitcardurl,slug_resulturl,slug_answarkeyurl,slug_syllabusurl,slug_official) values((select id from vacancy order by id desc limit 1),'$currentdate','$applyonline','$downloadnotification','$login','$feepay
		','$admitcard','','','','$officialwebsite');";	
	
			$sql=$sql."Insert into dates(date_vacancy_id,date_applydate,date_lastdate,date_feelastdate,date_examdate,date_preexamdate,date_mainexamdate,date_admitcartdate) values((select id from vacancy order by id desc limit 1),'$appstartdate','$applastdate','$feelastdate','$examdate','$preexamdate','$mainsexamdate','$admitcardavailabledate');";


			$sql=$sql."Insert into payments(pay_vacancy_id,pay_mode,pay_general,pay_obc,pay_sc,pay_other) values((select id from vacancy order by id desc limit 1),'$feemode','$appfeegen','$appfeeobc','$appfeesc','');";



				
include('../connection.php');
	$conn=new Connection();
	$con=$conn->connect();

	if($pstmt=$con->multi_query($sql))
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
		            $html=$html."<th><b>$p</b></th>";
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
		      mkdir("../2019/$pagename");
		      $filename=fopen("../2019/$pagename/index.php", "w");
		      if(fwrite($filename,$html))
		      {
		        fclose($filename);
		        header("Location:../2019/$pagename/");
		      }
		      else
		      {
		        echo "error to add file";
		      }
	}
	else
	{
		echo "error";
	}	
}