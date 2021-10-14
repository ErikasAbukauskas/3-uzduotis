<?php

use Illuminate\Database\Seeder;

use App\AttendanceGroup;

class AttendanceGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(AttendanceGroup::class, 50)->create();
    }
}
