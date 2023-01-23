<?php

if (isset($_POST['submit'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password_repeat = $_POST['password-repeat'];
  
  // validate form data
  if ($password != $password_repeat) {
    echo "Passwords do not match.";
  } else {
    // connect to database
    $conn = mysqli_connect("host", "username", "password", "database");
    
    // check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    // insert data into table
    $sql = "INSERT INTO students (firstname, lastname, email, password)
    VALUES ('$firstname', '$lastname', '$email', '$password')";
    
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
}
