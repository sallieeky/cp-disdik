<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function halaman()
    {
        return $this->hasMany(Halaman::class);
    }

    public function subpart()
    {
        return $this->hasMany(Subpart::class);
    }
}
