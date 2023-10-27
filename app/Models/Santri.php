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
        'wali_id',
    ];

    public function wali()
    {
        return $this->belongsTo(User::class, 'wali_id');
    }

    public function dataOfViolations()
    {
        return $this->hasMany(DataOfViolation::class);
    }
}
