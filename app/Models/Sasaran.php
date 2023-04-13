<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sasaran extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $with = ['indikator'];
    public function indikator(){
        return $this->hasMany(Indikator::class);
    }
}
