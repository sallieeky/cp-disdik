<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulasi extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function jenis()
    {
        return $this->belongsTo(JenisRegulasi::class);
    }
}
