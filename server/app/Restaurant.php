<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
        public function menus()
        {
            return $this->hasMany('App\Menu');
        }
}
