<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name'=>'hikaru',
            'date' => '2022/07/01',
            'debit' => '給料',
            'd_money' => '150000',
            'user_id' =>'1',
        ];
        DB::table('books')->insert($param);

        $param = [
            'name'=>'daisuke',
            'date' => '2022/07/03',
            'credit' => '日用品費',
            'c_money' => '500',
            'user_id' =>'3',
        ];
        DB::table('books')->insert($param);

    }
}
