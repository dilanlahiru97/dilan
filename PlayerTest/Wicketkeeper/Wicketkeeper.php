<?php
include("conn.php");
mysqli_select_db($conn,"lplsystem");

// Create batsman table if it doesn't exist
$sql4= "CREATE TABLE IF NOT EXISTS wicketkeeper (
    player_keeping_id INT PRIMARY KEY,
    b_style VARCHAR(255),
    lpl_nom INT(6),
    t20_nom INT(6),
    runs INT(6),
    b_average FLOAT,
    strike_rate FLOAT,
    high_score INT(6),
    not_out int(6),
    stumps INT(6),
    catch INT(6),
    sold INT NULL,
    based_price INT
)";

mysqli_query($conn, $sql4);

if (isset($_POST['submit'])) {
    //$player_keeping_id =$_POST['player_keeping_id'];
    $b_style = $_POST['b_style'];
    $lpl_nom = $_POST['lpl_nom'];
    $t20_nom = $_POST['t20_nom'];
    $runs = $_POST['runs'];
    $b_average = $_POST['b_average'];
    $high_score = $_POST['high_score'];
    $not_out = $_POST['not_out'];
    $stumps = $_POST['stumps'];
    $catch = $_POST['catch'];
    $sold = $_POST['sold'];
    $based_price = $_POST['based_price'];

     $sql5 = "INSERT INTO wicketkeeper(`b_style`, `lpl_nom`, `t20_nom`, `runs`, `b_average`, `strike_rate`, `high_score`, `not_out`, `stumps`, `catch`, `sold`, `based_price`) VALUES 
    ('$b_style','$lpl_nom','$t20_nom','$runs','$b_average','$strike_rate','$high_score','$not_out','$stumps','$catch','$sold','$based_price')";

    mysqli_query($conn, $sql5);  
    
}
mysqli_close($conn);



?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <title>Wicketkeeper</title>
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