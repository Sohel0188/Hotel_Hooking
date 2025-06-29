<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\services;
class service_type extends Model
{
    //
    public function service (){
        return $this->hasOne(services::class);
    }
}
