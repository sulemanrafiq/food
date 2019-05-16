<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable =['item_name','type','price','description'];
    protected $dates =['created_at','updated_at'];
    protected $table = 'menu';

}
