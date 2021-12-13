<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { //dzaki
        DB::table('admins')->insert([
            'name' =>'dzaki',
            'email' =>'dzakiwa1@gmail.com',
            'password' =>'yamahayzfr25',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
