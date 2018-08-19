<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $department = new \App\Departments();
        $department->name = "IT";
        $department->save();

        $department = new \App\Departments();
        $department->name = "Finance";
        $department->save();

        $department = new \App\Departments();
        $department->name = "Admin";
        $department->save();

        $department = new \App\Departments();
        $department->name = "Managment";
        $department->save();
    }
}
