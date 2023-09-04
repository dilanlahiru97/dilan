<?php
include("conn.php");
mysqli_select_db($conn,"lplsystem");

// Create bowler table if it doesn't exist
$sql6= "CREATE TABLE IF NOT EXISTS bowler (
    player_bowlling_id INT PRIMARY KEY,
    bowl_style VARCHAR(255),
    lpl_nom INT(6),
    t20_nom INT(6),
    wickets INT(6),
    bowl_average FLOAT,
    economy FLOAT,
    best_bowl VARCHAR(100),
    w5 INT,
    sold INT NULL,
    besed_price INT 
)";

mysqli_query($conn, $sql6);


if (isset($_POST['submit'])) {
    $bowl_style = $_POST['bowl_style'];
    $lpl_nom = $_POST['lpl_nom'];
    $t20_nom = $_POST['t20_nom'];
    $wickets = $_POST['wickets'];
    $bowl_average = $_POST['bowl_average'];
    $economy = $_POST['economy'];
    $best_bowl = $_POST['best_bowl'];
    $w5 = $_POST['w5'];
    $sold = $_POST['sold'];
    $besed_price=$_POST['besed_price'];
    $submit=$_POST['submit'];

    
    $sql7="INSERT INTO `bowler`(`bowl_style`, `lpl_nom`, `t20_nom`, `wickets`, `bowl_average`, `economy`, `best_bowl`, `w5`, `sold`, `besed_price`) VALUES
     ('$bowl_style','$lpl_nom','$t20_nom','$wickets','$bowl_average','$economy','$best_bowl','$w5','$sold','$besed_price')";
    mysqli_query($conn, $sql7);
}

mysqli_close($conn);


?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <title>Bowler</title>
    </head>
    <body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: lightblue;width:100%;">
        LPL - LANKA PREMIER LEAGUE
    </nav>

    <div class="container mt-4">
    <!-- You should edit start here-->


    
     <!-- You should edit end here-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
    </html>