<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\User;


class role extends Model
{
    protected $fillable = ['role'];

    public function user(){
        return $this->belongsToMany(User::class);
    }
}
