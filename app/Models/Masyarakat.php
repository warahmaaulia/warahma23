<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Masyarakat extends Model
{
    public $table = 'masyarakat';

    use HasFactory;

    use Notifiable;

    
    protected $fillable = [
        'nik',
        'name',
        'username',
        'telpon',
        'password',
    ];

    protected $hidden =[
        'password',
    ];
}
