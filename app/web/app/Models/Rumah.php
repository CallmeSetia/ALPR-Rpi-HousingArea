<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Rumah extends Model
{
    // ...
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function platNomors()
    {
        return $this->hasMany(PlatNomor::class);
    }

    public function tamus()
    {
        return $this->hasMany(Tamu::class);
    }

}
