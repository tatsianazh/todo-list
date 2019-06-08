<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    $status = \App\Models\Status::inRandomOrder()->first();
    return [
        'name'=>$faker->sentence(3),
        'description'=>$faker->text(25),
        'status_id'=>$status->id,
    ];
});
