<?php include ('functions/session.php');
      include ('functions/functions.php'); 
      include ('header/header.php');
if(!isset($_SESSION['login_user'])){
  header("location:index.php");
}?>
<!DOCTYPE html>
<html lang="en">
<div class="container space">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">St Catherine</li>
    </ol>
  </nav>
</div>
<div class="container space">
  <div class="container text-center">
        <h1 class="text-center">Search for a Justice of the Peace</h1>
          <form action="search.php" method = "POST">
            <div class="form-group">
              <label for = "keyword">Enter the Last Name or First Name of the Justice of the Peace</label>
              <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Enter the name here" aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword">
              <div class="input-group-append">
               <input class="btn btn-primary" type="submit"  value="Search" name="submit" id="button-addon2"></input>
              </div>
          </div>
            <div>
            <input class="btn btn-primary" type="button" value="Reset Search"  
            onclick="window.location = 'stcatherine.php'" />
          </div> 
        </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
<footer class="text-center ">
            <div class="row bg-primary">
                <div class="col-lg-12">
                    <p class="text-light">Copyright &copy; MJGA 2020</p>
                </div>
            </div>
        </footer>
      </div>
</html>