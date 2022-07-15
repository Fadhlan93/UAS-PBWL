<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kematian extends Model
{
    use HasFactory;

    protected $table = "tb_kematian";

    protected $primaryKey = 'No_Akta_Kematian';

    protected $fillable = ['No_Akta_Kematian', 'Tempat', 'Hari', 'Tanggal', 'Sebab' ];

}
