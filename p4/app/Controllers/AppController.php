<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {
        return $this->app->view('index');
    }

    public function results()
    {
        $results = $this->app->db()->all('results');

        return $this->app->view('results', ['results' => $results]);
    }
}
