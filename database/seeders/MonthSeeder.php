<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Month;

class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //
        $div=new Month;
        $div->name='january';
        $div->save();
        $div=new Month;
        $div->name='february';
        $div->save();
        $div=new Month;
        $div->name='march';
        $div->save();
        $div=new Month;
        $div->name='april';
        $div->save();
        $div=new Month;
        $div->name='may';
        $div->save();
        $div=new Month;
         $div->name='june';
         $div->save();
         $div=new Month;
        $div->name='july';
        $div->save();
        $div=new Month;
        $div->name='august';
        $div->save();
        $div=new Month;
        $div->name='september';
        $div->save();
        $div=new Month;
        $div->name='october';
        $div->save();
        $div=new Month;
         $div->name='november';
        $div->save();
        $div=new Month;
        $div->name='december';
        $div->save();


    }
}
