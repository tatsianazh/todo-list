<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        $data [] = [
            'name'=>'TODO',
        ];

        $data [] = [
            'name'=>'DOING',
        ];

        $data [] = [
            'name'=>'DONE',
        ];


        DB::table('statuses')->insert($data);
    }
}
