<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kesihatan extends Model
{
    use HasFactory;
    protected $table = 'data_kesihatan';
    protected $fillable = [

        'rawatan',
        'rawatan_desc',
        'darah',
        'darah_desc',
        'gula',
        'gula_desc',
        'diabetes',
        'diabetes_desc',
        'jantung',
        'jantung_desc',
        'batuk',
        'batuk_desc',
        'kidney',
        'kidney_desc',
        'pembedahan',
        'pembedahan_desc',
        'penyakit_lain',
        'penyakit_lain_desc',
    ];
    public function User()
    {
        return $this->belongsTo('App\Models\Kesihatan', 'id', 'user_id');

    }

}
