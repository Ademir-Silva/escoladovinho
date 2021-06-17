<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insumos extends Model
{
    protected $fillable = ['nome', 'descrição', 'validade', 'adquirido'];

    protected $guarded = [];

}
