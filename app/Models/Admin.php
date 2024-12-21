<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Tambahkan ini
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable 
{
    use HasFactory;

    protected $fillable = [
        'username', 'no_hp', 'alamat', 'tgl_lahir', 'password',
    ];

    
    // Jika Anda tidak menggunakan kolom timestamp seperti 'created_at' dan 'updated_at'
    public $timestamps = false;
}
