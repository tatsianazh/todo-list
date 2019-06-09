<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $guarded = [];

    public function task(){
        return $this->hasMany(Task::class, 'status_id', 'id');
    }

}
