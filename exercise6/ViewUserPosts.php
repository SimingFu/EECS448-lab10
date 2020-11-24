<?php
  //access the global array called $_POST to get the values from the text field
  $mysqli = new mysqli("mysql.eecs.ku.edu", "simingfu", "shee3Eu9", "simingfu");
  /* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  echo "<table>";
    $userid = $_POST["userid"];
    $query = "SELECT content FROM Posts WHERE author_id='".$userid."'";
    if($result = $mysqli->query($query)){
      echo "<th>User ".$userid. "'s Posts</th>";
      while($row = $result->fetch_assoc()){
        echo "<tr> \n";
        echo "<td>". $row["content"]. "</td>";
        echo "</tr>";
      }
    }
    else{
      echo "No post for this user";
    }
  /* close connection */
  $mysqli->close();
?>


