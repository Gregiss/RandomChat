<?php

use Illuminate\Database\Seeder;

class MsgTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Msg::class, 10)->create();
    }
}
