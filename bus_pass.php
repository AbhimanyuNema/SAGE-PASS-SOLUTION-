<?php

require 'config.php';
// if (!empty($_SESSION["id"])) {
//     header("Location: index.php");
// }
if (isset($_POST['submit'])) {

    if (!$conn) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    $name = $_POST['student'];
    $school = $_POST['school'];
    $course = $_POST['course'];
    $blood = $_POST['blood'];
    $year = $_POST['year'];
    $scholar = $_POST['scholar'];
    $enrollment = $_POST['enrollment'];
    $contact = $_POST['contact'];
    $receipt = $_POST['receipt'];
    $photo = $_POST['photo'];
    $sql = "INSERT INTO `reglog`.`bus_pass` (`name`, `school`, `course`, `blood`, `year`, `scholar`, `enrollment`,`contact`,`receipt`,`photo`) VALUES ('$name', '$school', '$course', '$blood', '$year', '$scholar','$enrollment','$contact','$receipt','$photo');";

    if ($conn->query($sql) == true) {
    } else {
        echo "ERROR: $sql <br> $conn->error";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url("https://lh5.googleusercontent.com/p/AF1QipOUc7VYjlsdlp1fQ8YLiYPGmY39YVMA8mpwH_q8=w750-h606-p-k-no");
            position: relative;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            margin: auto;
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

       
        form input {
            position: relative;
            width: 50%;
            background: rgb(255, 255, 255);
            padding: 10px 8px;
            border-radius: 8px;
            box-shadow: 15px;
            border-color: rgb(86, 86, 86);
        }

        #btn {
            /* position: relative; */
            width: 10%;
            background: white;
            padding: 10px;
            border-radius: 8px;
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

        .bold {
            color: black;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;
            font-size: larger;
        }
         input b{
            background-color:transparent;
            width: 40%;
           padding:50px;
            margin: 50px;
            text-align: right;
        }
        
    </style>
</head>

<body>
    
    <div id="a" >
        <a href="index.php"><input type="button" name="btn" value="BACK"></a>
        
       </div>
            
        <div>
        <form action="" method="POST">
            <h1>Enter Your Details For Bus Pass</h1><br>
        
           

            <label for="student" class="bold">Student Name</label><br>
            <input type="text" id="student" name="student" placeholder="Student name" required><br><br>

            <label for="school" class="bold">School Name</label><br>
            <input type="text" id="school" name="school" placeholder="school name" required><br><br>

            <label for="course" class="bold">Select Course</label><br>
            <select id="course" name="course" required>
                <option >---Enter Course---</option>
                <option value="BCA">BCA</opdstion>
                <option value="BBA">BBA</option>
                <option value="B.Tech">B.Tech</option>
                <option value="MBA">MBA</option>
                <option value="MCA">MCA</option>
                <option value="M.Tech">M.Tech</option>
            </select><br><br>

            <label for="blood" class="bold">Select Blood Group:</label><br>
            <!-- <label for="fname">Enter Blood Group:</label><br> -->
            <select id="blood" name="blood" required>
                <option  >---Select blood group---</option><br>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="Ab+">AB+</option>
                <option value="Ab-">AB-</option>
                <option value="o">O</option>
            </select>
            <br><br>

            <label for="year" class="bold">Year</label><br>
            <input type="text" id="year" name="year" placeholder="year" required><br><br>

            <label for="scholar" class="bold">Scholar NO</label><br>
            <input type="text" id="scholar" name="scholar" placeholder="enter SCHOLAR NO" required><br><br>

            <label for="enrollment" class="bold" >Enrollment No</label><br>
            <input type="text" name="enrollment" id="enrollment" placeholder="enter enrollment No" required><br><br>

            <label for="contact" class="bold">Contact Number</label><br>
            <input type="text" id="contact" name="contact" placeholder="Enter Contact Number" required><br><br>

            <label for="receipt" class="bold">Fee Receipt :</label><br>
            <input type="file" id="receipt" name="receipt"><br><br>

            <label for="photo" class="bold">Upload Your Photo :</labeL><br>
            <input type="file" id="photo" name="photo"><br><br>

            <button class="center" name="submit" type="submit" onclick="showerr()" id="btn">SUBMIT</button>

        </form>
    </div>
    <script>
        function showerr(){
            alert("Your Form is Submited");
        }
    </script>
</body>

</html>
