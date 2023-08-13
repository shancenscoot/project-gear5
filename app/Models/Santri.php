<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $fillable = [
        'nis',
        'nama_santri',
        'jenis_kelamin',
        // 'nama_wali',
        'alamat',
        'no_telp',
        'wali_id',
    ];

    public function wali()
    {
        return $this->belongsTo(User::class, 'wali_id');
    }
}
