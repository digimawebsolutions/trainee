<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\employees;
use Redirect;
use Carbon\Carbon; 
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BorromsController extends Controller
{
    public function borroms()
    {
       ///$data["_employee"] = employees::get();
       return view("trainee.employee"); 
    }

    public function add()
    {
       
       if(Request::isMethod("post"))
       {
            $this->add_submit();
       }
       else
       {
            return view('trainee.employee_add');
       }
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
