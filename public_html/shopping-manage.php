<!DOCTYPE html>
<?php include 'php/head.php'; ?>
<body>
	<!-- Navigation Slider -->
	<nav id="menu">
		<header>
			<div class="list-group text-light">
				<a href="user.php" class="list-group-item list-group-item-action rounded-0 "><span class="slide-header"><h3>My Foodmate</h3></span></a>
				<a href="recipe-manage.php" class="list-group-item rounded-0 pl-5 ">My Recipes</a>
				<a href="recipe-new.php" class="list-group-item rounded-0 pl-5 ">Add New Recipe</a>
				<a href="shopping-manage.php" class="list-group-item rounded-0 pl-5 ">Shopping Lists</a>
				<a href="shopping-new.php" class="list-group-item rounded-0 pl-5 ">New Shopping List</a>
				<a href="inventory-manage.php" class="list-group-item rounded-0 pl-5 ">Fridge & Pantry</a>
				<a href="recipe-g.php" class="list-group-item rounded-0 pl-5">Import Recipe</a>
			</div>
		</header>
	</nav>

	<!-- Main Page body -->
	<main id="panel">
		<div class="fm-panel">
			<!-- toggle button for slideout nav -->
			<i class="fas fa-bars toggle-button"></i>


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
			</div>
		</div>
	</main>
	<!-- Main Slideout JS -->
	<script src="js/slideout.js"></script>
	<!-- Activate our slideout -->
	<script src="js/fm-slideout.js"></script>

</body>
</html>
