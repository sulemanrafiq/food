<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name' ,
    ];
    public function user(){
        return $this->hasMany('App\User');
    }
}
