<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        # inserting single data
    //     Student::create([
    //         'name'=>'Shubrajit Adak',
    //         'email'=>'shubra562@gmail.com',
    //         'phone'=>'9875416474'
    //     ]);

        // Inserting multiple data
        $students = collect([
            [
                'name'=>'suvo',
                'email'=>'suvo@gmail.com',
                'phone'=>'123456987'
            ],
            [
                'name'=>'baban',
                'email'=>'baban@gmail.com',
                'phone'=>'12342256987'
            ],
            [
                'name'=>'papan',
                'email'=>'papan@gmail.com',
                'phone'=>'12345698701'
            ]
        ]
        );

        $students->each(function($s){
            Student::insert($s);
        });
    }
}


//Here we are using seeding for inserting real data or fake data in database
/**
 * For seeding we need to create a model and a migration file.
 * After that you have to create a seeder file by using a command,like(php artisan make:seeder FileNameSeeder)
 * You have to mention your seeding file name into seeders folder DatabaseSeeder file, like this $this->call([studentSeeder::class]);
 * At the end you have to run a command for inserting the data into database "php artisan db:seed"
 */
