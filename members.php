<?php
	include("includes/header.php");

	//function that returns results
	?>
	<div class="container">
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
		      <th scope="col">E-mail</th>
		    </tr>
		  </thead>
		 <?php
			getMembers();
		 ?>
		 </table>
	 </div>
  <?php

	include("includes/footer.php");
?>