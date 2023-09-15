<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Accounts_primary;

class PrimaryaccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $acc=New Accounts_primary;
        $acc->name='assets';
        $acc->save();
        $acc=New Accounts_primary;
        $acc->name='laibilites';
        $acc->save();
        $acc=New Accounts_primary;
        $acc->name='equity';
        $acc->save();
        $acc=New Accounts_primary;
        $acc->name='expenses';
        $acc->save();
        $acc=New Accounts_primary;
        $acc->name='income';
        $acc->save();
       

    }
}
