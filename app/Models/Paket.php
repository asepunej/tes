<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Paket extends Model
{
    use HasFactory;
    protected $table = 'master.paket';
    public $timestamps = false;
    protected $fillable = [
        'uraian',
        'tahun',
        'lokasi',
        'id_perusahaan',
        'mitra',
        'mitra_id',
        'lokasi',
        'no_kontrak',
        'tgl_kontrak',
        'tgl_awal',
        'tgl_akhir',
        'nilai_kontrak',
        'kd_proses',
        'tgl'

    ];

    public function tahun(): BelongsTo
    {
        return $this->belongsTo(Tahun::class);
    }

    public function perusahaan(): BelongsTo
    {
        return $this->belongsTo(Perusahaan::class);
    }
    public function mitra(): BelongsTo
    {
        return $this->belongsTo(Mitra::class);
    }
    public function proses(): BelongsTo
    {
        return $this->belongsTo(Proses::class);
    }
}
