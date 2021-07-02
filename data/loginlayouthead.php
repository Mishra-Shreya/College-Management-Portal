<?php
    session_start();
    require_once 'database.php';
    //require_once 'register-inc.php';
?>

<?php

  if(isset($_GET['error'])) {
    $error = $_GET['error'];
    if(!empty($error)) { ?>
      <script> alert ('<?php echo $error; ?>'); </script>
    <?php }
  }

  if(isset($_GET['success'])) {
    $success = $_GET['success'];
    if(!empty($success)) { ?>
      <script> alert ('<?php echo $success; ?>'); </script>
    <?php }
  }
  
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="College Management Portal is a php project">
  <meta name="author" content="Shreya Mishra, Sheetal Chaudhary">

  <title>College Management Portal</title>

  <link href="formstyle.css" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
    <a class="navbar-brand" href="index.php">COLLEGE MANAGEMENT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav ml-auto">
        <a class="nav-item nav-link" href="index.php">Home &nbsp;</a> 
        <a class="nav-item nav-link" href="about.php">About &nbsp;</a>
        <a class="nav-item nav-link" href="admin.php">Admin &nbsp;</a>
        <a class="nav-item nav-link" href="faculty.php">Faculty &nbsp;</a>      
        <a class="nav-item nav-link" href="student.php">Student &nbsp;</a>
      </ul>
      
      <!--<form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </form>-->
    </div>
  </nav>

 