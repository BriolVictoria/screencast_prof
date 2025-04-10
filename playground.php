<?php
/**
 * Un bac à sable pour tester le fonctionnement de certaines fonctions PHP
 */


use Animal\Models\PetOwner;
$faker = Faker\Factory::create();

PetOwner::create([
    'country'=> $faker->country(),
]);

