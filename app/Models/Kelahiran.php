<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelahiran extends Model
{
    use HasFactory;

    protected $table = "tb_kelahiran";

    protected $primaryKey = 'No_Akta_Kelahiran';

    protected $fillable = ['No_Akta_Kelahiran', 'Tempat', 'Hari', 'Tanggal', 'Keterangan' ];

}
