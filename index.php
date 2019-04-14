<?php
include('connection.php');
include('services/latestService.php');
include('services/vacancyService.php');
include 'services/slugService.php';
$lt=new Latest();
$vc=new Vacancy();
$sl=new Slug();
$latestVacancies=$lt->selectLatestVacancy();
$latestResults=$lt->selectLatestResult();
$latestAdmitcards=$lt->selectLatestAdmitcard();
$latestForms=$lt->selectLatestForms();
$vacancies=$vc->selectVacancyByLimit(20);
$admitcardSlugs=$sl->selectSlugByType('admitcard');
$resultSlugs=$sl->selectSlugByType('result');


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>IndiaNiyukti | Vacancies | Jobs | Result | Admit Card | Government | India | UP | Sarkari | Naukari | Job Alert | Online Form | Railway | Air Force | UPP | Police | Constable</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="twitter:description" content="">
  <?php 
    include("head.php");
  ?>
</head>
<body class="grey lighten-5">
<?php
include ('header.php');
?>
<!-- <div class="bg mt-5"></div> -->
<div class="container-fluid mt-5">
  <div class="row mt-5">
    <div class="col-md">
      <input type="text" name="" class="form-control mt-5" id="searchInput" placeholder="Search">
    </div>
  </div>

<section id="wholeDIV">
<!-- Large modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <button type="button" style="right: 10px;top: 10px;" class="close position-absolute" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
      <div class="p-5 m-5">
       <center>
           <h3 class="h3-responsive font-weight-bold"><span class="cyan-text">Subscribe for Getting Fi</span>rst of all Notification</h3>
            <div class="row">
              <div class="col-md-6 offset-md-3">
                <form method="GET" action="service.php" enctype="multipart/form-data">
                <div class="md-form form-lg">
                  <input type="text" id="inputLGEx" class="form-control form-control-lg">
                  <label for="inputLGEx">Large input</label>
                </div>
                <input type="submit" class="btn btn-primary" value="Subscribe" name="alert">
              </form>
              </div>
            </div>
            <!-- Large input -->
       </center>
      </div>
    </div>
  </div>
</div>
<!-- Section: Features v.1 -->
<div class="mt-5"></div>
<section class="text-center pt-5 pb-4" id="Latest">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold"><span class="cyan-text">Lat</span>est?</h2>
  <!-- Section description -->
  <!-- <p class="lead grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p> -->

  <!-- Grid row -->
  <div class="row m-0">

    <!-- Grid column -->
    <div class="col-md-3">

      <h5 class="font-weight-bold my-4">Government Vacancies  <span class="badge badge-primary badge-pill ">New</span></h5> 
      <!-- <p class="grey-text mb-md-0 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
        maiores aperiam minima assumenda deleniti hic.
      </p> -->
          <ul class="list-group">

            <?php
            foreach ($latestVacancies as $latestVacancy) 
            {
            ?>
            <form method="post" action="2019/<?php echo $latestVacancy['pagelink']; ?>">
        <input type="text" name="vid" value="<?php echo $latestVacancy['id']; ?>" hidden>
        <button type="submit" class=" btn btn-outline-default btn-block " style="border:none !important; box-shadow: none !important" ><?php echo substr($latestVacancy['title'],0,20); ?>... &nbsp; <span class="fa fa-angle-double-right"></span></button>
        </form>
            <?php
             }
            ?>
          </ul>

          <a href="latest/" class="btn btn-info py-2">More...</a> 

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3">

      <h5 class="font-weight-bold my-4">Admit Cards<span class="badge badge-primary badge-pill ">New</span></h5>
      <!-- <p class="grey-text mb-md-0 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
        maiores aperiam minima assumenda deleniti hic.
      </p> -->

       <ul class="list-group">
         <?php
            foreach ($latestAdmitcards as $latestAdmitcard) 
            {
            ?>
            <li class="list-group-item d-flex justify-content-between align-items-center p-1 border-top-0 border-left-0 border-right-0">
              <?php echo $latestAdmitcard['title']; ?>
              
            </li>
           <?php
             }
            ?>
          </ul>
          <a href="latest/" class="btn btn-info py-2">More...</a> 


    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3">

      <h5 class="font-weight-bold my-4">Educational Forms<span class="badge badge-primary badge-pill ">New</span></h5>
     <!--  <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
        aperiam minima assumenda deleniti hic.
      </p> -->
       <ul class="list-group">
         <?php
            foreach ($latestForms as $latestForm) 
            {
            ?>
            <li class="list-group-item d-flex justify-content-between align-items-center p-1 border-top-0 border-left-0 border-right-0">
              <?php echo $latestForm['title']; ?>
              
            </li>
          <?php
             }
            ?>
          </ul>
          <a href="latest/" class="btn btn-info py-2">More...</a> 

    </div>
    <!-- Grid column -->
    <!-- Grid column -->
    <div class="col-md-3">

      <h5 class="font-weight-bold my-4">Results <span class="badge badge-primary badge-pill ">New</span></h5>
      <!-- <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
        aperiam minima assumenda deleniti hic.
      </p> -->
       <ul class="list-group">
         <?php
            foreach ($latestResults as $latestResult) 
            {
            ?>
            <li class="list-group-item d-flex justify-content-between align-items-center p-1 border-top-0 border-left-0 border-right-0">
              <?php echo $latestResult['title']; ?>
             
            </li>
          <?php
             }
            ?>
          </ul>
          <a href="latest/" class="btn btn-info py-2">More...</a> 



    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->

</section>
<!-- Section: Features v.1 -->
</div>
<div class="container">
  

<!-- Section: Features v.1 -->
<section class="text-center white pt-5 pb-4" id="Vacancies">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold pb-4"><span class="cyan-text">Government</span> Vacancies?</h2>
  

  <!-- Grid row -->
  <div class="row m-0">
    <div class="col-md-12 ">
      <div class="row">
    <!-- Grid column -->
   <?php
            foreach ($vacancies as $vacancy) 
            {
            ?>

      <div class="col-md-4 ">
      <form method="post" action="2019/<?php echo $vacancy['pagelink']; ?>">
        <input type="text" name="vid" value="<?php echo $vacancy['id']; ?>" hidden>
        <button type="submit" class=" btn btn-outline-default btn-block" style="border:none !important; box-shadow: none !important"><?php echo substr($vacancy['title'],0,20); ?>... &nbsp; <span class="fa fa-angle-double-right"></span></button>
        </form>

      </div>
      
     <?php
      }
    ?>
      <div class="col-md-4">
        <a href="all-india-government-job-vacancies/" class="btn btn-info btn-lg btn-block py-1 mt-2">View all...</a>
      </div>
    </div>
    </div>
  </div>
  <!-- Grid row -->

</section>
<!-- Section: Features v.1 -->
<!-- Section: Features v.1 -->
<section class="text-center white  pt-5 pb-4" id="Admit-Cards">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold pb-4"><span class="cyan-text">Admit</span> Cards?</h2>
 
  <div class="row m-0">
    <div class="col-md-12">
      <div class="row">
    <!-- Grid column -->
     <?php
            foreach ($admitcardSlugs as $admitcardSlug) 
            {
            ?>

    <div class="col-md-4">

      <!-- <h5 class="font-weight-bold my-4">Analytics</h5> -->
      <a href="#"><p class="grey-text mb-md-0 mb-5 text-left border-bottom p-2 grey lighten-5"><?php echo $admitcardSlug['title']; ?></p></a>
      

    </div>
     <?php
      }
    ?>
    <div class="col-md-4">
      <a href="all-india-admit-cards/" class="btn btn-info btn-lg btn-block py-1 mt-2">View all...</a>
    </div>
   </div>
 </div>

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Features v.1 -->
<!-- Section: Features v.1 -->
<section class="text-center white pt-5 pb-4" id="Results">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold pb-4"><span class="cyan-text">Res</span>ults</h2>
  
  <div class="row m-0">
    <div class="col-md-12">
      <div class="row">
    <!-- Grid column -->
     <?php
            foreach ($resultSlugs as $resultSlug) 
            {
            ?>

    <div class="col-md-4">

      <!-- <h5 class="font-weight-bold my-4">Analytics</h5> -->
      <a href="#"><p class="grey-text mb-md-0 mb-5 text-left p-2 border-bottom grey lighten-5"><?php echo $resultSlug['title']; ?></p></a>
      

    </div>
     <?php
      }
    ?>
    <div class="col-md-4">
      <a href="all-india-results/" class="btn btn-info btn-lg btn-block py-1 mt-2">View all...</a>
    </div>
  </div>
  </div>  

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Features v.1 -->
<!-- Section: Features v.1 -->
<section class="text-center white pt-5 pb-4" id="Educational-Forms">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold pb-4"><span class="cyan-text">Educational</span> Forms</h2>
 
  <div class="row m-0">
    <div class="col-md-12">
      <div class="row">
    <!-- Grid column -->
     <?php
            foreach ($Forms as $Form) 
            {
            ?>

    <div class="col-md-4">

      
      <!-- <h5 class="font-weight-bold my-4">Analytics</h5> -->
      <a href="#"><p class="grey-text mb-md-0 mb-5 text-left p-2 border-bottom grey lighten-5"><?php echo $Form['title']; ?></p></a>
      

    </div>
     <?php
      }
    ?>
    <div class="col-md-4">
      <a href="educational-forms/" class="btn btn-info btn-lg btn-block py-1 mt-2">View all...</a>
    </div>
   </div>
 </div>

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Features v.1 -->
</section>
</div>


<script type="text/javascript">
  $( document ).ready(function() {
    console.log( "ready!" );
});



</script>

<script type="text/javascript">
  
  function hvr(){
    document.getElementById('hvrBtnLink').click();
  }

  function hvr2(){
    document.getElementById('hvrBtnLink').click();
  }

</script>

<?php
include ('footer.php');
?>

</body>
</html>