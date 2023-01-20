<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
  header("Location: index.php");
}
if (isset($_POST["submit"])) {
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE usernameemail = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if (mysqli_num_rows($result) > 0) {
    if ($password == $row['password']) {
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    } else {
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  } else {
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <style>
    body {
      background-image: url("https://sageuniversity.edu.in/assets/images/campus/ele2.jpg");
      background-size: cover;
      margin: 50px;
      padding: 50px;
      color: lavender;
      font-style: bold;
    }

    div {
      margin: 5px;
      padding: 5px;
      color: #ffff;
      font-family: cursive;
      border-radius: 1.25rem;
    }
  </style>
</head>

<body>

  <body>
    <div>
      <h1>SPS</h1>
      <h2>(SAGE PASS SOLUTION)</h2>
      <h2> LOG IN</h2>

    </div>
    <div>
      <form action=" " autocomplete="off" method="post">

        <label for="usernameemail">USERNAME-</label>
        <input type="text" id="usernameemail" name="usernameemail" placeholder="enter scholar no/User name" required><br><br>
        <label for="password">PASSWORD-</label>
        <input type="password" id="password" name="password" placeholder="enter password" required><br><br>
        <button type="submit" name="submit">Login</button>

      </form>
    </div>
  </body>

</html>