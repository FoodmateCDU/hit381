<!DOCTYPE html>
	<?php include 'php/head.php'; ?>
  <body>
    <header>
		<?php include 'php/header.php'; ?>
    </header>
	<?php require 'php/slider.php'; ?>
  <div class="container mt-5">
  <div class="row">
	<div class="col-sm-8">
	  <table class="table table-hover">
		<thead>
		  <tr>
			<th>Shopping List</th>
			<th>Date</th>
			<th></th>
			<th></th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td>Monday Night</td>
			<td>01/01/0001</td>
			<td><a href="#" class ="btn btn-secondary" role="button">Edit</a></td>
			<td><a href="#" class ="btn btn-secondary" role="button">Delete</a></td>
		  </tr>
		  <tr>
			<td>Grand Feast</td>
			<td>31/02/2018</td>
			<td><a href="#" class ="btn btn-secondary" role="button">Edit</a></td>
			<td><a href="#" class ="btn btn-secondary" role="button">Delete</a></td>
		  </tr>
		</tbody>
	  </table>
	</div>
  </div>
  <div class="row">
	<div class="col-sm mx-auto">
		<a href="user.php" class ="btn btn-secondary" role="button">Return</a>
	</div>
  </div>
			<!-- Footer Import, if used.
			<?php include 'php/footer.php' ?> 
			-->
  </body>
</html>





