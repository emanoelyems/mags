<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Bomba;


class Posto extends Model
{

        use HasFactory;

        protected $table = 'postos';

        protected $fillable = ['quantidade'];

        public function contrato(){
                return $this->hasOne(Contrato::class, 'id', 'contrato_id');
        }

        public function gerente(){
                return $this->hasOne(User::class, 'id', 'gerente_id');
        }

        public function bomba(){
                return $this->hasMany(Bomba::class, 'posto_id', 'id');
        }

        public function turno(){
                return $this->hasMany(Turno::class, 'id', 'posto_id');
        }

}
