<?php 

	$selected_option="1";
	if (isset($_POST['submit'])){
		
		$selected_option=$_POST['option'];
		
	}
?>
<?php include("../includes/layouts/header.php"); ?>
<?php 
$activeMenu="DRG";
include("../includes/layouts/menu.php"); 
?>
<div class="jumbotron">
	<form action="visual_DRG.php" method="post">		
			<select name="option">
			  <option value="1" <?php if($selected_option=="1")echo 'selected';?> >average_total_cost</option>
			  <option value="9" <?php if($selected_option=="9")echo 'selected';?> >totalCost_DRG</option>

			  <option value="2" <?php if($selected_option=="2")echo 'selected';?> >average_total_payment</option>
			  <option value="12" <?php if($selected_option=="12")echo 'selected';?> >totalPayment_DRG</option>

			  <option value="3" <?php if($selected_option=="3")echo 'selected';?> >averageCoveredCharges_DRG</option>
			  <option value="10" <?php if($selected_option=="10")echo 'selected';?> >totalCoveredCharges_DRG </option>

			  <option value="4" <?php if($selected_option=="4")echo 'selected';?> >averageMedicarePayment_DRG</option>
			  <option value="11" <?php if($selected_option=="11")echo 'selected';?> >totalMedicarePayment_DRG </option>

			  <option value="5" <?php if($selected_option=="5")echo 'selected';?> >coveredRate_DRG </option>

			  <option value="8" <?php if($selected_option=="8")echo 'selected';?> >medicareRate_DRG </option>
			
			  <option value="6" <?php if($selected_option=="6")echo 'selected';?> >discharges_DRG</option>			  
			 			  

			  <option value="7" <?php if($selected_option=="7")echo 'selected';?> >discharges_per_DRG_CA </option>
	  			  
			  

			</select>
			<input class="btn btn-warning" type="submit" name="submit" value="Choose" />
	</form>	
	<br>

	<?php 
		
	echo "<img src=\"result/DRG/".$selected_option."\" class=\"img-responsive img-rounded\"> ";
	
	?>

</div>

<?php include("../includes/layouts/footer.php"); ?>