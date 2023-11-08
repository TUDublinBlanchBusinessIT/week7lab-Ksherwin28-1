<?php
class Team {
    private $name = "";
    private $totalPoints = 0;
    private $totalGames = 0;
    private $totalGoals = 0;

    public function __construct($name) {
        $this->name = $name;
    }

    public function finalScore($homeTeamScore, $opposingTeamScore) {
        $this->totalGames++;
        $this->totalGoals += $homeTeamScore + $opposingTeamScore;
    
        if ($homeTeamScore > $opposingTeamScore) {
            $this->totalPoints += 3;
        } elseif ($homeTeamScore == $opposingTeamScore) {
            $this->totalPoints += 1;
        }
    }
    

    public function getGoalAverage() {
        if ($this->totalGames == 0) {
            return 0.0;
        } else {
            return $this->totalGoals / $this->totalGames;
        }
    }
    
}
?>
