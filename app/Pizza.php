<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    public function feltetek() {
        return $this->hasMany("\App\Feltet");
    }

    
}
