<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\House_registration;
use App\Models\Member_details;
class Birth_registration extends Model
{
    use HasFactory;
    protected $table='birth_registrations';
    public function house()
    {
        return $this->hasmany('App\Models\House_registration','id','house_id')->select(['id','address']);
    }
  
}
