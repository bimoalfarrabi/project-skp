<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    use HasFactory;
    // protected $casts = ["tanggal" => 'date:Y-m-d'];
    protected $table = "periode";
    protected $casts = [ 'periode_awal'=>'datetime', 'periode_akhir' => 'datetime'];
    protected $guarded = [
        'id'
    ];

}
