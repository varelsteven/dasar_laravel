<?php

namespace Database\Seeders;

use App\Models\student;
use Faker\Guesser\Name;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class teacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        ['name' => 'agus diana', 'adress' =>'depok', 'gender'=>'L'],
        ['name' => 'eraldo', 'adress' =>'depok', 'gender'=>'L'],
        ['name' => 'nahla', 'adress' =>'depok', 'gender'=>'P']
        ];

        foreach($data as $item){
            student::insert()
        }
    }
}
