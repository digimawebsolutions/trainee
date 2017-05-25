<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $insert[0]["id"] = 1;
        $insert[0]["first_name"] = "Guillermo";
        $insert[0]["last_name"] = "Tabligan";
        $insert[0]["age"] = "21";
        $insert[0]["created_date"] = Carbon::now();
        $insert[1]["id"] = 2;
        $insert[1]["first_name"] = "Mark Brain";
        $insert[1]["last_name"] = "Oliver";
        $insert[1]["age"] = "22";
        $insert[1]["created_date"] = Carbon::now();
        DB::table('tbl_users')->insert($insert);
        Model::reguard();
    }
}
