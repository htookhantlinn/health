<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public $fillable = [
        'title', 'description', 'image'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
