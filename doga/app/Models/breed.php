<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\species;
use app\Models\animal;

class breed extends Model
{
    protected $fillable = ['species_id','name'];

    public function species(){
        return $this->belongsTo(species::class);
    }

    public function animal(){
        return $this->hasMany(animal::class);
    }
}
