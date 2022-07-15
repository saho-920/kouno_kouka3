<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
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
            'password'=>'0517',
        ];
        DB::table('members')->insert($param);

        $param = [
            'name' => 'tatuya',
            'password'=>'0505',
        ];
        DB::table('members')->insert($param);

        $param = [
            'name' => 'daisuke',
            'password'=>'0705',
        ];
        DB::table('members')->insert($param);

        $param = [
            'name' => 'ren',
            'password'=>'0216',
        ];
        DB::table('members')->insert($param);

        $param = [
            'name' => 'koji',
            'password'=>'0621',
        ];
        DB::table('members')->insert($param);
    }
}
