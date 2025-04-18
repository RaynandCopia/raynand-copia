<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <img src="logo.pmg.jpg" alt="" class="logo">
      <a class="navbar-brand" href="#">My Love So Sweet</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <a href="#" class="btn btn-search">Toploka</a>
        </form>
      </div>
    </div>
  </nav>

  <!-- here ambot -->
  <div class="banner d-flex align-items-center" id="banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1>Lorem ipsum dolor sit amet consectetur adipisicing.</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <a href="#" class="btn btn-search">Tuploka</a>



        </div>
      </div>

    </div>
  </div>
  <br><br>

  <!-- about section-->

  <?php include '../about.php'; ?>
  <?php include '../services.php'; ?>
  <?php include '../reviews.php'; ?>
  <?php include '../faq.php'; ?>
  <?php include '../footer.php'; ?>


</body>

</html>