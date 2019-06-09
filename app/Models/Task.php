<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];

    public function comments(){
        return $this->hasMany(Comments::class, 'task_id');
    }

    public function statuses(){
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
}
