<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participante extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'sobrenome', 'data_nascimento', 'endereco', 'email'];
}
