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
    protected $casts = [
        'sasaran_atasan' => 'array'
    ];
    public function indikator(){
        return $this->hasMany(IndikatorKeberhasilan::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function intervensi(){
        return $this->belongsToMany(Matriks::class, 'intervensi', 'sasaran_id','intervensi_id');
    }
    public function sasaran_atasan(){
        return $this->belongsToMany(Matriks::class, 'intervensi', 'intervensi_id','sasaran_id');
    }
}
