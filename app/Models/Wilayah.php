<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;

    protected $table = "tb_wilayah";

    protected $primaryKey = 'Kode_Pos';

    protected $fillable = ['Kode_Pos', 'Desa_Kelurahan', 'Kecamatan', 'Kabupaten_Kota', 'Provinsi' ];

}
