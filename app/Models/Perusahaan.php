<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Perusahaan extends Model
{
    use HasFactory;
    protected $table = 'master.perusahaan';
    public $timestamps = false;
    protected $fillable = [
        'nama_perusahaan',
        'alamat',
        'npwp',
        'email',
        'notelp',
        'direktur',
        'no_rek',
        'nama_bank'
    ];
}
