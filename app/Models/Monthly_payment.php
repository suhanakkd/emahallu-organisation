<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monthly_payment extends Model
{
    use HasFactory;
    protected $table='monthly_payment';
    public function month()
    {
        return $this->hasMany('App\Models\Month','id','month_id')->select(['id','name']);
    }
    public function house()
    {
        return $this->hasMany('App\Models\House_registration','id','house_id')->select(['id','house_id']);
    }
}
