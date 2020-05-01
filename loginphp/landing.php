<?php include ('functions/session.php');
      include ('functions/functions.php');
      include ('header/header.php');
if(!isset($_SESSION['login_user'])){
  header("location:index.php");

}else {
  if((time() - $_SESSION['time_login']) > 30)
  {
    header("location:functions/logout.php");
    echo '<div class="space">
        <div class="alert alert-primary " role="alert">
                  <strong>Need more time? The system logged you out!</strong></div></div>';  
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<div class="jumbotron">
    <div class="container">
  <h1 class="display-4">Justice of the Peace</h1>
  <p class="lead">This is a simple website that helps you to search for a Justice of the peace in Jamaica. </p>
  <p>Currently, the only listing available is the parish of <strong>St Catherine</strong>,<strong>Clarendon</strong> and <strong>Hanover</strong></p>
</div>
</div>

<div class="container space">
  <div class="container text-center">
        <h1 class="text-center">Search for a Justice of the Peace</h1>
          <form action="searchresults.php" method = "POST">
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
            onclick="window.location = 'landing.php'" />
          </div> 
        </form>
    </div>
  </div>
</div>         
    
               
<div class="container">
<div class="row marketing">
        <div class="col-lg-6">
         <h4>St Catherine <span class="badge badge-primary"><?php Total_StCatherine();?></h4>
          <p>There are currently <?php Total_StCatherine();?> active Justice of the Peace in the Parish of St Catherine</p>
          <h4>Clarendon <span class="badge badge-primary"><?php Total_Clarendon();?></h4>
          <p>There are currently <?php Total_Clarendon();?> active Justice of the Peace in the Parish of Clarendon</p>
          <h4>Manchester <span class="badge badge-primary"></h4>
          <p>There are currently  active Justice of the Peace in the Parish of Manchester</p>
        <h4>Kingston <span class="badge badge-primary"></h4>
          <p>There are currently  active Justice of the Peace in the Parish of Kingston </p>
        <h4>St Andrew <span class="badge badge-primary"></h4>
          <p>There are currently  active Justice of the Peace in the Parish of St Andrew</p>
          <h4>St Mary <span class="badge badge-primary"></h4>
          <p>There are currently  active Justice of the Peace in the Parish of St Mary</p>
      <h4>Portland <span class="badge badge-primary"></h4>
          <p>There are currently  active Justice of the Peace in the Parish of Portland</p>
        </div>

        <div class="col-lg-6">
          <h4>St Thomas <span class="badge badge-primary"></h4>
          <p>There are currently  active Justice of the Peace in the Parish of St Thomas</p>
          <h4>Trelawny<span class="badge badge-primary"></h4>
          <p>There are currently  active Justice of the Peace in the Parish of Trelawny</p>
        <h4>Westmoreland<span class="badge badge-primary"></h4>
          <p>There are currently  active Justice of the Peace in the Parish of Westmoreland</p>
         <h4>St Elizabeth <span class="badge badge-primary"></h4>
          <p>There are currently  active Justice of the Peace in the Parish of St Elizabeth</p>
          <h4>St Ann <span class="badge badge-primary"></h4>
          <p>There are currently  active Justice of the Peace in the Parish of St Ann</p>
          <h4>St James <span class="badge badge-primary"></h4>
          <p>There are currently  active Justice of the Peace in the Parish of St James</p>
          <h4>Hanover <span class="badge badge-primary"><?php Total_Hanover();?></h4>
          <p>There are currently <?php Total_Hanover();?> active Justice of the Peace in the Parish of Hanover</p>
        </div>
      </div>
</div>

<footer class="footer bg-primary text-light text-center">
  <div class="container">
  <div class="row bg-primary">
                <div class="col-lg-12">
                    <p class="">Copyright &copy; MJGA 2020</p>
                </div>
            </div>
  </footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
