<?php include ('functions/session.php');
      include ('functions/functions.php');
      include ('header/header.php');
if(!isset($_SESSION['login_user'])){
  header("location:index.php");
}?>
<!DOCTYPE html>
<html lang="en">
<div class="jumbotron">
  <h1 class="display-4">Justice of the Peace</h1>
  <p class="lead">This is a simple website that helps you to search for a Justice of the peace in Jamaica. </p>
  <p>Currently, the only listing available is the parish of <strong>St Catherine</strong></p>
</div>
    <div class="space">          
    <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <a class="list-group-item active"href="stcatherine.php">St Catherine <span class="badge badge-light"><?php TotalJP();?></span></a>
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
