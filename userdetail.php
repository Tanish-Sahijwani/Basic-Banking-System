<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userdetail</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    body{
        background-color: black;
    }
</style>
</head>

<body>
    <div class="navbar navbar-fixed-top"style="background-color:red">
        <div class="container">
            <div class="navbar-header">
                <a class="myBank" style="color:white;margin:20px" href="homepage.php">TSF Bank</a>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="button" href="selectuser.php">View All Customers</a></li>
                    <li><a class="button" href="record.php">Transaction History</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=container>
    <h2 style='color:red' >User Details</h2>
    <form action="transfer.php" method="POST">
        <?php
        session_start();
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $name = $_POST['name'];
            $_SESSION["name"] = $name;
            $conn = mysqli_connect('localhost', 'root', '');
            $query = 'SELECT  * FROM bank.customers  WHERE name = "' . $name . '" ';
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) {
                echo "<div style='color:white' ><b>Name:" . $row['name'] . "</div> </b>";
                echo "<div style='color:white' ><b>Email:" . $row['email'] . "</div> </b>";
                echo "<div style='color:white'><b>Balance:" . $row['balance'] . "</div> </b>";
                echo "<div style='color:white'><b>Contact:" . $row['contact'] . "</div> </b>";
            }
        }
        ?>
        <a href="selectuser.php" class="btn btn-danger btn-md" role="button" style="background-color:red;color:white" ><i class="fa fa-close"></i>Back</a>

        <a href="transfer.php" class="btn  btn-md" role="button" style="background-color:red;color:white" ><i class="fa fa-close"></i> Transfer to </a>

        <a href="homepage.php" class="btn  btn-md text-center" role="button" style="background-color:red;color:white" ><i class="fa fa-close"></i> Home </a>
       
      
        </div>
    </form>
</body>

</html>