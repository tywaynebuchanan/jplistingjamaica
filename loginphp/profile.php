<?php include ('session.php');
if(!isset($_SESSION['login_user'])){
  header("location:index.php");

}?>

<!DOCTYPE html>
<html>
<head>
  <title>Success</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
</head>
<body>

<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Success
      </h1>
      <h2 class="subtitle">
        Primary subtitle
        <p><?php echo $login_session;?></p>
      </h2>
    </div>
  </div>
</section>
<a href="logout.php" class="button">Logout</a>
</body>
</html>

