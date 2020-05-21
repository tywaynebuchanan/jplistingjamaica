<?php ob_start();?>
<?php include ('functions/session.php');
      include ('functions/functions.php');
      include ('header/header.php');
      include ('config/dbconn.php');
      
if(!isset($_SESSION['login_user'])){
  header("location:index.php");

}


?>

<!DOCTYPE html>
<html lang="en">
<script src="js/script.js"></script>
<div class="container space">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="landing.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Search Result</li>
    </ol>
  </nav>
</div>


    <div class="container space">
      <input class="btn btn-primary" type="button" value="Reset Search" onclick="window.location = 'landing.php'">
    <div>
          
<div class="space">
<div class="container table-responsive">
      <table class="table has-text-centered table-bordered table-sm table-hover" id="table" >
        <thead class="thead-light">
          <tr>

          
            <th>Last Name</th>
            <th>First Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Parish</th>
            <th>Phone Number</th>
             <th>Status</th>
          </tr>
        </thead>
        <tbody>
       <?php SearchJP();?>
       </tbody>
      </table>
 </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>



<div class="footer-tm">
  <p>Footer</p>
</div>
</html>