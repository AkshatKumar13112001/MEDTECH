<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Patient Dashboard</title>
    <link rel="stylesheet" href="patient-dashboard.css">
  </head>
  <body>
    <header>
      <div class="logo">
        <h2>Medical Service</h2>
      </div>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">View Medical Records</a></li>
          <li><a href="#">Update Details</a></li>
          <li><a href="#">Request Medical Advice</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
      </nav>
    </header>
    <section class="dashboard">
      <h2>Welcome Patient!!</h2>
      <p>Here you can view your medical records, update your details, and request medical advice from our doctors.</p>
    </section>
    <footer>
      <p>&copy; 2023 Medical Service. All rights reserved.</p>
    </footer>
  </body>
</html>
