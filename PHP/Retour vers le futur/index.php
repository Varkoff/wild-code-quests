<?php
$presentTime = new DateTime();
$presentTime->setDate(2015, 10, 21);
$presentTime->setTime( 16,6, 0);

$destinationTime = new DateTime();
$destinationTime->setDate(2015, 10, 21);
$destinationTime->setTime( 16,29, 0);

?>


    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>
    <body>
    <div class="container">
    <table class="table">
        <thead>
        <th>Day</th>
        <th>Month</th>
        <th>Day</th>
        <th>Year</th>
        <th>Hour</th>
        <th>Min</th>
        </thead>
        <tr>
            <?php
            echo"<td>Present time</td>";
            echo"<td>".$presentTime->format('Y')."</td>";
            echo"<td>".$presentTime->format('m')."</td>";
            echo"<td>".$presentTime->format('d')."</td>";
            echo"<td>".$presentTime->format('h A')."</td>";
            echo"<td>".$presentTime->format('i')."</td>";
            ?>
        </tr><tr>
            <?php
            echo"<td>Destination time</td>";
            echo"<td>".$destinationTime->format('Y')."</td>";
            echo"<td>".$destinationTime->format('m')."</td>";
            echo"<td>".$destinationTime->format('d')."</td>";
            echo"<td>".$destinationTime->format('h A')."</td>";
            echo"<td>".$destinationTime->format('i')."</td>";
            ?>
        </tr>
    </table>

        <h2>Intervalle de temps :</h2>
        <?php
        $intervalTime = $presentTime->diff($destinationTime, 0);
        echo $intervalTime->format('%i minutes en %R%');
        ?>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
<?php


