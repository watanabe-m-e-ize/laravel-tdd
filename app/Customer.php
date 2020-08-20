<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Reportモデルを子に持つことを記述する
    public function reports()
    {
    return $this->hasOne('App\Report');
    }
}
