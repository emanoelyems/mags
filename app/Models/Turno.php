<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{

    use HasFactory;

    
    public function turno(){
            return $this->hasOne(Leitura::class, 'turno_id', 'id');
    }

    public function posto(){
        return $this->hasOne(Posto::class, 'id', 'posto_id');
    }

}
