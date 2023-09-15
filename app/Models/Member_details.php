<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blood;
class Member_details extends Model
{
    use HasFactory;
    protected $table='member-details';
    public function blood(){
        return $this->hasMany('App\Models\Blood', 'id','blood_group')->select(['id','group_name']);
}
}
