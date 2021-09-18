<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class profilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <=30; $i++) {
      
            DB::table('profiles')
            ->where('id', $i)
            ->update(['user_id' => $i]);  
             }
    }
}
