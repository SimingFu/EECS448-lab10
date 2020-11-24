<?php
  //access the global array called $_POST to get the values from the text field
  $userid = $_POST["userid"];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "simingfu", "shee3Eu9", "simingfu");
  /* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  if ($userid == ""){
    echo "New user store failed: the user id field can't be empty<br>";
  }
  else{
    $query = "INSERT INTO Users (user_id) VALUES ('".$userid."')";
    if($mysqli->query($query)){
      echo "New user ".$userid." store successfully<br>";
    }
    else{
      echo "New user store failed: the user id ".$userid." alread existed<br><br>";
    }
  }

  /* close connection */
  $mysqli->close();
?>

