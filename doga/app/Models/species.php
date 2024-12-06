<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\breed;

class species extends Model
{
    protected $fillable = ['name'];

    public function breed(){
        return $this->hasMany(breed::class);
    }
}
