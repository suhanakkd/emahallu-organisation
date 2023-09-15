<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member_details;
class Death_registration extends Model
{
    use HasFactory;
    protected $table='death_registration';
    public function member()
    {
        return $this->hasmany('App\Models\Member_details','id','member_id')->select(['id','name']);
    }
}
