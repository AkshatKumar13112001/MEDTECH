<?php

if (isset($_POST['patient'])) {
  header('Location: patient_login.php');
  exit();
}

if (isset($_POST['doctor'])) {
  header('Location: doctor_login.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Medical Service</title>
    <link rel="stylesheet" href="home-page.css">
  </head>
  <body>
    <header>
      <div class="logo">
        <h2>Medical Service</h2>
      </div>
    </header>
    <section class="container">
      <h1>Are you a Patient or a Doctor?</h1>
      <div class="buttons">
        <form method="POST" action="redirect.php">
          <button type="submit" name="patient" href="patient-login.php" target="_blank">Patient</button>
          <a class="button" href="patient-login.php" target="_blank"></a>
          <button type="submit" name="doctor">Doctor</button>
        </form>
      </div>
    </section>
    <footer>
      <p>&copy; 2023 Medical Service. All rights reserved.</p>
    </footer>
  </body>
</html>
