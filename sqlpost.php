 <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "notifyme";

 //Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 //Check connection
if (isset($_POST['new_post'])) {
  $post_name = mysqli_real_escape_string($db, $_POST['name']);
  $post_email = mysqli_real_escape_string($db, $_POST['email']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $subject = mysqli_real_escape_string($db, $_POST['subject']);
  $updatepost = mysqli_real_escape_string($db, $_POST['post']);


$sql = "INSERT INTO post (post_name, post_email, post_date, post_subject, post_updatepost)
VALUES ('$post_name', '$post_email', '$date', '$subject','$updatepost' )";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>