<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Tbl_customer;
use Redirect;
use Carbon\Carbon; 
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BorromsController extends Controller
{
    public function borroms()
    {
       return view("trainee.employee"); 
    }


    public function add()
    {
       echo "add";
    }

    public function edit()
    {
       echo "edit";
    }

    public function delete()
    {
       echo "delete";
    }
}
