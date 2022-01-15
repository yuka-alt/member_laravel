<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert(
            [
              [

                'name'=>'テック太郎',
                'telephone'=>'000-0000-0000',
                'email'=>'taro@techis.com',
              ],

              ]
        );
    }
}
