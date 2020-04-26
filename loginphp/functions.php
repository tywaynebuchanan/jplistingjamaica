<?php include 'config/dbconn.php';



function SearchDB(){
	global $conn;
	global $error;


if (isset($_GET['submit'])) {
			$conn = new mysqli('localhost', 'root', '', 'listing');
			$q = $conn->real_escape_string($_GET['keyword']);
			

			$sql = $conn->query("SELECT * FROM tblstcatherine WHERE LastName LIKE '%$q%';");
			
			if ($sql->num_rows > 0) {
				while ($row = $sql->fetch_assoc())
					echo "<tr><td>". $row["LastName"] . "</td><td>"
						. $row["FirstName"]. "</td><td>".$row["Address"]. "</td><td>". $row["City"]."</td><td>". $row["PhoneNumber"]."</td></tr>";
					echo "</table>";
			}else{
				echo '<div class="alert alert-primary" role="alert">
                  <strong></strong>There is no Justice of the Peace by the name of '.($_GET['keyword']).'</div>';


				 
			}
}
}

?>