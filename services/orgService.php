<?php
Class Org
{
	function selectOrg()
	{
		$conn=new Connection();
		$con=$conn->connect();
		$sql="Select id,title from organization";
		$orgs=array();
		$pstmt=$con->prepare($sql);
		$pstmt->execute();
		$pstmt->bind_result($id,$title);
		while($pstmt->fetch())
		{
			array_push($orgs,array("id"=>$id,"title"=>$title));
		}
		return $orgs;
	}
}