<?php
namespace App\Controllers;

class GameController extends Controller
{
    /**
     *
     */
    public function game()
    {
        return $this->app->view('game');
    }
}
