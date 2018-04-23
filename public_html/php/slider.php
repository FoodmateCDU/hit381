<?php

//Handles the Sliding Navigation Menu
// Include in <body>, after <header>
/*
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
</div>
';

*/

echo '
<nav id="menu">
	<header>
		<div class="list-group text-light">
			<a href="user.php" class="list-group-item list-group-item-action rounded-0 "><span class="slide-header"><h3>My Foodmate</h3></span></a>
			<a href="recipe-manage.php" class="list-group-item list-group-item-action rounded-0 pl-5 ">My Recipes</a>
			<a href="shopping-x.php" class="list-group-item list-group-item-action rounded-0 pl-5 ">Shopping Lists</a>
			<a href="inventory-manage.php" class="list-group-item list-group-item-action rounded-0 pl-5 ">Fridge & Pantry</a>
			<a href="recipe-g.php" class="list-group-item list-group-item-action rounded-0 pl-5">Import Recipe</a>
		</div>
	</header>
</nav>


'
?>
