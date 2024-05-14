<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMahasiswaAktif extends Model
{
    use HasFactory;
    protected $table = 'data_mhs_aktif';
    protected $primarykey = 'id_data_mhs_aktif';
    public $timestamps = false;
    protected $fillable = [
        'id_tahun',
        'bukti',
    ];
}
