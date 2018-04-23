<!DOCTYPE html>
	<?php include 'php/head.php'; ?>
  <body>
    <header>
		<?php include 'php/header.php'; ?>
    </header>
	<?php require 'php/slider.php'; ?>
	<div class="row mx-auto text-center mt-5">
		<div class="col-sm">
			<span class="h1">Create new Shopping List</span>
		</div>
	</div>
  
	<div class="row">
	  <div class="container mt-5">
			<form action="#">
				<div class="form-group">
					<label for="title">Name:</label>
					<input type="title" class="form-control" id="title">
				</div>
				<div class="form-group">
					<label for="password">Items:</label>
					<input type="password" class="form-control mt-1" id="password">
					<input type="password" class="form-control mt-1" id="password">
					<input type="password" class="form-control mt-1" id="password">
					<input type="password" class="form-control mt-1" id="password">
					<input type="password" class="form-control mt-1" id="password">
					<input type="password" class="form-control mt-1" id="password">
					<input type="password" class="form-control mt-1" id="password">
					<input type="password" class="form-control mt-1" id="password">
					<input type="password" class="form-control mt-1" id="password">
					<input type="password" class="form-control mt-1" id="password">
				</div>
				<!-- <button type="submit" class="btn btn-secondary">Submit</button> -->
				<div class="container mx-auto">
					<a href="user.php" class ="btn btn-secondary" role="button">Submit</a>
					<a href="user.php" class ="btn btn-secondary" role="button">Return</a>
				</div>
			</form>
		</div>
	</div>
  </div>
			<!-- Footer Import, if used.
			<?php include 'php/footer.php' ?> 
			-->
  </body>
</html>





