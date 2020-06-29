<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    public function getTasksList()
    {
        return $this->hasMany('App\Task');
    }
}
