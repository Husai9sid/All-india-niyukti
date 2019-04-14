<?php

if (isset($_GET['tblNum']))
{
	$tblNum=$_GET['tblNum'];

?>
	<div class="row" id="generate">
			<div class="col-md-10 offset-md-1">
				<form method="post" >
					<input type="text" value="<?php echo $tblNum; ?>" name="tblNum">
<?php
	for ($i=1;$i<=$tblNum;$i++)
	{ 
		?>
		<h3>Table - <?php echo $i; ?></h3>
		
					<input type="text" class="form-control" name="columnNum<?php echo $i; ?>" placeholder="Number of Column" required="">
					<input type="text" class="form-control" name="rowNum<?php echo $i; ?>" placeholder="Number of Row" required="">
					
				
		<?php
	}
	?>
					<input type="submit" class="btn btn-info" name="btnTable" value="Generate Table">
				</form>
			</div>
		</div>
	<?php
}