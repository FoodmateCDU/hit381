<!DOCTYPE html>
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


      <div class="container mb-5">
        <div class="row">
          <h1>Sitemap</h1>
          <ul class="list-group mt-3 mb-3">
            <li class="list-group-item pl-1">Index.html</li>
            <li class="list-group-item pl-2">Login.html</li>
            <li class="list-group-item pl-2">User.html</li>
            <li class="list-group-item pl-3">Recipe-x.html</li>
            <li class="list-group-item pl-3">Recipe-new.html</li>
            <li class="list-group-item pl-3">Recipe-manage.html</li>
            <li class="list-group-item pl-3">Shopping-x.html</li>
            <li class="list-group-item pl-3">Shopping-new.html</li>
            <li class="list-group-item pl-3">Shopping-manage.html</li>
            <li class="list-group-item pl-3">Inventory-manage.html</li>
            <li class="list-group-item pl-1">Sitemap.html</li>
          </ul>
          <div class="container mt-3 mb-4 text-center">
            <a href="img/sitemap.jpg"><img src="img/sitemap.jpg" height="300" width="400"></a>
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
