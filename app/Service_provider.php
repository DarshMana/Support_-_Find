<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Service_provider extends Model
{
    use Rateable;
    protected $table = 'service_providers';
    protected $guarded = [];
    
}
