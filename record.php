<!DOCTYPE html>
<html lang="en">

<head>
  <title>Basic Banking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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

<DIV></DIV>

<body>
  <div class="navbar  navbar-fixed-top"style="background-color:red" >
    <div class="container">
      <div class="navbar-header">

        <a class="myBank" style="color:white;margin:20px" href="homepage.php">TSF Bank</a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

        </button>
      </div>
      <div class="collapse navbar-collapse" id="myN avbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a class="button" href="selectuser.php">View All Customers</a></li>
          <li><a class="button" href="record.php">Transaction History</a></li>
        </ul>
      </div>
    </div>
  </div>
  <h2 class="redText text-center">Transaction Records</h2>
  <?php
  $conn = mysqli_connect('localhost', 'root', '');
  $query = 'SELECT * FROM bank.history';
  $result = mysqli_query($conn, $query);
  echo '<table  class="table table-hover  text-center" style="color:white"><tr><th>Sender</th><th>Receiver</th><th>Amount</th></tr>';
  while ($row = mysqli_fetch_array($result)) {
    echo "<tr><td>" . $row['Sender'] . "</td><td>" . $row['Receiver'] . "</td><td>" . $row['Amt'] . "</td></tr>";
  }
  echo "</table>";
  ?>
  <div class="d-flex justify-content-center">
    <a href="homepage.php" class="btn btn-lg ml-3 mb-3" role="button" style="background-color:red;color:white" ><i class="fa fa-close"></i> Home </a>
    <a href="selectuser.php" class="btn btn-lg ml-3 mb-3" role="button" style="background-color:red;color:white" ><i class="fa fa-close"></i> View All Customers </a>
   
  </div>
</body>