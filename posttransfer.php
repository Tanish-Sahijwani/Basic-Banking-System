<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>posttransfer</title>
</head>

<body>
    <?php

        if ($_SERVER["REQUEST_METHOD"] == 'POST' ) {
            $from = $_POST['from'];
            $to = $_POST['to'];
            if (strcmp($from, $to) != 0) {
                $amt = $_POST['amt'];
                $currbal;
                $conn = mysqli_connect('localhost', 'root', '', 'bank');
                $query = 'SELECT balance FROM customers WHERE name = "' . $from . '"';
                $currentbalsend =  mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($currentbalsend)) {
                    $currbalsend = $row['balance'];
                }
                

                $queryr = 'SELECT balance FROM customers WHERE name = "' . $to . '"';
                $currentbalrecv =  mysqli_query($conn, $queryr);
                while ($row = mysqli_fetch_array($currentbalrecv)) {
                    $currbalrecv = $row['balance'];
                }

                $low = $currbalsend - $amt;
                $up = $currbalrecv + $amt;

                $query1 = "UPDATE customers SET balance = " . $low . " WHERE name = '" . $from . "'";

                $addbal = mysqli_query($conn, $query1);

                $query5 = "UPDATE customers SET balance = " . $up . " WHERE name = '" . $to . "'";

                $addbal1 = mysqli_query($conn, $query5);
                $query2 = "INSERT INTO history (`Sender`, `Receiver`, `Amt`) VALUES ('" . $from . "', '" . $to . "', '" . $amt . "');";

                $records = mysqli_query($conn, $query2);

                if (!$records) {
                    echo mysqli_error($conn);
                }
                echo "<script>
                alert('Transcation done Sucessfully');
                window.location.href = 'record.php';
                </script>";
            } else {
                echo "<script>
                alert('PLease change the Receiver');
                window.location.href = 'transfer.php';
                </script>";
            }
        
    }
    ?>
</body>

</html>