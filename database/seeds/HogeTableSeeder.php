<?php

use Illuminate\Database\Seeder;

class HogeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hoges')->insert(['name' => 'Helloworld']);
    }
}
