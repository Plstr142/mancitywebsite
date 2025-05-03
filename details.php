<?php

require_once 'config.php';

if (isset($_POST['submit'])) {
    $playerName = $_POST['search'];

    $sql = "SELECT * FROM players WHERE player_name = :player_name";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['player_name' => $playerName]);
    $row = $stmt->fetch();
} else {
    header("location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />

    <link rel="stylesheet" href="details_style.css">

</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-5 mx-auto">
                <div class="card show text-centers">
                    <div class="card-header">
                        <h1><?= $row['player_name'] ?></h1>
                    </div>
                    <div class="card-body">
                        <h3>Player Number: <?= $row['player_number'] ?></h3>
                        <h3>Player Position: <?= $row['player_position'] ?></h3>
                        <h3>Club: <?= $row['club'] ?></h3>
                        <h3>Nationality: <?= $row['nationality'] ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>