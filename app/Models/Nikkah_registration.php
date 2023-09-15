<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nikkah_registration extends Model
{
    use HasFactory;
    protected $table='nikkah_registrations';
    public function bride()
    {
        return $this->hasMany('App\Models\Member_details','id','bride_member_id')->select(['name','id','designation']);
    }
    public function groom()
    {
        return $this->hasMany('App\Models\Member_details','id','groom_member_id')->select(['name','id','designation']);
    }
    public function house()
    {
        return $this->hasMany('App\Models\House_registration','id','bride_house_id')->select(['address','id','pincode']);
    }
}
