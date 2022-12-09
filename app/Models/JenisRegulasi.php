<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisRegulasi extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function regulasi()
    {
        return $this->hasMany(Regulasi::class);
    }
}
