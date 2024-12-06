<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\User;
use app\Models\shelter;

class animal extends Model
{
    protected $fillable = ['user_id','shelter_id','breed_id','name','sex','age'];

    public function user() {
        return $this->belonsToMany(User::class);
    }

    public function shelter(){
        return $this->belongsTo(shelter::class);
    }

    public function breed(){
        return $this->belongsTo(breed::class);
    }
}
