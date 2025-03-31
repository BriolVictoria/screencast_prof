<?php


require __DIR__.'/../vendor/autoload.php';
require CONNEXION.'/connection.php';

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->dropIfExists('users');
Capsule::schema()->create('users', function ($table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->string('password');
    $table->timestamps();
});

Capsule::schema()->dropIfExists('jiris');
Capsule::schema()->create('jiris', function ($table) {
    $table->id();
    $table->string('name');
    $table->timestamp('starting_at');
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->timestamps();
});

Capsule::schema()->dropIfExists('contacts');
Capsule::schema()->create('contacts', function ($table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->timestamps();
});

Capsule::schema()->dropIfExists('attendances');
Capsule::schema()->create('attendances', function ($table) {
    $table->id();
    $table->foreignId('jiri_id')->constrained()->onDelete('cascade');
    $table->foreignId('contact_id')->constrained()->onDelete('cascade');
    $table->timestamps();
});