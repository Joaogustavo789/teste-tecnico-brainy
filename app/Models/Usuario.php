<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable = ['id', 'nome', 'email', 'id_cidade', 'id_hobbie'];

    public function usuario() {
        return $this->belongsTo(Cidade::class, 'id_cidade');
    }

    public function hobbie() {
        return $this->belongsTo(Hobbie::class, 'id_hobbie');
    }
}
