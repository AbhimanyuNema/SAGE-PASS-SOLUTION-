<?php

require 'config.php';

if (isset($_POST['submit'])) {

    if (!$conn) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    $name = $_POST['student'];
    $school = $_POST['school'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $scholar = $_POST['scholar'];
    $enrollment = $_POST['enrollment'];
    $contact = $_POST['contact'];
    $receipt = $_POST['receipt'];

    $sql = "INSERT INTO `reglog`.`lib_pass` (`name`, `school`, `course`, `year`, `scholar`, `enrollment`, `contact`, `receipt`) VALUES ('$name', '$school', '$course', '$year', '$scholar','$enrollment','$contact','$receipt');";

    if ($conn->query($sql) == true) {
    } else {
        echo "ERROR: $sql <br> $conn->error";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
        body {
            background-image: url("https://images.static-collegedunia.com/public/college_data/images/appImage/1578548098sage.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            text-align: centre;
            font-size: x-large;
            font-weight: bold;
        }
        #a{
       
       padding:10px;
       margin:15px;
       border-radius: 17px;
       display: block;
       width: 10%;
       float: right;
       color:black;
       font-size: x-large;
       
       }

        a {
            background-color: rgb(245, 248, 249);
        }

        /*div {
            text-align: center;
            margin: auto;
            padding: 70px;
            width: 70%;
            margin-bottom: 1em;
        }*/

        form input {
            position: relative;
            width: 50%;
            background: rgb(255, 255, 255);
            padding: 10px 5px;
            border-radius: 8px;
            box-shadow: 15px;
            border-color: rgb(86, 86, 86);
        }

        #btn {
            position: relative;
            width: 10%;
            background: white;
            padding: 10px 5px;
            border-radius: 12px;
            box-shadow: 15px;
            border-color: rgb(173, 173, 173);
        }

        select {
            position: relative;
            width: 50%;
            background: rgb(255, 255, 255);
            border-color: rgb(255, 255, 255);
            padding: 10px 5px;
            border-radius: 8px;
            box-shadow: 15px;

        }
    </style>
    <style>
        body {
            background-image: url("https://wallpaperaccess.com/full/253338.jpg");
            background-size: cover;

            text-align: centre;
            color: white;

        }

        a {
            background-color: white;
        }

        .center {
            padding-left: 28vw;
        }
    </style>
</head>

<body>

    <div class="bg-body">
        <p align="right">
            <input type="button" value="Back" />

        <form action="" method="post">

            <h1>Enter Your Details For Library Pass</h1>

            <label for="student">Student name:</label><br>
            <input type="text" id="student" name="student" placeholder="Student name" required><br>

            <label for="school">School name:</label><br>
            <input type="text" id="school" name="school" placeholder="school name" required><br>

            <label for="fname">Select course:</label><br>
            <select id="course" name="course" required><br>
                <option>---->Enter Course<---- </option>
                <option value="BCA">BCA</option>
                <option value="BBA">BBA</option>
                <option value="B.Tech">B.Tech</option>
                <option value="MBA">MBA</option>
                <option value="MCA">MCA</option>
                <option value="M.Tech">M.Tech</option>
            </select><br>

            <label for="year">year:</label><br>
            <input type="text" id="year" name="year" placeholder="year" required><br>

            <label for="scholar" >SCHOLAR NO :</label><br>
            <input type="text" id="scholar" name="scholar" placeholder="enter SCHOLAR NO" required><br>

            <label for="enrollment">Enrollment No :</label><br>
            <input type="text" name="enrollment" id="enrollment" placeholder="enter enrollment No" required><br>

            <label for="contact"> Enter mob Number :</label><br>
            <input type="text" id="contact" name="contact" placeholder="Enter Mob No" required><br>

            <label for="receipt">Fee Recipt :</label><br> 
            <input type="file" id="receipt" name="receipt" required><br><br>

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