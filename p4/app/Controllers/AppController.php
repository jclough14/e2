<?php
namespace App\Controllers;

class AppController extends Controller
{
    public function index()
    {
        return $this->app->view('index');
    }

    public function results()
    {
        $results = $this->app->db()->all('results');

        return $this->app->view('results', ['results' => $results]);
    }
    public function result()
    {
        $resultId = $this->app->param('id');
        
        $result = $this->app->db()->findByID('results', $resultId);
        
        if(is_null($result)) {
            return $this->app->redirect('results', ['gameNotFound' => true]);
        }
        return $this->app->view('result', ['result' => $result]);
    }

    public function newGame()
    {   
        $this->app->validate([
            'name' => 'required',
            'player_shape' => 'required',
        ]); 
    
        # Selecting Computer Shape

        $cpu_shapes = ['Rock', 'Paper', 'Scissors'];

        $cpu_shape = $cpu_shapes[rand(0,2)];

        // Determining Winner

        $player_roll = $this->app->input('player_shape');

        # Determining winner - ternary operator was not my friend, so I kept it somewhat long.
        # Reduced lines from P2 by only calculating player win conditions, not both player and
        if ($player_roll == $cpu_shape) {
            $winner  = "It's a tie!";
        } elseif (($player_roll == 'Rock' and $cpu_shape == 'Scissors') ||
            ($player_roll == 'Paper' and $cpu_shape == 'Rock') ||
            ($player_roll == 'Scissors' and $cpu_shape == 'Paper'))
            { $winner = $this->app->input('name');    
        } else {
            $winner = "Computer";
        } 
    
        $data = [
            'name' => $this->app->input('name'),
            'player_shape' => $this->app->input('player_shape'),
            'cpu_shape' => $cpu_shape,
            'winner' => $winner,
        ];

        # Pass to database and game result page
        
        $this->app->db()->insert('results', $data);
            
        $this->app->redirect(
                '/game',
                [
                'name'=>$data['name'],
                'player_shape'=>$data['player_shape'],
                'cpu_shape'=>$data['cpu_shape'],
                'winner'=>$data['winner'],
                ]);   
    }

   public function Game()
    {   
        $name = $this->app->old('name', null);
        $winner = $this->app->old('winner', null);
        $player_shape = $this->app->old('player_shape', null);
        $cpu_shape = $this->app->old('cpu_shape', null);
    
        return $this->app->view('game', [
            'name' => $name, 
            'winner' =>$winner, 
            'player_shape' => $player_shape, 
            'cpu_shape' => $cpu_shape,
            ]);
    }
}


