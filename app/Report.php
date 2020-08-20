<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    // Customerモデルを親に持つことを記述する
    public function customers()
    {
    return $this->belongTo('App\Customer');
    }
}
