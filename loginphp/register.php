<?php 
include ('functions/registeruser.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Register User</title>
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
          <h3 class="title has-text-link">JP Verify Registration Form</h3>
            <hr class="login-hr">
            <p class="subtitle has-text-black">Let's get you signed up</p>
            <form action="" method="POST">
            <div class="field">
              <label class="label has-text-left">Please enter your Full Name</label>
              <p class="control has-icons-left has-icons-right">
                <input class="input is-rounded" type="text"  id="name" name="name" required placeholder="Please enter your full name eg. John Smith">
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
              </p>
            </div>

           

             <div class="field">
              <label class="label has-text-left">Please enter your Email Address</label>
              <p class="control has-icons-left has-icons-right">
                <input class="input is-rounded" type="email"  id="email" name="email" required placeholder="eg.johnsmith@mail.com" onchange="UpdateUser()">
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
  
            <div class="field">
              <label class="label has-text-left">Please enter your password</label>
              <p class="control has-icons-left">
                <input class="input is-rounded" type="password" id="password" required name="password" placeholder="Password">
                <span class="icon is-small is-left">
                  <i class="fas fa-lock"></i>
                </span>
              </p>
            </div>

            <div class="field">
              <label class="label has-text-left">Please re-enter your password</label>
              <p class="control has-icons-left">
                <input class="input is-rounded" type="password" id="conpassword" name="conpassword" placeholder="Re-enter Password" required>
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

            <label class="checkbox">
            <input type="checkbox">
            I agree to the <a href="#">terms and conditions</a>
            </label>

    <div class="appear">
    <div class="modal modal_pop">
      <div class="modal-background"></div>
      <div class="modal-card">
        <header class="modal-card-head">
          <p class="modal-card-title">Terms and Conditions</p>
          <button class="delete"aria-label="close" onclick="closeX()"></button>
        </header>
        <section class="modal-card-body">
         Hello World
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan, metus ultrices eleifend gravida, nulla nunc varius lectus, nec rutrum justo nibh eu lectus. Ut vulputate semper dui. Fusce erat odio, sollicitudin vel erat vel, interdum mattis neque.


        </section>
        <footer class="modal-card-foot">
          <button class="button is-link" onclick="ClosePopUpbtn()">Close</button>
          
        </footer>
      </div>
  </div>
</div>


            <div class="field">
              <p class="control">
                <button class="button is-block is-info is-fullwidth" name="submit">
                  Register
                 <i class="fas fa-clipboard-check"></i>
                </span>
                </button>
              </p>
            </form>
          </div>
          <div class="space has-text">
            <p class="has-text-light">
                        <a href="register.php">Sign Up</a> &nbsp;·&nbsp;
                        <a href="forgetpassword.php">Forgot Password</a> &nbsp;·&nbsp;
                        <a href="index.php">Login</a>&nbsp;·&nbsp;
                    </p>
        </div>
        </div>
        </div> 
    </div>
  </section>
</div>
</body>
</html>

