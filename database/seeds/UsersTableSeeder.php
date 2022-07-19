<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'hikaru',
            'email'=>'a@aa',
            'password'=>'0517',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'tatuya',
            'email'=>'b@bb',
            'password'=>'0505',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'daisuke',
            'email'=>'c@cc',
            'password'=>'0705',
        ];
        DB::table('users')->insert($param);

    }
}
