<?php
	 include("head.php");
  	 include('services/vacancyService.php');
	 $vc = new Vacancy();
	 $VacancyAllDetail = $vc->singleVacancyAllDetail();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>IndiaNiyukti | Vacancies | Jobs | Result | Admit Card | Government | India | UP | Sarkari | Naukari | Job Alert | Online Form | Railway | Air Force | UPP | Police | Constable</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="twitter:description" content="">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <link rel="stylesheet" type="text/css" href="../../css/mdb.min.css">
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
</head>
<body>
<?php
include ('header.php');
?>
<!-- Section: Features v.1 -->
<section class="text-center container my-5 py-5">
	<!-- Card -->
<div class="card card-cascade wider reverse">

  <!-- Card content -->
  <div class="card-body card-body-cascade text-center">
  	<?php

  	?> 

    <!-- Title -->
    <h4 class="card-title "><strong><?php echo $VacancyAllDetail["vacancy_title"]; ?></strong></h4>
    <!-- Subtitle -->
    <h5 class="font-weight-bold indigo-text"><?php echo $VacancyAllDetail["post_title"]; ?></h5>
    <p class="card-text text-justify font-weight-bold deep-orange-text "><i class="far fa-clock pr-1 "></i> Post Updated on : <?php echo $VacancyAllDetail["date_value"]; ?></p>
    <!-- Text -->
    <p class="card-text text-justify "> <span class="pink-text font-weight-bold">Job Description :</span> <span class="text-dark"><?php echo $VacancyAllDetail["vc_description"]; ?></span>
    </p>
    
    <div class="row">
    	<div class="col-md">
    		<p class="card-text text-justify font-weight-bold "><span class="deep-purple-text font-weight-bold">Total Vacancy : 1522</span></p>
    	</div>
    	<div class="col-md">
    		<p class="card-text text-justify font-weight-bold text-success"><i class="far fa-clock pr-1 "></i>Application Start Date : 05/10/2015 </p>
    	</div>
    	<div class="col-md">
    		<p class="card-text text-justify font-weight-bold text-danger"><i class="far fa-clock pr-1 "></i>Application Last Date : 05/10/2015 </p>
    	</div>
    </div>
    
  </div>

</div>
<!-- Card -->
<!--Important Dates & Application Fees-->
<div class="row mb-3 py-3">
	<div class="col-md-2"></div>
	<div class="col-md-4">
			<!-- Card -->
			<div class="card mb-2">

				<!-- Card content -->
				  <div class="card-body text-left text-dark  rounded-bottom">
				    	<!-- Title -->
					    <h5 class="card-title text-danger"><i class="fas fa-calendar-alt pr-2"></i>Application Important Dates</h5>
					    <hr class="hr-dark">
					   
						<ul class="list-group">
						  <li class="list-group-item">
						  	<p class="card-text text-dark">Application Starts From : <b><?php echo date_format(date_create($VacancyAllDetail["applydate"]),"d/m/Y"); ?></b></p>
						  </li>
						  <li class="list-group-item">
						  	<p class="card-text red-text">Last Date for Apply Online : <b><?php echo  date_format(date_create($VacancyAllDetail["applylastdate"]),"d/m/Y"); ?></b></p>
						  </li>
						  <li class="list-group-item">
						  	<p class="card-text red-text">Last Date Pay Exam Fee : <b><?php echo date_format(date_create($VacancyAllDetail["feelastdate"]),"d/m/Y"); ?></b></p>
						  </li>
						  <li class="list-group-item">
						  	<p class="card-text text-dark">Exam Date : <b><?php echo date_format(date_create($VacancyAllDetail["examdate"]),"d/m/Y"); ?></b></p>
						  </li>
						  <li class="list-group-item">
						  	<p class="card-text text-dark">Admit Card Available Date : <b><?php echo date_format(date_create($VacancyAllDetail["admitcartdate"]),"d/m/Y"); ?></b></p>
						  </li>
						</ul>
					    <!-- Link -->
				  </div>

			</div>
			<!-- Card -->
	</div>

	<div class="col-md-4">
			<!-- Card -->
			<div class="card">

				<!-- Card content -->
				  <div class="card-body text-left rounded-bottom">
				    	<!-- Title -->
					    <h5 class="card-title indigo-text"> <i class="far fa-money-bill-alt pr-2"></i>Application Fee </h5>
					    <hr class="hr-dark">
					   
						<ul class="list-group text-dark">
						  <li class="list-group-item">
						  	<p class="card-text text-dark">General :&nbsp;&nbsp;&#8377;<?php echo $VacancyAllDetail["general_amount"]; ?></p>
						  </li>
						  <li class="list-group-item ">
						  	<p class="card-text text-dark">OBC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&#8377;<?php echo $VacancyAllDetail["obc_amount"]; ?></p>
						  </li>
						  <li class="list-group-item">
						  	<p class="card-text text-dark">SC / ST :&nbsp;&nbsp;&#8377;<?php echo $VacancyAllDetail["sc_amount"]; ?></p>
						  </li>
						  <li class="list-group-item">
						  	<p class="card-text text-primary font-weight-bold">Payment Mode : <?php echo $VacancyAllDetail["payments_mode"]; ?></p>
						  </li>
						  <li class="list-group-item">
						  	<p class="card-text text-dark">other : <?php echo $VacancyAllDetail["other_amount"]; ?><b></b></p>
						  </li>
						</ul>
					    <!-- Link -->
				  </div>

			</div>
			<!-- Card -->
	</div>
	<div class="col-md-2"></div>
</div>

<!--Important Dates & Application Fees-->

<?php
	include("bottomTemplate.php");
?>

</body>
</html>