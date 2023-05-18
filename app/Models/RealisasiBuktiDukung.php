<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Multitenantable;

class RealisasiBuktiDukung extends Model
{
    use HasFactory;
    use Multitenantable;
    protected $table = 'realisasi_bukti_dukung';
    protected $guarded = ['id'];
    protected $casts = [
        'realisasi' => 'array'
    ];
    public function matriks(){
        return $this->belongsTo(Matriks::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
