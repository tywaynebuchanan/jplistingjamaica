<?php include ('functions/registeruser.php')


?>
<!DOCTYPE html>
<html>
<head>
  <title>Success</title>
   <link rel="stylesheet" type="text/css" href="css.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
 <script src="js/script.js"></script>
</head>
<body>

<section class="hero is-link is-fullheight">

  <div class="hero-body is-success ">
    <div class="container has-text-centered">
        <div class="column is-4 is-offset-4">
           <div class="space" id="error2">
              <div class="notification is-success is-light">
                <strong>You have successfully registered for our system</strong>
              </div>
            </div>
          <div class="box">
          <i class="fas fa-thumbs-up fa-10x"></i>
            <hr class="login-hr">
            <p class="subtitle has-text-black">Please press Login to proceed</p>
            

            <div class="field">
              <p class="control">
                <a class="button is-block is-info is-fullwidth" name="submit" href="index.php">
                  Login
                  <i class="fas fa-sign-in-alt"></i>
                </span>
                </a>
              </p>
          </div>
          
        </div>
        </div> 
    </div>
  </section>
</div>
</body>
</html>

