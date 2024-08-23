<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    // property yang boleh diisi
    protected $fillable = [
        'quote'
    ];

    // public function user() {
    //     return $this->belongsTo(User::class);
    // }
}
