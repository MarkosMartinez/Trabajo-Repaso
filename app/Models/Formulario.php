<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formulario extends Model
{
    protected $fillable = ['user_id', 'nombre', 'asunto', 'contenido'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
