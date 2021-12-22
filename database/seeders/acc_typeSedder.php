<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\account_type;

class acc_typeSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s=new account_type;
        $s->name="giangvien";
        $s->save();
    }
}
