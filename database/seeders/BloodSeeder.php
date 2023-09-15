<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blood;


class BloodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $blood=new Blood;
        $blood->group_name='O positive';
        $blood->save();
        $blood=new Blood;
        $blood->group_name='O negative';
        $blood->save();
        $blood=new Blood;
        $blood->group_name='A positive';
        $blood->save();
        $blood=new Blood;
        $blood->group_name='A negative';
        $blood->save();
        $blood=new Blood;
        $blood->group_name='B positive';
        $blood->save();
        $blood=new Blood;
        $blood->group_name='B negative';
        $blood->save();
        $blood=new Blood;
        $blood->group_name='AB positive';
        $blood->save();
        $blood=new Blood;
        $blood->group_name='AB negative';
        $blood->save();
        $blood=new Blood;
        $blood->group_name=' Rh null';
        $blood->save();
       


    }
   
    


}
