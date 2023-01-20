<?php

require 'config.php';

if (isset($_POST['submit'])) {

    if (!$conn) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $receipt = $_POST['myfile'];


    $sql = "INSERT INTO `reglog`.`event_pass` ( `name`, `gender`, `age`, `email`, `contact`, `receipt`) VALUES ( '$name', '$gender', '$age', '$email', '$phone', '$receipt');";

    if ($conn->query($sql) == true) {
    } else {
        echo "ERROR: $sql <br> $conn->error";
    }
}
?>



<!DOCTYPE html>
<html>

<head>
    <title>Upload your fee recitpt</title>
    <style>
        body {
            background-image: url("https://ahaslides.com/wp-content/uploads/2021/12/Year-End-Review-1-1024x576.png");
            background-size: cover;

            text-align: centre;

        }

        #a {

            padding: 10px;
            margin: 15px;
            border-radius: 17px;
            display: block;
            width: 10%;
            float: right;
            color: black;
            font-size: x-large;

        }

        a {
            background-color: skyblue;
            align-items: right;

        }
    </style>
</head>

<body>
    <p align="right">
    <a href="index.php"><input type="button" name="btn" value="BACK"></a>
    <div class="bg">
        <h1>Enter details for event pass</h1>
        <form action="" method="post">

            <label for="Name" class="bold"> Name</label>
            <input type="text" name="name" id="name" placeholder="enter your name" required><br><br>
            <label for="Gender" class="bold">Gender</label>
            <select id="gender" name="gender" required>
                <option>select gender</option>
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="other">other</option>
            </select><br><br>
            <label for="Age" class="bold">Age</label>
            <input type="text" name="age" id="age" placeholder="enter your age" required><br><br>
            <label for="Email" class="bold">Email</label>
            <input type="text" name="email" id="email" placeholder="enter your email" required><br><br>
            <label for="Mobile No" class="bold">Mobile No</label>

            <input type="text" name="phone" id="phone" placeholder="enter your number" required><br><br>
            <label for="Payment receipt" class="bold">Payment receipt</label>
            <input type="file" id="myfile" name="myfile" required><br><br>

            <button class="center" name="submit" type="submit" onclick="showerr()" id="btn">SUBMIT</button>
        </form>
    </div>
    <script>
        function showerr() {
            alert("Your Form is Submited");
        }
    </script>
</body>

</html>