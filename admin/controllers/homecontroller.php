<?php
require_once __DIR__ . '/../models/standings.php';

class HomeController
{
    public function index()
    {
        $standingModel = new Standings();
        $standings =  $standingModel->getStandings();

        $teamModel = new Teams();
        $teams =  $teamModel->getTeams();
        require_once __DIR__ . "/../views/home.php";
    }
}
