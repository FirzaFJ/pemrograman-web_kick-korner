<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function shoes()
    {
        return $this->hasOne(Shoes::class);
    }
}
