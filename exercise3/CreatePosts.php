<?php
//access the global array called $_POST to get the values from the text fields
  $userid = $_POST["userid"];
  $post = $_POST["post"];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "simingfu", "shee3Eu9", "simingfu");
  /* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  $query = "SELECT user_id FROM Users;";
  if ($result = $mysqli->query($query)) {
    while($row = $result->fetch_assoc()) {

      if($row["user_id"] == $userid)
      {
        $user_exists = true;
      }
    }
    if (!$user_exists){
      echo "Wrong User id: User id doesn't exist<br>";
    }
    else if ($post == ""){
      echo "Post store failed: Post can't be empty<br>";
    }
    else{
      $qry = "INSERT INTO Posts (post_id,content,author_id) VALUES ('NULL','$post','$userid');";

      if ($mysqli->query($qry)) {
        echo "Post add successfully.<br>";
      }
    }
  }
  /* close connection */
  $mysqli->close();
?>

