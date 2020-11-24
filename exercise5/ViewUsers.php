<?php
//access the global array called $_POST to get the values from the text fields
  $mysqli = new mysqli("mysql.eecs.ku.edu", "simingfu", "shee3Eu9", "simingfu");
  /* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  //Build MySQL string
	$query = "SELECT user_id FROM Users;";

	//Send query string to MySQL database
	if ($result = $mysqli->query($query)) {

		echo "<table>";
		echo "<th> Table of Users</th>";

		/* fetch associative array */
		while($row = $result->fetch_assoc()) {

			echo "<tr>";
			echo "<td>" . $row["user_id"] . "</td>";
			echo "</tr>";

		}

		echo "</table>";
	}
  /* close connection */
  $mysqli->close();
?>

