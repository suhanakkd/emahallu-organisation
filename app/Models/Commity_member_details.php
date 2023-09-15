<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commity_member_details extends Model
{
    use HasFactory;
    protected $table='commity_member_details';
    public function period()
    {
        return $this->hasMany('App\Models\Commity_period','id','peroid_id')->select(['id','period_time']);
    }
    public function house()
    {
        return $this->hasMany('App\Models\House_registration','id','house_id')->select(['id','house_id']);
    }
    public function member()
    {
        return $this->hasMany('App\Models\Member_details','id','member_id')->select(['id','name']);
    }
    public function committee()
    {
        return $this->hasMany('App\Models\Commity_creation','id','commity_id')->select(['id','name']);
    }
    public function position()
    {
        return $this->hasMany('App\Models\Commity_position','id','postion_id')->select(['id','name']);
    }
}
