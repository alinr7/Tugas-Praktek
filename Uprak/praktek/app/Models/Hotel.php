<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $fillable=['nama_hotel', 'lokasi', 'harga', 'image', 'fasilitas', 'sinopsis'];
    protected $table='tb_hotel';
}
