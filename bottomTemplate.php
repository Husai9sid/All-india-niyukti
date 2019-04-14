<?php
  include('services/slugService.php');
    $slug = new Slug();
    $slugByIB = $slug->slugByvacancyId();
    $allSlugs = $slug->allSlugs();
  
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<!--Important Links for Application -->
<?php
   /* echo json_encode($slugByIB);*/
?>
<div class="row mb-3 py-3">
  <div class="col-md-2"></div>
  <div class="col-md-8">
      <!-- Card -->
      <div class="card mb-2">
        <!-- Title -->
              <div class="card-header  special-color text-white">
              <h5 class="card-title"><i class="fas fa-globe pr-2"></i></i>Application Important Links | Apply Online | Registration | Official Website</h5>
            </div>
            

        <!-- Card content -->
          <div class="card-body text-left text-dark  rounded-bottom">

             
<div class="table-responsive ">
  <table class="table text-primary table-hover">

    <tbody>
      <tr >      
        <td><h4 class="h4-responsive">Apply Online</h4></td>
        <td><h4 class="h4-responsive "><a href="<?php echo $slugByIB['slug_applyurl']; ?>" class="text-danger" >Click here</a></h4></td>
        
      </tr>
      <tr>
      
        <td><h4 class="h4-responsive">Registration / Login</h4></td>
        <td><h4 class="h4-responsive"><a href="<?php echo $slugByIB['slug_loginurl']; ?>" class="text-danger">Click here</a></h4></td>
        
      </tr>
      <tr>
        
        <td><h4 class="h4-responsive">Pay Exam Fees</h4></td>
        <td><h4 class="h4-responsive"><a href="<?php echo $slugByIB['slug_paymenturl']; ?>" class="text-danger">Click here</a></h4></td>
        
      </tr>

      <tr>
        <td><h4 class="h4-responsive">Subscribe Notification</h4></td>
        <td><h4 class="h4-responsive"><a href="<?php echo $slugByIB['slug_notificationurl']; ?>" class="text-danger">Click here</a></h4></td>
        
      </tr>

      <tr>
        
        <td><h4 class="h4-responsive">Download Admit Card</h4></td>
        <td><h4 class="h4-responsive"><a href="<?php echo $slugByIB['slug_admitcardurl']; ?>" class="text-danger">Click here</a></h4></td>
        
      </tr>

       <tr>
        
        <td><h4 class="h4-responsive">Official Website</h4></td>
        <td><h4 class="h4-responsive"><a href="<?php echo $slugByIB['slug_applyurl']; ?>" class="text-danger">Click here</a></h4></td>
        
      </tr>
    </tbody>
  </table>
</div>

              <!-- Link -->
          </div>

      </div>
      <!-- Card -->
  </div>

  <div class="col-md-2"></div>
</div>

<!--Important Links for Application -->
  
</section>
<!-- Section: Features v.1 -->



<script type="text/javascript">
  $( document ).ready(function() {
    console.log( "ready!" );
});
</script>
  <!-- Footer -->
  <footer class="page-footer font-small unique-color-dark p-4 ">
  <!-- Copyright -->
      <div class=" text-center">© 2019 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> Pravardhan Group</a>
      </div>
    <!-- Copyright -->
   </footer>
  <!-- Footer -->
  
  <script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../../js/popper.min.js"></script>
  
<script>
$(document).ready(function(){
  $("#hvrBtnLink").hover(function(){
    $("#collapseExample").toggle(1000);
  });
});
</script>
  
  <script>
$(document).ready(function(){
  $("#searchInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#wholeDIV *").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>