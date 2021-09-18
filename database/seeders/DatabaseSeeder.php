<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
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
