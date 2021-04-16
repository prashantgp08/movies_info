<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../guest/index.php');
}
else{ 
    if ($_SESSION['status'] != "admin") {
        header('location: ../user/index.php');
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to MoviesInfo</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>

    
    <link rel=" stylesheet " href="../css/bootstrap.min.css ">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/popup.css">

</head>

<body>
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark fixed-top ">
        
        <a class="navbar-brand " href="#">
            <img src="../image/shield.jpg " alt="logo "> MoviesInfo
        </a>

        
        <ul class="navbar-nav mr-auto ">
        </ul>
        
        <ul class="navbar-nav ">
            <li class="nav-item ">
                <a class="nav-link active " href="# ">Home</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link " href="users.php">Manage Users</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="moviesrequest.php">Movies Request</a>
            </li>
            <li class="nav-item dropdown dropleft">
                <a class="nav-link" href="#" data-toggle="dropdown">
                    <img src="../image/default-user.png" style="width:30px; border-radius:50%;" alt="logo ">
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item disabled" style="color:silver; text-transform:lowercase;" href="#"><?php echo $_SESSION['username'] ?></a>
                    <a class="dropdown-item" style="color:#fff;" href="../controller/logout.php">Log Out</a>
                </div>
            </li>
        </ul>
    </nav>

    <header>
        <div class="container body ">
            <center>
                <div class=" inner-body ">
                    <h1 class="title ">Welcome to
                        <span style="color: #6AC045;">Admin Panel</span>
                    </h1>
                    <p style="color: white" class="content">
                        Welcome to
                        <span style="font-weight:bold; color: #6AC045">MoviesInfo</span> | It is site where you can view information about your favourite movie. MoviesInfo
                        are best known for the excellent
                    </p>
                </div>
                <div class="container">
                    <a href="moviesrequest.php" class="btn-main btn-main-primary">
                        Movies Request List
                    </a>
                    <a href="users.php" class="btn-main ">
                        Manage Users
                    </a>
                </div>

            </center>
        </div>
    </header>

    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>

</html>