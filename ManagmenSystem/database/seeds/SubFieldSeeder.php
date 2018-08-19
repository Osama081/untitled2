<?php

use Illuminate\Database\Seeder;

class SubFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sub = new App\SubField();
        $sub->name = "Hardware";
        $sub->department = 1;
        $sub->save();

        $sub = new App\SubField();
        $sub->name = "Software";
        $sub->department = 1;
        $sub->save();

        $sub = new App\SubField();
        $sub->name = "Advance Salary Request";
        $sub->department = 2;
        $sub->save();

        $sub = new App\SubField();
        $sub->name = "Loan Status Record";
        $sub->department = 2;
        $sub->save();

        $sub = new App\SubField();
        $sub->name = "Request Form";
        $sub->department = 3;
        $sub->save();

        $sub = new App\SubField();
        $sub->name = "Complaint";
        $sub->department = 4;
        $sub->save();

        $sub = new App\SubField();
        $sub->name = "Salary Rais Request";
        $sub->department = 4;
        $sub->save();

        $sub = new App\SubField();
        $sub->name = "Meeting Request";
        $sub->department = 4;
        $sub->save();

        $sub = new App\SubField();
        $sub->name = "Harassment Request";
        $sub->department = 4;
        $sub->save();

        $sub = new App\SubField();
        $sub->name = "Promotion Request";
        $sub->department = 4;
        $sub->save();

    }
}
