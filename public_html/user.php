<!DOCTYPE html>
<!-- Head Import -->
<?php include 'php/head.php'; ?>

<body>

	<!-- Navigation Slider -->
	<nav id="menu">
		<header>
			<div class="list-group text-light">
				<a href="user.php" class="list-group-item list-group-item-action rounded-0 ">
					<span class="slide-header"><h3>My Foodmate</h3></span>
				</a>
				<a href="recipe-manage.php" class="list-group-item rounded-0 pl-5 ">My Recipes</a>
				<a href="shopping-x.php" class="list-group-item rounded-0 pl-5 ">Shopping Lists</a>
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

			<!-- container for cards -->
			<div class="container mb-5">
				<div class="row mx-auto text-center">

					<!-- card -->
					<div class="col-sm">
						<div class="card mx-auto mb-5" style="width:300px">
							<div class="card-body">
								<h4 class="card-title">Your Recipes</h4>
								<p class="card-text">
									<div class="list-group">
										<a href="recipe-x.php" class="list-group-item list-group-item-action">Creamy caramelised onion and bacon pasta</a>
										<a href="recipe-x.php" class="list-group-item list-group-item-action">15-minute salmon gnocchi</a>
										<a href="recipe-x.php" class="list-group-item list-group-item-action">Spicy pork larb with chilli sauce</a>
										<a href="recipe-x.php" class="list-group-item list-group-item-action">Hypotherical quantum recipe</a>
									</div>
									<a href="recipe-new.php" class="btn btn-secondary mt-2">Add Recipe</a>
									<a href="recipe-manage.php" class="btn btn-secondary mt-2">Manage</a>
								</p>
							</div>
						</div>
					</div>

					<!-- card -->
					<div class="col-sm">
						<div class="card mx-auto mb-5" style="width:300px">
							<div class="card-body">
								<h4 class="card-title">Shopping Lists</h4>
								<p class="card-text">
									<div class="list-group">
										<a href="shopping-x.php" class="list-group-item list-group-item-action">Monday Night</a>
										<a href="shopping-x.php" class="list-group-item list-group-item-action">A Grand Feast</a>
									</div>
									<a href="shopping-new.php" class="btn btn-secondary mt-2">Create New</a>
									<a href="shopping-manage.php" class="btn btn-secondary mt-2">Manage</a>
								</p>
							</div>
						</div>
					</div>

					<!-- card -->
					<div class="col-sm">
						<div class="card mx-auto mb-5" style="width:300px">
							<div class="card-body">
								<h4 class="card-title">Inventory</h4>
								<p class="card-text">
									<ul class="list-group text-left">
										<li class="list-group-item">1 Bread</li>
										<li class="list-group-item">500ml Milk</li>
										<li class="list-group-item">4 Cheese</li>
									</ul>
									<a href="inventory-manage.php" class="btn btn-secondary mt-2">Manage</a>
								</p>
							</div>
						</div>
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
