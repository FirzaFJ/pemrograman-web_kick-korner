<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function shoes()
    {
        return $this->belongsTo(Shoes::class, 'id_sepatu');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function review()
    {
        return $this->hasMany(Review::class, 'id');
    }
}
