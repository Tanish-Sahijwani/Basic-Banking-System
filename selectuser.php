<!DOCTYPE html>
<html lang="en">
 
<head>
  <title>Basic Banking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
<div class="navbar navbar-fixed-top"style="background-color:red">
        <div class="container">
            <div class="navbar-header">
                <a class="myBank"style="color:white;margin:20px" href="homepage.php">TSF Bank</a>
                </button>
            </div>
            
        </div>
    </div>
  <form action="userdetail.php" method="post">
    <div class="view">
      <div class="container">
        <div class="page-header">
          <h2 style="color:red" class="userInformation">User information</h2>
        </div>
        <?php
        $conn = mysqli_connect('localhost', 'root', '');
        $query = 'SELECT * FROM bank.customers';
        $result = mysqli_query($conn, $query);
        echo '<table  class="table table-hover  text-center "style="color:white"><tr><th>Name</th><th>Email</th><th>Balance</th></tr>';
        while ($row = mysqli_fetch_array($result)) {
          echo "<tr><td> " . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['balance'] . "</td></tr>";
        }
        echo "</table>";
        ?>
        <div class="view">
          <table cellspacing=50px style="position: relative">
            <tr>
              <td>
                <h2 class='redText'>Select to View </h2>
              </td>
              <td>
                <select name="name" id="uname">
                  <option>-Select-</option>

                  <option value="Tanish">Tanish</option>
                  <option value="Vinay">Vinay</option>
                  <option value="Bhavesh">Bhavesh</option>
                  <option value="Krish">Krish</option>
                  <option value="Neeraj">Neeraj</option>
                  <option value="Priya">Priya</option>
                  <option value="Divesh">Divesh</option>
                  <option value="Aakash">Aakash</option>
                  <option value="Himesh">Himesh</option>
                  <option value="Dinesh">Dinesh</option>

                </select>
              </td>
              <td>
                <div class="text-center"><br>
                  <button class="btn btn-danger btn-md mr-3 mb-3" type="submit" style="background-color:red;color:white" >View it</button>
                  <a href="homepage.php" class="btn btn-danger btn-md ml-3 mb-3" role="button" style="background-color:red;color:white" ><i class="fa fa-close"></i> Back </a>
                </div>
              </td>
            </tr>

          </table>
        </div>
      </div>
    </div>
    <br>

  </form>
</body>

</html>