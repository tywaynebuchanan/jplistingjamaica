<?php include ('config/dbconn.php');

function SearchDB(){
		global $conn;
if(empty($_POST['keyword'])){

	echo '<div class="space">
	<div class="alert alert-danger" role="alert">
     <strong>Opps! </strong><strong>The Search Field can not be blank!</strong></div></div>';

} else {

if (isset($_POST['submit'])) {
			$q = $conn->real_escape_string($_POST['keyword']);
			$sql = $conn->query("SELECT * FROM tblstcatherine WHERE CONCAT_WS('',FirstName,LastName) LIKE '%$q%' OR CONCAT_WS('',LastName,FirstName) LIKE '%$q%';");
	
			if ($sql->num_rows > 0) {
				while ($row = $sql->fetch_assoc())
					echo '<tr><td>'.$row["LastName"] . '</td><td>'
						. $row["FirstName"]. "</td><td>".$row["Address"]. "</td><td>". $row["City"]."</td><td>". $row["PhoneNumber"].'</td><td class = "bg-primary"><button class = "btn btn-primary btn-lg btn-block btn-sm" type ="submit">'.$row["Status"].'</button></td></tr>';
					echo "</table>";
			}else{
				echo '<div class="alert alert-primary" role="alert">
                  <strong></strong>There is no Justice of the Peace by the name of <strong>'.strtoupper($_POST['keyword']).'</strong></div>';	 
			}

			}
		}

	}

function TotalJP(){
	include 'config/dbconn.php';

	$count = ("SELECT count(*) AS Total FROM tblstcatherine;");
	$result = mysqli_query($conn,$count);
	$values = mysqli_fetch_assoc($result);
	$num_rows = $values['Total'];
	echo $num_rows;
}



function UserInfo(){

	include  'config/dbconn.php';
	$username = $_SESSION['login_user'];

	$query = $conn->query("SELECT * FROM users WHERE username = '$username';");
	if ($query->num_rows > 0){
	while ($row = $query->fetch_assoc())
		echo $row['user_name'];

}
}

?>


