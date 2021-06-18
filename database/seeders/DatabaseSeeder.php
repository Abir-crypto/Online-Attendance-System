<?php

namespace Database\Seeders;

use App\Models\Faculty;
use App\Models\Student;
use Carbon\Carbon;
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
        $user = Faculty::find(1);

        $dt1 = Carbon::now();
        $dt2 = Carbon::now();

        $dt1->hour = 16;
        $dt1->minute = 30;
        $dt2->hour = 17;
        $dt2->minute = 50;


        $user->courses()->create([
           'code'=>'CSE4033',
            'title'=>'Web and Internet Programming',
            'section'=>'3',
            'day1'=>1,
            'day2'=>3,
            'start'=>$dt1,
            'end'=>$dt2,
        ]);
    }
}
