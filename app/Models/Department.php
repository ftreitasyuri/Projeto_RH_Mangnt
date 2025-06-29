<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
        //
    public function users()
    {
        // Cada departamento pode ter vários usuários
        return $this->belongsToMany(User::class);
    }
}
