<?php
Class Vacancy
{
	function selectVacancyByLimit($limit)
	{
		$conn=new Connection();
		$con=$conn->connect();
		$sql="Select * from vacancy where status=1 limit $limit";
		$pstmt=$con->prepare($sql);
		$pstmt->execute();
		$pstmt->bind_result($Id,$title,$pagelink,$createdate,$description,$stateid,$orgid,$status);
		$vacancies=array();
		while($pstmt->fetch())
		{
			array_push($vacancies,array("Id"=>$Id,"title"=>$title,"pagelink"=>$pagelink,"createdate"=>$createdate,"description"=>$description,"stateid"=>$stateid,"orgid"=>$orgid,"status"=>$status));
		}
		return $vacancies;
	}
		public function singleVacancyAllDetail(){
		/*$conn = new Connection();
		$con = $conn->connect();*/
		$con = mysqli_connect("localhost", "root", "", "all_india_niyukti");
		$sql = "SELECT vacancy.*, dates.*, eligibility.*, post.post_title as po_title, payments.* FROM ((((vacancy INNER JOIN dates ON vacancy.vc_id = dates.date_vacancy_id) INNER JOIN eligibility ON vacancy.vc_id = eligibility.elg_vacancy_id) INNER JOIN post ON vacancy.vc_id = post.post_vacancy_id)INNER JOIN payments ON vacancy.vc_id = payments.pay_vacancy_id) where vacancy.vc_id=1";
		$sql_query = mysqli_query($con, $sql);
		while ($sql_result = mysqli_fetch_assoc($sql_query)) {
			/*echo $sql_result["category"];*/
			$all_data= array(
				"vacancy_title" => $sql_result["vc_title"],
				"vc_description" => $sql_result["vc_description"],
				"date_value" => $sql_result["date_datevalue"],
				"eligibility_description"=> $sql_result["elg_description"],
				"post_title" => $sql_result["po_title"],
				"feelastdate" => $sql_result["date_feelastdate"],
				"examdate" => $sql_result["date_examdate"],
				"preexamdate" => $sql_result["date_preexamdate"],
				"mainexamdate" => $sql_result["date_mainexamdate"],
				"admitcartdate" => $sql_result["date_admitcartdate"],
				"applydate" => $sql_result["date_applydate"],
				"resultdate" => $sql_result["date_resultdate"],
				"applylastdate" => $sql_result["date_applylastdate"],
				"payments_category" => $sql_result["pay_category"],
				"payments_mode" => $sql_result["pay_mode"],
				"payments_amount" => $sql_result["pay_amount"],
				"general_amount" => $sql_result["pay_general"],
				"obc_amount" => $sql_result["pay_obc"],
				"sc_amount" => $sql_result["pay_sc"],
				"other_amount" => $sql_result["pay_other"]

							);
		}
		/*print_r($all_data);*/
		return $all_data;
	}
}