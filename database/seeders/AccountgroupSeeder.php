<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Accounts_group;

class AccountgroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $group=new Accounts_group;
        $group->account_primary_id='1';
        $group->name='current asset';
        $group->save();
        $group=new Accounts_group;
        $group->account_primary_id='1';
        $group->name='fixed asset';
        $group->save();
        $group=new Accounts_group;
        $group->account_primary_id='2';
        $group->name='current laibilities';
        $group->save();
        $group=new Accounts_group;
        $group->account_primary_id='2';
        $group->name='noncurrent laibilities';
        $group->save();
        $group=new Accounts_group;
        $group->account_primary_id='4';
        $group->name='operating';
        $group->save();
        $group=new Accounts_group;
        $group->account_primary_id='4';
        $group->name='non operating';
        $group->save();
        $group=new Accounts_group;
        $group->account_primary_id='4';
        $group->name='fixed';
        $group->save();
    
       
    }
}
