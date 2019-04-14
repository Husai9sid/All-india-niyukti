<?php
Class Slug
{
	function selectSlugByType($type)
	{
		$conn=new Connection();
		$con=$conn->connect();
		$sql="Select * from slug where type='$type'";
		$pstmt=$con->prepare($sql);
		$pstmt->execute();
		$slug=array();
		while($rec=$pstmt->fetch())
		{
			array_push($slug,$rec);
		}
		return $slug;
	}
	public function slugByvacancyId(){
		/*$conn = new Connection();
		$con = $conn->connect();*/
		$con = mysqli_connect("localhost", "root", "", "all_india_niyukti");
		$sql = "SELECT * FROM slug where slug_vid= '1'";
		$sql_query = mysqli_query($con, $sql);
		$slugByvacancyId = mysqli_fetch_assoc($sql_query);
			return $slugByvacancyId;
	}
	public function allSlugs(){
		/*$conn = new Connection();
		$con = $conn->connect();*/
		$con = mysqli_connect("localhost", "root", "", "all_india_niyukti");
		$sql = "SELECT * FROM slug";
		$sql_query = mysqli_query($con, $sql);
		while ($sql_result = mysqli_fetch_assoc($sql_query)) {
			 
			 $allSlugs[] = array(
			 	"title" => $sql_result["slug_title"]
			 );
		}
			return $allSlugs;
	}
}