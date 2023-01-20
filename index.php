<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>


<html>
<head>
  <title>Home Page</title>
  <style>
    body {
      background-image: url("https://lh5.googleusercontent.com/p/AF1QipPqVcxYEDvzET9nEy66hpbp65E7oecwsO5MtAOT=w750-h813-p-k-no");
      height: 500px;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
      text-align: centre;
    }
    
    a {
      background-color: white;
    }
    
    .top {
      display: flex;
      justify-content: space-evenly;
    }
    
    #home {
      border: 2px solid black;
      border-radius: 10px;
      padding: 10px;
    }
    
    #bus {
      border: 2px solid black;
      border-radius: 10px;
      padding: 10px;
    }
    
    #library {
      border: 2px solid black;
      border-radius: 10px;
      padding: 10px;
    }
    
    #hostel {
      border: 2px solid black;
      border-radius: 10px;
      padding: 10px;
    }
    
    #event {
      border: 2px solid black;
      border-radius: 10px;
      padding: 10px;
    }
    </style>
</head>

<body>
  <div class="top">
    
    
    <a style="text-decoration: none;" href="bus_pass.php" id="bus">Bus Pass</a>
    <a style="text-decoration: none;" href="library_pass.php" id="library">Library Pass</a>
    <a style="text-decoration: none;" href="event_pass.php" id="event">Event Pass</a>
    <a style="text-decoration: none;" href="about_us.php" id="event">About Us</a>
    <a style="text-decoration: none;" href="logout.php" id="event">Log Out</a>
    <h3>Scoler No : <?php echo $row["usernameemail"]; ?></h3>
    
  </div>
</body>