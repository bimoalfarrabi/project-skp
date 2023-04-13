<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndikatorKeberhasilan extends Model
{
    use HasFactory;
    protected $with = ['matriks'];
    protected $guarded = [
        'id'
    ];

    public function matriks(){
        return $this->belongsTo(Matriks::class);
    }
}
