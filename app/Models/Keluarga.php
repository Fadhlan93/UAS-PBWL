<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    protected $table = "tb_keluarga";

    protected $primaryKey = 'NIK';

    protected $fillable = ['NIK', 'No_Keluarga', 'Status', 'Alamat', 'RT', 'RW' ];

}
