<?php
include('Team.php');

if (isset($_GET['teamName'])) {
    $teamName = $_GET['teamName'];
    $homeTeam = new Team($teamName);

    for ($i = 1; $i <= 3; $i++) {
        if (isset($_GET["home{$i}"], $_GET["away{$i}"])) {
            $homeScore = (int)$_GET["home{$i}"];
            $awayScore = (int)$_GET["away{$i}"];
            $homeTeam->finalScore($homeScore, $awayScore);
        }
    }

    $goalAverage = $homeTeam->getGoalAverage();
    echo "Goal Average: " . $goalAverage;
} else {
    echo "Team name not provided.";
}
?>
