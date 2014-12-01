		<!-- row 4 -->
		<footer class= "row">
			<p>
			Copyright©<?php echo date("Y"); ?>,  CMPE274 Team 2. All rights reserved.	
			</p>
		</footer>
	</div> <!-- end container -->

	<!-- javascript --> <!--
		<script src="../public/stylesheets/js/respond.js"></script>
    	<script src="../public/stylesheets/js/bootstrap.min.js"></script>
    	<script src="http://code.jquery.com/jquery-latest.min.js"></script> -->

	</body>
</html>

<?php
  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>

