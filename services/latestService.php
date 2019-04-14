<?php
Class latest
{
	function selectLatestVacancy()
	{
		$conn=new Connection();
		$con=$conn->connect();
		$sql="SELECT * from vacancy where datediff(now(),createdate)<30";
		$pstmt=$con->prepare($sql);
		$pstmt->execute();
		$pstmt->bind_result($Id,$title,$pagelink,$createdate,$description,$stateid,$orgid,$status);
		$latestVacancies=array();
		while($pstmt->fetch())
		{
			array_push($latestVacancies,array("Id"=>$Id,"title"=>$title,"pagelink"=>$pagelink,"createdate"=>$createdate,"description"=>$description,"stateid"=>$stateid,"orgid"=>$orgid,"status"=>$status));
		}
		return $latestVacancies;
	}
	function selectLatestAdmitcard()
	{
		$conn=new Connection();
		$con=$conn->connect();
		$sql="SELECT * from slug where datediff(now(),createdate)<30 and type='admitcard'";
		$pstmt=$con->prepare($sql);
		$pstmt->execute();
		$latestVacancies=array();
		while($rec=$pstmt->fetch())
		{
			array_push($latestVacancies,$rec);
		}
		return $latestVacancies;
	}
	function selectLatestResult()
	{
		$conn=new Connection();
		$con=$conn->connect();
		$sql="SELECT * from slug where datediff(now(),createdate)<30 and type='result'";
		$pstmt=$con->prepare($sql);
		$pstmt->execute();
		$latestVacancies=array();
		while($rec=$pstmt->fetch())
		{
			array_push($latestVacancies,$rec);
		}
		return $latestVacancies;
	}
	function selectLatestForms()
	{
		$conn=new Connection();
		$con=$conn->connect();
		$sql="SELECT * from vacancy where datediff(now(),createdate)<30";
		$pstmt=$con->prepare($sql);
		$pstmt->execute();
		$latestVacancies=array();
		while($rec=$pstmt->fetch())
		{
			array_push($latestVacancies,$rec);
		}
		return $latestVacancies;
	}
}
?>