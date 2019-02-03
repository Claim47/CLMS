<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    
    <link rel="stylesheet" href="css/rankCard.css">
    <link rel="stylesheet" href="template/css/style.css">
    
  
</head>
<body>
    <nav class="navbar ">
           
        <span class="open-slide ">
            <a href="#" onclick="openSlideMenu()">
                <svg width="30" height="30">
                    <path d="M0,5 30,5" stroke ="#fff" stroke-width ="3"/>
                    <path d="M0,14 30,14" stroke ="#fff" stroke-width ="3"/>
                    <path d="M0,23 30,23" stroke ="#fff" stroke-width ="3"/>
                    
                </svg>
            </a>
        </span>
    

        <ul class="navbar-nav">
               
             <li>   <a href="#">Home</a></li>     
             <li>   <a href="#">Scoring</a></li>   
             <li>   <a href="#">Live Games</a></li>   
             <li>   <a href="#">Schedule</a></li>   
             <li>   <a href="#">Results</a></li>   
             <li>   <a href="#">Stats</a></li>   
             <li>   <a href="login.php">Team Admin</a></li>   
             <li>   <a href="login.php">Club Admin</a></li>   
             <li>   <a href="login.php">League Admin</a></li>   
        </ul>
    </nav>
    <div id="side-menu" class="side-nav">
        <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
        <a href="#">Home</a>
        <a href="#">Scoring</a>
        <a href="#">Live Games</a>
        <a href="#">Schedule</a>
        <a href="#">Results</a>
        <a href="#">Stats</a>
         <span class="divider"></span>
        <a href="login.php">Team Admin</a>
        <a href="login.php">Club Admin</a>
        <a href="login.php">League Admin</a>
        
    </div>
 
    <div id ="logo-container">

            <img src="assets/Banner.jpg" alt="Cricket League Management System">
    </div>