<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $insert[0]["employee_id"] = 1;
        $insert[0]["employee_first_name"] = "Mark";
        $insert[0]["employee_last_name"] = "Cruz";
        $insert[0]["employee_contact_number"] = "09066565644";
        $insert[0]["employee_email_add"] = "markcruz@gmail.com";
        $insert[0]["employee_created_date"] = Carbon::now();
        $insert[1]["employee_id"] = 2;
        $insert[1]["employee_first_name"] = "Sammantha";
        $insert[1]["employee_last_name"] = "Villaruel";
        $insert[1]["employee_contact_number"] = "09954523965";
        $insert[1]["employee_email_add"] = "sam_villruel@yahoo.com";
        $insert[1]["employee_created_date"] = Carbon::now();
        DB::table('employees')->insert($insert);
        Model::reguard();
    }
}
