<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $student = new Student();
        $student->first_name = 'Abdullah All';
        $student->last_name = 'Abir';
        $student->email = 'abir@gmail.com';
        $student->password = '1234';
        $student->save();
    }
}
