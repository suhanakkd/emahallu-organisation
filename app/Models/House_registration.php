<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member_details;
class House_registration extends Model
{
    use HasFactory;
    protected $table='house_registration';
    public function member(){
        return $this->hasMany('App\Models\Member_details', 'id','house_holder_name')->select(['id','name']);
}
}
