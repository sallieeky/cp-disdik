<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisAnggaran extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function anggaran()
    {
        return $this->hasMany(Anggaran::class);
    }
}
