<?php

require __DIR__.'/../vendor/autoload.php';
define('DATABASE_PATH', __DIR__.'/../database.sqlite');
require __DIR__.'/../core/database/dbconnection.php';
$countries = require __DIR__.'/../config/countries.php';
$pet_types = require __DIR__.'/../config/pet_types.php';

use Animal\Models\Country;
use Animal\Models\PetType;

Country::query()->truncate();
foreach ($countries as $code) {
    Country::create(compact('code'));
}

PetType::query()->truncate();
foreach ($pet_types as $code) {
    PetType::create(compact('code'));
}

foreach (
    [
        'owners' => \Animal\Models\PetOwner::class,
        'pets' => \Animal\Models\Pet::class,
        'losses' => \Animal\Models\Loss::class,
] as $file_name => $class_name
) {
    $class_name::query()->truncate();
    $handle = fopen($file_name.'.csv', 'rb');
    $fields = fgetcsv($handle, 1000, ';');
    $data = [];
    while ($line = fgetcsv($handle, 1000, ';')) {
        foreach ($line as $k => $value) {
            $data[$fields[$k]] = $value;
        }
        $class_name::create($data);
    }
}