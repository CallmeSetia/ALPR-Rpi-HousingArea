<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlatNomor extends Model
{
    use HasFactory;

    public function rumah()
    {
        return $this->belongsTo(Rumah::class);
    }
}
