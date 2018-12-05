<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function likes()
    {
        return $this->hasMany('App\Like', 'shop_id', 'id');
    }
}
