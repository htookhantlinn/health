<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Doctor extends Model
{
    use HasFactory;

    public $fillable = ['name', 'field_id', 'phone', 'image'];

    public function field()
    {
        return $this->belongsTo('App\Models\Field');
    }
}
