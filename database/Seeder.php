<?php

require __DIR__.'/../vendor/autoload.php';
require __DIR__ . '/../connection.php';

use Animal\Models\User;

use Illuminate\Database\Capsule\Manager as Capsule;

class Seeder {
    public function run()
    {
        $faker = Faker\Factory::create();

        User::query()->truncate();
        $dominique = new User();
        $dominique->name = 'Dominique';
        $dominique->email = 'dominique@gmail.com';
        $dominique->password = password_hash('azerty', PASSWORD_BCRYPT);
        $dominique->save();

        $myriam = User::create([
            'name' => 'Myriam',
            'email' => 'myriam.dupont@gmail.com',
            'password' => password_hash('azerty', PASSWORD_BCRYPT),
        ]);
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => password_hash('azerty', PASSWORD_BCRYPT),
            ]);
        }
    }
}

$seeder =  new Seeder();
$seeder->run();