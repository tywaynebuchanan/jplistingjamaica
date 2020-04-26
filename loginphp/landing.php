<?php include ('session.php');
if(!isset($_SESSION['login_user'])){
  header("location:index.php");

}?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Justice of The Peace</title>
    <link rel="stylesheet" type="text/css" href="css/landing.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php">Justice of the Peace</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="landing.php"> Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
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
      
    </ul>
    <a class="nav-link text-light" href="#">
  User Logged in: <?php echo $login_session ?>
     </a>
    <a class="btn btn-outline-light my-2 my-sm-0" href="logout.php">Logout</a>
  </div>
</nav>

     

<div class="space">
<div class="jumbotron text-light bg-primary">
  <h1 class="display-4">Justice of the Peace</h1>
  <p class="lead">This is a simple website that helps you to search for a Justice of the peace in Jamaica. </p>
  <p>Currently, the only listing available is the parish of St Catherine</p>
</div>
</div>


    <div class="space">          
    <div class="container">
            <div class="row">
                
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <a class="list-group-item active"href="stcatherine.php">St Catherine</a>
                            <a class="list-group-item"href="#">Kingston</a>
                            <a class="list-group-item"href="#">St Andrew</a>
                            <a class="list-group-item"href="#">St Thomas</a>
                            <a class="list-group-item"href="#">St James</a>
                            <a class="list-group-item"href="#">Westmoreland</a>
                        </ul>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <a class="list-group-item"href="#">Portland</a>
                            <a class="list-group-item"href="#">St Mary</a>
                            <a class="list-group-item"href="#">St Ann</a>
                            <a class="list-group-item"href="#">Trelawny</a>
                            <a class="list-group-item"href="#">St Elizabeth</a>
                         </ul>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <a class="list-group-item" href="#">Mandeville</a>
                            <a class="list-group-item"href="#">Clarendon</a>
                            <a class="list-group-item"href="#">Hanover</a>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
</div>



<hr>
<div class="container">
        <footer class="text-center">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; MJGA 2020</p>
                </div>
            </div>
     </footer>
</div>
   



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>
