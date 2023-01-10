<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembelajaran extends Model
{
    use HasFactory;
    protected $table = 'data_pembelajaran';
    protected $fillable = [
         'sesi_pembelajaran',
        'kategori',
        'waktu_mula',
        'waktu_tamat',
        'kehadiran',
        'komen',
        'progress',
        
    ];
    public function User()
    {
        return $this->belongsTo('App\Models\Pembelajaran', 'id', 'user_id');

    }

}
