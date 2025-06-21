<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    //
    public function user()
    {
        // um user_details pertence ao user
        return $this->belongsTo(User::class);
    }
}
