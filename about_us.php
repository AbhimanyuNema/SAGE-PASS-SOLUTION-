<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background-image: url(https://lh5.googleusercontent.com/p/AF1QipNWWW9A4k0orSoZ5IDGK2s9-ry_4seSlf0K0y-5=w750-h813-p-k-no);
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
        }

        .container {
            padding: 0 16px;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: black;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>

<body>

    <div class="about-section">
        <a href="index.html"><img src="/img/icon-home.png" alt=""></a>
        <h1>About Us Page</h1>
        <p>Solutions of pass.</p>
        <p></p>
    </div>

    <h2 style="text-align:center">Our Team</h2>
    <div class="row">
        <div class="column">
            <div class="card">

                <div class="container">
                    <h2>Abhimanyu Nema</h2>
                    <p class="title">Frontend Devloper </p>
                    <p>Technologies Used-HTML and CSS</p>
                    <p>abhinema09.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">

                <div class="container">
                    <h2>Hardik </h2>
                    <p class="title">Frontend Devloper</p>
                    <p>Technologies Used-HTML and CSS</p>
                    <p>hrk.khrde@gmail.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">

                <div class="container">
                    <h2>Abhay Gupta</h2>
                    <p class="title">Backend</p>
                    <p>Technologies : working on php using MySQL database</p>
                    <p> Gmail : ab04012003@gmail.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>