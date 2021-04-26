<?php
// session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('172.31.27.119', 'root', '','notify_me');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user1 = mysqli_fetch_assoc($result);
  
  if ($user1) { // if user exists
    if ($user1['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user1['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO user (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}



// LOGIN USER
// if (isset($_POST['login_user'])) {
//   $username = mysqli_real_escape_string($db, $_POST['username']);
//   $password = mysqli_real_escape_string($db, $_POST['password']);

//   if (empty($username)) {
//     array_push($errors, "Username is required");
//   }
//   if (empty($password)) {
//     array_push($errors, "Password is required");
//   }

//   if (count($errors) == 0) {
//     $password = md5($password);
//     $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
//     $results = mysqli_query($db, $query);
//     if (mysqli_num_rows($results) == 1) {
//       $_SESSION['username'] = $username;
//       $_SESSION['success'] = "You are now logged in";
//       header('location: index.php');
//     }else {
//       array_push($errors, "Wrong username/password combination");
//     }
//   }
// }


// <?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "notifyme";

// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
// if (isset($_POST['new_post'])) {
//   $post_name = mysqli_real_escape_string($db, $_POST['name']);
//   $post_email = mysqli_real_escape_string($db, $_POST['email']);
//   $date = mysqli_real_escape_string($db, $_POST['date']);
//   $subject = mysqli_real_escape_string($db, $_POST['subject']);
//   $updatepost = mysqli_real_escape_string($db, $_POST['post']);


// $sql = "INSERT INTO post (post_name, post_email, post_date, post_subject, post_updatepost)
// VALUES ('$post_name', '$post_email', '$date', '$subject','$updatepost' )";

// if (mysqli_query($db, $sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);
// }



if (isset($_POST['new_post'])) {
  $post_name = mysqli_real_escape_string($db, $_POST['name']);
  $post_email = mysqli_real_escape_string($db, $_POST['email']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $subject = mysqli_real_escape_string($db, $_POST['subject']);
  $updatepost = mysqli_real_escape_string($db, $_POST['post']);
  $postcategory = mysqli_real_escape_string($db, $_POST['category']);
    

  if (count($errors) == 0) {
    $query = "INSERT INTO post (post_name, post_email, post_date, post_subject,  post_category , post_updatepost)
                    VALUES ('$post_name', '$post_email', '$date', '$subject','$postcategory' ,'$updatepost' )";

    // $results = mysqli_query($db, $query);
    if (mysqli_query($db, $query) == 1) {
              echo "New record created successfully";
        } else {
          echo "Error: " . $query . "<br>" . mysqli_error($db);
        }

  }
}


$user_post = "SELECT post_name, post_email, post_date, post_subject, post_updatepost,post_category FROM post";
$post_result = $db->query($user_post);
// if ($post_result->num_rows > 0) {
// // output data of each row
// while($row = $post_result->fetch_assoc()) {
// echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"] . "</td><td>"
// . $row["password"]. "</td></tr>";
// }
// echo "</table>";
// } else { echo "0 results"; }


?>