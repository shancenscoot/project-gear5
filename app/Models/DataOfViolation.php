<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataOfViolation extends Model
{
    use HasFactory;

    protected $fillable = [
        'santri_id',
        'violation_id',
        'sanction_id',
        'status',
    ];

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }

    public function violation()
    {
        return $this->belongsTo(Violation::class, 'violation_id');
    }

    public function sanction()
    {
        return $this->belongsTo(Sanction::class, 'sanction_id');
    }
}
