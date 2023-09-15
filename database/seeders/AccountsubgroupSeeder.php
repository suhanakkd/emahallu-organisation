<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Accounts_subgroup;

class AccountsubgroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $account=new Accounts_subgroup;
        $account->group_id='1';
        $account->name='cash';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='1';
        $account->name='cash equivalents';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='1';
        $account->name='short-term deposits';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='1';
        $account->name='accounts recievables';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='1';
        $account->name='inventory';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='1';
        $account->name='marketable securities';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='1';
        $account->name='office supplies';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='2';
        $account->name='land';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='2';
        $account->name='building';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='2';
        $account->name='machinery';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='2';
        $account->name='equipment';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='2';
        $account->name='patents';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='2';
        $account->name='trademarks';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='3';
        $account->name='interest payable';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='3';
        $account->name='accounts payable';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='3';
        $account->name='short term loans';
        $account->save();
        $account->group_id='3';
        $account->name='accrued expenses';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='3';
        $account->name='bank overdraft';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='4';
        $account->name='deffered tax liabilities';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='4';
        $account->name='bonds payable';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='4';
        $account->name='capital leases';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='4';
        $account->name='debentures';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='5';
        $account->name='cost of goods sold';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='5';
        $account->name='marketing advertising and promotion';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='5';
        $account->name='salaries and wages';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='5';
        $account->name='rent and insurance';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='5';
        $account->name='salaries and wages';
        $account->save();
        $account=new Accounts_subgroup;
        $account->group_id='5';
        $account->name='selling, general, and administrative expenses';
        $account->save();

        

    }
}
