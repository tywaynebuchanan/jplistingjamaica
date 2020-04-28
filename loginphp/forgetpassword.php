<?php include ('login.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
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
          <h3 class="title has-text-link">Password Reset </h3>
            <p class="subtitle has-text-black">Let's help you reset your password </p>
            <form action="" method="POST">
            
            <div class="field">
              <label class="label has-text-centered">Please enter your email address</label>
              <p class="control has-icons-left has-icons-right">
                <input class="input is-rounded" type="email"  id="email" name="email" placeholder="Please enter your email address" onchange="UpdateUser()">
                <span class="icon is-small is-left">
                  <i class="fas fa-envelope-open-text"></i>
                </span>
              </p>
            </div>

              <div class="hide-content space" id="error1">
              <div class="notification is-danger">
                <button class="delete"></button>
                <strong>Opp!</strong> You did not enter a username
              </div>
            </div>
            <div class="hide-content space" id="error2">
              <div class="notification is-danger">
                <button class="delete"></button>
                <strong>Opp!</strong> You did not enter a password
              </div>
            </div>


            <div class="field">
              <p class="control">
                <button class="button is-block is-info is-fullwidth" name="submit" onclick="return showError()">
                Reset my Password
                </span>
                </button>
              </p>
            </form>
          </div>
          
        </div>
        </div>
        </div> 
    </div>
  </section>
</div>
</body>
</html>

