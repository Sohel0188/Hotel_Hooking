<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\service_type;
class services extends Model
{
    public function service_type(){
        return $this->belongsTo(service_type::class);
    }
}
