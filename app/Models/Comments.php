<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['comment', 'task_id'];

    public function task(){
        return $this->belongsTo(Task::class, 'task_id', 'id');
    }


}
