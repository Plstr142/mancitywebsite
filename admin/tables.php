<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>standing premier league</title>

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />

    <!-- remix icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css">

    <!-- swiper css -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" href="assets/css/swiper-bundle.min.css"> -->

    <link rel="stylesheet" href="assets/css/style.css">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>

<?php

require_once __DIR__ . "/controllers/homecontroller.php";
$controller = new HomeController();
$controller->index();

// require_once __DIR__ . "/controllers/homecontroller.php";
// $controller = new HomeController_teams();

?>





    <!-- <h1 data-bind="text: title"></h1>
    การใช้ data-bind ที่จะ bind title ไปยัง h1

    <table>
        <thead>
            <tr>
                <th>Season</th>
                <th>Standing</th>
                <th>Match Played</th>
                <th>Wins</th>
                <th>Draws</th>
                <th>Loses</th>
                <th>Goals For</th>
                <th>Goals Against</th>
                <th>Goal Difference</th>
                <th>Points</th>
                <th>Form</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td data-bind="text: season">asdsa</td>
                <td data-bind="text: standing">asdsa</td>
                <td data-bind="text: match_played">sadsad</td>
                <td data-bind="text: win">asds</td>
                <td data-bind="text: draw">sad</td>
                <td data-bind="text: lose">sad</td>
                <td data-bind="text: goals_for">asd</td>
                <td data-bind="text: goals_against">sadsa</td>
                <td data-bind="text: goal_difference">asdsa</td>
                <td data-bind="text: points">sadsad</td>
                <td data-bind="text: form">asdsad</td>
            </tr>
        </tbody>
    </table> -->

    <?php include 'footer.php'; ?>
</body>

</html>