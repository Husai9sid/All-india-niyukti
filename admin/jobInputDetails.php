 <?php
  	include("../head2.php");
    include('../connection.php');
    include('../services/stateService.php');
    include('../services/orgService.php');
    $st=new State();
    $or=new Org();
    $states=$st->selectState();
    $orgs=$or->selectOrg();
  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>Job Input Details</title>
  	<style>
  		.hide {
				  display: none;
			  }
  	</style>



  </head>
  <body>

  
    <div class="row my-5">
    <div class="col-md">
      
    </div>
  </div>

  <div class="row " id="numTbld">
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
    document.getElementById("numTbld").style.display="none";
    </script>

<div class="container"  id="vacancyForm">
   <form method="post" action="jobInputService.php">
    <h2 class="h2-responsive py-6 text-center font-weight-bold">Post Input Form</h2>
     <div class="row mb-4 py-2">
      <div class="col-md">
        <label>Page Name</label>
        <input type="text" class="form-control" name="pagename" placeholder="Enter post Title" required>
      </div>
    </div>
    <div class="row mb-4 py-2">
      <div class="col-md">
        <label>Vacancy Title</label>
        <input type="text" class="form-control" name="vacancyTitle" placeholder="Enter post Title" required>
      </div>
      <div class="col-md">
        <label>Post Name</label>
        <input type="text" class="form-control" name="postName" placeholder="Enter post name" required>
      </div>
    </div>


    <div class="row mb-4">
      <div class="col-md">
        <label>Post description</label>
        <textarea class="form-control rounded-0" placeholder="write post description..." name="postDescription" rows="5" required></textarea>
        
      </div>
      <div class="col-md">
        <div class="row mb-4">
          <div class="col-md">
            <label>Total Vacancy</label>
        <input type="number" class="form-control" name="totalVacancy" placeholder="Enter total Vacancy" required>
          </div>
          <div class="col-md">
            <label>State</label>
            <select name="state" class="form-control text-dark">
              <option value="">Select State</option>
              <?php foreach($states as $state){ ?>
              <option value="<?php echo $state['id']; ?>"><?php echo $state['name']; ?></option>
            <?php } ?>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-md">
            <label>Organisation</label>
            <select name="org" class="form-control">
              <option value="">Select Organization</option>
              <?php foreach($orgs as $org){ ?>
                <option value="<?php echo $org['id']; ?>"><?php echo $org['title']; ?></option>
            <?php } ?>
            </select>
          </div>
        </div>        
      </div>    
    </div>
    <hr>

    <h4 class="h4-responsive font-weight-bold" >Application Form Date</h4>
    <div class="row mb-4">
      <div class="col-md">
        <label>Application Start Date</label>
        <input type="date" class="form-control" name="appStartDate" >
      </div>    
      
      <div class="col-md">
        <label class="text-danger">Application Last Date</label>
        <input type="date" class="form-control" name="appLastDate"  >
      </div>
    </div>


    <div class="row mb-4">
      <div class="col-md">
        <label class="text-danger">Exam Fee Last Date</label>
        <input type="date" class="form-control" name="feeLast"  >
      </div>

      <div class="col-md">
        <label>Admit Card Available Date</label>
        <input type="date" class="form-control" name="admitcardDate" >
      </div>
    </div>
        <hr>
    <div class="row">
      <div class="col-md">
        <h4 class="h4-responsive font-weight-bold">Exam Dates</h4>
            <p class="card-text text-warning">Note : Please choose Exam date according to Signle Date or Multiple date for Pre, Mains Exam Date</p>
              <!-- Group of default radios - option 1 -->
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" onclick="show();" id="one" name="groupOfDefaultRadios" checked>
                <label class="custom-control-label" for="one">Single Date</label>
              </div>

              <!-- Group of default radios - option 2 -->
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" onclick="show();" id="two" name="groupOfDefaultRadios" >
                <label class="custom-control-label " for="two">Multiple Date</label>

              </div>


                <div class="row mb-4 py-4">
                  <div class="col-md" id="def">
                    <label>Exam Date</label>
                    <input type="date" class="form-control" name="defaultExamDate"   >
                  </div>


                  <div class="col-md hide" id="both" >
                    <label>Pre Exam Date</label>
                    <input type="date" class="form-control" name="preExamDate"  >
                  <br>
                    <label>Mains Exam Date</label>
                    <input type="date" class="form-control" name="mainsExamDate"  >
                  </div>
              </div>
        
      </div>
      <div class="col-md">
        <h4 class="h4-responsive font-weight-bold">Application Fees Category-wise</h4>

          <div class="row mb-4">

          <div class="col-md">
            <label>General</label>
            <input type="number" class="form-control" name="genFee" placeholder="Enter General Fee"  required>
          </div>

          <div class="col-md">
            <label>OBC</label>
            <input type="number" class="form-control" name="obcFee" placeholder="Enter OBC Fee" required >
          </div>

          <div class="col-md">
            <label>SC / ST</label>
            <input type="number" class="form-control" name="scstFee" placeholder="Enter SC/ST Fee" required>
          </div>
        </div>
        <div class="row mb-4">
        <div class="col-md">
          <label>Fee Payment Modes</label>
         
          <textarea class="form-control rounded-0" placeholder="write payment mode description..." name="paymode" rows="5" required></textarea>
        </div>
        </div>
      </div>
      
    </div>
    <div class="row">
      <div class="col-md">
        <h4 class="h4-responsive font-weight-bold">Important Links</h4>
        <div class="row">
          <div class="col-md-10">
            <input type="text" name="applyonline" class="form-control" placeholder="applyonline">
            <input type="text" name="login" class="form-control" placeholder="login or register">
            <input type="text" name="feepay" class="form-control" placeholder="fee payment">
            <input type="text" name="downloadnotification" class="form-control" placeholder="download notification">
            <input type="text" name="admitcard" class="form-control" placeholder="admitcard">
            <input type="text" name="officialwebsite" class="form-control" placeholder="officialwebsite">
          </div>
        </div>
      </div>
    </div>
    <hr>

    <div class="card">
      <div class="row">
    <div class="col-md-8 offset-md-2">
      <h3>Please put your data in Table as required</h3>
      <h4>(First row will be the Heading of Table)</h4>
    </div>
  </div>
  <div class="row">
    <div class="col-md">
     
        <input type="text" value="<?php echo $tblNum;?>" name="tblNum" hidden>
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
          <td><input type="text" class="form-control" style="outline: 1px solid cyan"  name="<?php echo $i.','.$j; ?>"></td>
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
      
    </div>
  </div>
    </div>

    </form>
</div>

  
  <?php
}

?>

  </body>
  </html>

 

   <?php
  	include("../footer2.php");

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
  
<script>
	function show(){
		if(document.getElementById('one').checked==true){
			document.getElementById('both').style.display = 'none';

			document.getElementById('def').style.display = 'block';
		}
		else 
		{
			document.getElementById('both').style.display = 'block';

			document.getElementById('def').style.display = 'none';

		}
		
	}
</script>