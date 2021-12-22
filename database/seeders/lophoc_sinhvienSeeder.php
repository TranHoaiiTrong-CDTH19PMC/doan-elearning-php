<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\lophoc_sinhvien;


class lophoc_sinhvienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<11;$i++)
        {
            $ds=new lophoc_sinhvien;
            $ds->sinhvien_id=10;
            $ds->lophoc_id=$i;
            $ds->save();
        }
       
    }
}
