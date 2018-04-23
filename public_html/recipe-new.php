<!DOCTYPE html>
	<?php include 'php/head.php'; ?>
  <body>
    <header>
		<?php include 'php/header.php'; ?>
    </header>
	<?php require 'php/slider.php'; ?>
	<div class="row mx-auto text-center mt-5">
		<div class="col-sm">
			<span class="h1">Add new recipe</span>
		</div>
	</div>
  
	<div class="row">
	  <div class="container mt-5">
			<form action="#">
				<div class="form-group">
					<label for="title">Title:</label>
					<input type="title" class="form-control" id="title">
				</div>
				<div class="form-group">
					<label for="password">Ingredients:</label>
					<input type="password" class="form-control mt-1" id="password">
					<input type="password" class="form-control mt-1" id="password">
					<input type="password" class="form-control mt-1" id="password">
					<input type="password" class="form-control mt-1" id="password">
					<input type="password" class="form-control mt-1" id="password">
				</div>
				<div class="form-group">
					<label for="comment">Method Step 1:</label>
					<textarea class="form-control" rows="5" id="comment"></textarea>
				</div> 
				<div class="form-group">
					<label for="comment">Method Step 2:</label>
					<textarea class="form-control" rows="5" id="comment"></textarea>
				</div> 
				<div class="form-group">
					<label for="comment">Method Step 3:</label>
					<textarea class="form-control" rows="5" id="comment"></textarea>
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





