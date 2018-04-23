<?php	

	//Handles the Sliding Navigation Menu
	// Include in <body>, after <header>
	
	echo '
				<div class="pl-5 pt-2 nav-spacer" id="panel">
					<button type="button" class="btn btn-dark toggle-button p-3 mt-2">Nav</button>
			</div>
			
			<div class="container">	
				<nav id="menu" class="menu">
				  <section class="menu-section">
						 <div class="list-group text-light">
						  <a href="user.php" class="list-group-item list-group-item-action rounded-0 bg-dark text-light"><span class="slide-header"><h3>My Foodmate</h3></span></a>
						  <a href="recipe-manage.php" class="list-group-item list-group-item-action rounded-0 pl-5 bg-dark text-light">My Recipes</a>
						  <a href="shopping-x.php" class="list-group-item list-group-item-action rounded-0 pl-5 bg-dark text-light">Shopping Lists</a>
						  <a href="inventory-manage.php" class="list-group-item list-group-item-action rounded-0 pl-5 bg-dark text-light">Fridge & Pantry</a>
						  <a href="recipe-g.php" class="list-group-item list-group-item-action rounded-0 pl-5 bg-dark text-light">Import Recipe</a>
						 </div>
				  </section>
				</nav>



				<script src="js/slideout.js"></script>
				<script>
				  var slideout = new Slideout({
					\'panel\': document.getElementById(\'panel\'),
					\'menu\': document.getElementById(\'menu\'),
					\'padding\': 216,
					\'tolerance\': 70
				  });

				  // Toggle button
				  document.querySelector(\'.toggle-button\').addEventListener(\'click\', function() {
					slideout.toggle();
				  });
				</script>
			</div>
	';
?>