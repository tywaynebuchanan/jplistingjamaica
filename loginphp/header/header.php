<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Justice of The Peace</title>
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="js/script.js"></script>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
  <a class="navbar-brand" href="landing.php">Justice of the Peace</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="landing.php"> Home<span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Parishes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Kingston</a>
          <a class="dropdown-item" href="#">St Andrew</a>
          <a class="dropdown-item active" href="stcatherine.php">St Catherine</a>
          <a class="dropdown-item" href="#">Clarendon</a>
          <a class="dropdown-item" href="#">Manchester</a>
          <a class="dropdown-item" href="#">St Elizabeth</a>
          <a class="dropdown-item" href="#">Portland</a>
          <a class="dropdown-item" href="#">St James</a>
          <a class="dropdown-item" href="#">Trelwany</a>
          <a class="dropdown-item" href="#">St Ann</a>
          <a class="dropdown-item" href="#">St Mary</a>
          <a class="dropdown-item" href="#">St Thomas</a>
          <a class="dropdown-item" href="#">Westmoreland</a>
          <a class="dropdown-item" href="#">Hanover</a>
        </div>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>

    </ul>
<div class="btn-group">
    <button class="btn btn-outline-light btn-primary dropdown-toggle"  href="#"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <i class="fas fa-user"></i> View Profile  <?php echo $login_session ?>
     </button>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu text-center">
    <div class="card-body">
      <h5 class="card-title"><?php UserInfo(); ?></h5>
      <p class=""><?php echo $login_session ?></p>
        <a class = "btn btn-outline-primary rounded-pill" href ="#">Manage Profile</a>
    </div>
      <a class="btn btn-outline-primary rounded-pill" href="functions/logout.php">Logout</a>
    </div> 
</div>
</div>
</div>
</nav> 