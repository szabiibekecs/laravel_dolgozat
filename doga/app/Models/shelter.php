<?php

namespace App\Models;
use app\Models\animal;

use Illuminate\Database\Eloquent\Model;

class shelter extends Model
{
    protected $fillable = ['name','capacity'];

    public function animal(){
        return $this->hasMany(animal::class);
    }
}
