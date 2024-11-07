<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sampleTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$data=['name'=>'google','state'=>'JH','zip'=>'821005','amount'=>'1500','qty'=>'2','item'=>'laptop'];
        DB::table('sampless')->insert($data);
    }
}
