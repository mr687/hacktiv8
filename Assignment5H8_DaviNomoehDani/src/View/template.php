<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="data:;base64,iVBORw0KGgo=">
  <link rel="stylesheet" href="./assets/style.css">
  <title>Assignment 3</title>
</head>
<body>
  <!-- START -->
  <div id="app">
    <!-- NAVBAR START -->
    <nav class="navbar">
      <div class="container">
        <div class="collapse">
          <div class="brand"><a href="/">Assignment 3</a></div>
          <button class="menu">
            <i class="fas fa-bars"></i>
          </button>
        </div>
        <ul class="nav">
          <li><a href="/" class="active">home</a></li>
          <li><a href="product">product</a></li>
          <li><a href="gallery">gallery</a></li>
          <li><a href="blog">blog</a></li>
          <li><a href="inventory">my inventory</a></li>
        </ul>
      </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- MAIN START -->
    <main class="container">
      <?php include_once($viewPath); ?>
    </main>
    <!-- MAIN END -->
  </div>
  <!-- END -->
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
  <script src="./assets/script.js"></script>
</body>
</html>