<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Comments;
use Faker\Generator as Faker;

$factory->define(Comments::class, function (Faker $faker) {
    $task = \App\Models\Task::inRandomOrder()->first();
    return [
        'comment'=>$faker->text(50),
        'task_id'=>$task->id,
    ];
});
