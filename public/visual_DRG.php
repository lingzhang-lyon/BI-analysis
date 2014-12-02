<?php 

	$selected_option="9";
	if (isset($_POST['submit'])){
		
		$selected_option=$_POST['option'];
		
	}
	$selected_option2="2";
	if (isset($_POST['submit'])){
		
		$selected_option2=$_POST['summary'];
		
	}
?>
<?php include("../includes/layouts/header.php"); ?>
<?php 
$activeMenu="DRG";
include("../includes/layouts/menu.php"); 
?>
<div class="jumbotron">
	<h2> Map Chart </h2>
	<form action="visual_DRG.php" method="post">		
			<select name="option">
			  <option value="1" <?php if($selected_option=="1")echo 'selected';?> >Average Total Cost by DRG</option>
			  <option value="9" <?php if($selected_option=="9")echo 'selected';?> >Total Cost by DRG</option>

			  <option value="2" <?php if($selected_option=="2")echo 'selected';?> >Average Total Payment by DRG</option>
			  <option value="12" <?php if($selected_option=="12")echo 'selected';?> >Total Payment by DRG</option>

			  <option value="3" <?php if($selected_option=="3")echo 'selected';?> >Average Covered Charges by DRG</option>
			  <option value="10" <?php if($selected_option=="10")echo 'selected';?> >Total Covered Charges by DRG </option>

			  <option value="4" <?php if($selected_option=="4")echo 'selected';?> >Average Medicare Payment by DRG</option>
			  <option value="11" <?php if($selected_option=="11")echo 'selected';?> >Total Medicare Payment by DRG </option>

			  <option value="5" <?php if($selected_option=="5")echo 'selected';?> >Covered Rate by DRG </option>

			  <option value="8" <?php if($selected_option=="8")echo 'selected';?> >Medicare Rate by DRG </option>
			
			  <option value="6" <?php if($selected_option=="6")echo 'selected';?> >Discharges by DRG</option>			  
			 			  

			  <option value="7" <?php if($selected_option=="7")echo 'selected';?> >Discharges by DRG in CA </option>
	  			  
			  

			</select>
			<input class="btn btn-warning" type="submit" name="submit" value="Choose" />
	<!-- </form>	 -->
	<br>

	<?php 
		
	echo "<img src=\"result/DRG/".$selected_option."\" class=\"img-responsive img-rounded\" height=\"300\" width=\"500\"> ";
	
	?>

	<h2> Line Chart and Pie Chart </h2>
	
			<select name="summary">			  
			  <option value="1" <?php if($selected_option2=="1")echo 'selected';?> >Average Amount by State</option>
			  <option value="2" <?php if($selected_option2=="2")echo 'selected';?> >Total Amount by State</option>
			  <!-- <option value="3" <?php if($selected_option=="3")echo 'selected';?> >Rate by State</option> -->


			</select>
			<input class="btn btn-warning" type="submit" name="submit" value="Choose" />
	</form>	
	<br>

	<?php 
		
	echo "<img src=\"result/DRG_summary/line.".$selected_option2."\" class=\"img-responsive img-rounded\" height=\"400\" width=\"800\"> <br>";
	
	echo "<img src=\"result/DRG_summary/pie.".$selected_option2."\" class=\"img-responsive img-rounded\" height=\"300\" width=\"450\"> ";
	?>




</div>

<?php include("../includes/layouts/footer.php"); ?>