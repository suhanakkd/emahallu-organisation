<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commity_creation extends Model
{
    use HasFactory;
    protected $table='commity_creation';
    public function period()
    {
        return $this->hasMany('App\Models\Commity_period','id','peroid_id')->select(['id','period_time']);
    }
}
