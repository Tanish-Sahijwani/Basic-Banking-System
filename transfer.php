<?php
session_start();
$name=$_SESSION["name"] ;
?>
<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>choose user</title>

    <link href="login.css" rel="stylesheet" type="text/css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <div class="navbar navbar-fixed-top" style="background-color:red">
        <div class="container">
            <div class="navbar-header">

                <a class="myBank" style="color:white;margin:20px" href="homepage.php">TSF Bank</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

                </button>
            </div>

        </div>
    </div>


    <div class="container">
        <div style="margin-top: 75px;">
            <div>
                <h2 class="redText">
                    Transfer Details
                </h2>
            </div>

            <form action="posttransfer.php" method="POST">
                <div class='form-group whiteText'><label for='from'>From :</label>
                    <select class='form-control' id='from' name='from'>
                        <option selected><?php
                        echo "{$name}";
                        ?></option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="to" class="whiteText">To :</label>
                    <select class="form-control " id="to" name="to">
                        <option>Tanish</option>
                        <option>Vinay</option>
                        <option>Bhavesh</option>
                        <option>Krish</option>
                        <option>Neeraj</option>
                        <option>Priya</option>
                        <option>Divesh</option>
                        <option>Aakash</option>
                        <option>Himesh</option>
                        <option>Dinesh</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="amt" class="whiteText">Enter amount to transfer :</label>
                    <input type="text" class="form-control" id="amt" pattern="^[0-9]*$" required="true" name="amt">
                    <br>
                </div>

                <div class="form-group">
                    <button id="transfer" type="submit" name="submit" class="btn redButton form-control">Trans</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>

</html>