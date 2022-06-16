    <!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSchool</title>
    <!-- bootstrap CSS -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
    <!--JQuery link-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--JQuery link-->
    <!--Fontawesome css -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!--Custom css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Jquery and Bootstarp Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
  
</head>
<body>
<!--- Start Navigation--->

<nav class="navbar navbar-expand-sm bg-dark  navbar-dark pl-5 pixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">iSchool</a>
  <span>Learn and Implement</span>
  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class ="navbar-nav custom-nav pl-5">
        <li class="nav-item custom-nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item custom-nav-item"><a class="nav-link" href="courses.php">Courses</a></li>
        <li class="nav-item custom-nav-item"><a class="nav-link" href="payment-status.php">Payment Status</a></li>
        <li class="nav-item custom-nav-item"><a class="nav-link" href="#">My profile</a></li>
        <li class="nav-item custom-nav-item"><a class="nav-link" href="#">Logout</a></li>
        <li class="nav-item custom-nav-item"><a class="nav-link" href="#"data-toggle= "modal" data-target="#stuLoginModalCenter">Login</a></li>
        <li class="nav-item custom-nav-item"><a class="nav-link" href="#" data-toggle= "modal" data-target="#stuRegModalCenter">Signup</a></li>
        <li class="nav-item custom-nav-item"><a class="nav-link" href="#">Feedback</a></li>
        <li class="nav-item custom-nav-item"><a class="nav-link" href="#">Contact</a></li>

    </ul>
     </div>
</nav>
<!--End navigation -->