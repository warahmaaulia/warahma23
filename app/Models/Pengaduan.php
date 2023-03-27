<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Pengaduan as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Pengaduan extends Model
{
    use HasFactory;
    protected $table= 'pengaduan';
    protected $fillable = [
        'tgl_pengaduan',
        'isi_laporan',
        'foto',
        'level',

    ];

}
