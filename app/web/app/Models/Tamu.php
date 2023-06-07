<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'plat',
        'approved_by',
        'rumah_id',
    ];

    public function rumah()
    {
        return $this->belongsTo(Rumah::class);
    }

    public function approvedBy()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}
