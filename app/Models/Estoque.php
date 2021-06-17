<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $fillable = ['nome', 'tipo', 'grupo', 'validade','adquirido', 'quantidade'];
}
