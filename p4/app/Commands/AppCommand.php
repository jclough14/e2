<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function migrate()
    {
        $this->app->db()->createTable('results', [
            'name' => 'text',
            'player_shape' => 'text',
            'cpu_shape' => 'text',
            'winner' => 'text',
            'time'=> 'timestamp'
            ]);
        dump('Migration complete!');
    }
    
    public function seed()
    {
        # Instantiate a new instance of the Faker\Factory class
        $faker = \Faker\Factory::create();

        # Use a loop to create 10 games
        for ($i = 0; $i < 10; $i++) {

        # Set up a game
        $game = [
        'name' => $faker->name,
        'player_shape' => $faker->word,
        'cpu_shape' => $faker->word,
        'winner' => $faker->word,
        'time'=> $faker->iso8601($max = 'now'),
        ];

        # Insert the game
        $this->app->db()->insert('results', $game);
}   
    dump('Seed complete!');
    }
    
    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }
}
