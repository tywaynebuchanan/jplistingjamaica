<?php include ('login.php');
if(isset($_SESSION['login_user'])){
  header("location:landing.php");
}


?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
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
          <div class="box">
          <h3 class="title has-text-link">JP Verify</h3>
         
            <hr class="login-hr">
            <p class="subtitle has-text-black">Please login to proceed.</p>
            
            <form action="" method="POST">
            <div class="field">
              <p class="control has-icons-left has-icons-right">
                <input class="input" type="text"  id="username" name="username" placeholder="Username" onchange="UpdateUser()">
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
              </p>
            </div>

              <div class="hide-content space" id="error1">
              <div class="notification is-danger">
                <button class="delete"></button>
                <strong>Opp!</strong> You did not enter a username
              </div>
            </div>
  
            <div class="field">
              <p class="control has-icons-left">
                <input class="input" type="password" id="password" name="password" placeholder="Password">
                <span class="icon is-small is-left">
                  <i class="fas fa-lock"></i>
                </span>
              </p>
            </div>

            <div class="hide-content space" id="error2">
              <div class="notification is-danger">
                <button class="delete"></button>
                <strong>Opp!</strong> You did not enter a password
              </div>
            </div>

            <div class="hide-content space" id="error">
              <div class="notification is-danger">
                <button class="delete"></button>
                <strong>Opp!</strong> We can not proceed without a username and password
              </div>
            </div>
            <div class="field">
              <p class="control">
                <button class="button is-block is-info is-large is-fullwidth" name="submit" onclick="return showError()">
                  Login
                </button>
              </p>
            </form>
          </div>
          <div class="space has-text">
<p class="has-text-light">
                        <a href="../">Sign Up</a> &nbsp;·&nbsp;
                        <a href="../">Forgot Password</a> &nbsp;·&nbsp;
                        <a href="../">Need Help?</a>
                    </p>
        </div>
        </div>

        </div>
        
    </div>
  
          


</section>
</div>
</body>
</html>

