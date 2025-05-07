<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>standing premier league</title>
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
</body>

</html>