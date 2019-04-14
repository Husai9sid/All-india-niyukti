<?php
Class State
{
	function selectState()
	{
		$conn=new Connection();
		$con=$conn->connect();
		$sql="Select * from state";
		$states=array();
		$pstmt=$con->prepare($sql);
		$pstmt->execute();
		$pstmt->bind_result($id,$name);
		while($pstmt->fetch())
		{
			array_push($states,array("id"=>$id,"name"=>$name));
		}
		return $states;
	}
}