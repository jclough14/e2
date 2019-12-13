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
        
        dump($result);
        
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

        $data = [
            'name' => $this->app->input('name'),
            'player_shape' => $this->app->input('player_shape'),
        ];

        $this->app->db()->insert('results', $data);

        $this->app->redirect('/game', ['name' =>$data['name']]);
    }

    public function Game()
    {   
        $name = $this->app->old('name', null);

        return $this->app->view('game', ['name' => $name]);
    }

}

