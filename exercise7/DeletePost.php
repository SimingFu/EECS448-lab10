<?php
  //access the global array called $_POST to get the values from the text fields
  $mysqli = new mysqli("mysql.eecs.ku.edu", "simingfu", "shee3Eu9", "simingfu");
  /* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  $query = "SELECT post_id FROM Posts'";
   $delete = $_POST["delete"];
   foreach ($delete as $postid){
     $qry = "DELETE FROM Posts WHERE post_id='$postid'";
     if ($result = $mysqli->query($qry)){
        echo "The post "  .$postid. " delete successsfully<br>"; 
     }
     else{
        echo "The post " .$postid." delete failed <br>";
      }
   }
   /* close connection */
   $mysqli->close(); 
  
?>