<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervensi extends Model
{
    use HasFactory;
    protected $table = 'intervensi';
    public $incrementing = true;

    public $timestamps = false;

    protected $fillable = [
        'intervensi_id',
        'matriks_id',
    ];
}
