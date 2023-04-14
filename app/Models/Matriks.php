<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Multitenantable;

class Matriks extends Model
{
    use HasFactory;
    use Multitenantable;
    protected $guarded = ['id'];
    public function indikator(){
        return $this->hasMany(IndikatorKeberhasilan::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
