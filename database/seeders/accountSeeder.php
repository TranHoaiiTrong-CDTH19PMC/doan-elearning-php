<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\account;
class accountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<20;$i++)
        {
        $ds=new account;
        $ds->account_type_id=mt_rand(1,3);
        $ds->mssv="0";
        if( $ds->account_type_id==2)
        {
            $ds->mssv="$i";
        }
        $ds->avatar="$i";
        $ds->name="$i . $i";
        $ds->username="$i";
        $ds->password=Hash::make("$i$i");
        $ds->email="$i@caothang.edu.vn";
        $ds->save();
        }
    }
}
