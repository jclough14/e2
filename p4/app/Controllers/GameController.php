<?php
namespace App\Controllers;

class GameController extends Controller
{
    public function newGame()
    {   
        $this->app->validate([
            'name' => 'required',
            'player_shape' => 'required',
        ]); 

        $data = [
            'name' => $this->app->input('name'),
            'player_shape' => $this->app->input('player_shape'),
        ];

        $this->app->db()->insert('results', $data);

        $this->app->redirect('/', ['name' =>$data['name']]);

       // return $this->app->view('game');
    }
}
