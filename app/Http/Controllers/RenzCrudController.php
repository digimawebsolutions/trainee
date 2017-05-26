<?php
namespace App\Http\Controllers;
use Request;
use DB;
use App\Tbl_user; 
use Redirect;
use Carbon\Carbon;

class RenzCrudController extends Controller
{
    public function renz_crud()
    {
        $data["_user"] = Tbl_user::get();
        return view("trainee.renz_crud" , $data);
    }
    public function renz_crud_add()
    {
        if(Request::isMethod("post"))
        {
            $this->renz_crud_add_submit();
        }
        else
        {
            return view('trainee.renz_crud_add');
        }
        
    }
    public function renz_crud_add_submit()
    {
        $fields = Request::input();
        $insert["first_name"]       =   $fields["first_name"];
        $insert["last_name"]        =   $fields["last_name"];
        $insert["age"]              =   $fields["age"];
        $insert["created_date"]     =   Carbon::now();

        Tbl_user::insert($insert);

        return Redirect::to("/renz_crud")->send();
    }
    public function delete()
    {
        Tbl_user::where("id", Request::input("id"))->delete();
        return Redirect::to("/renz_crud")->send();
    }
    public function edit()
    {
        if(Request::isMethod("post"))
        {
            $this->edit_submit();
        }
        else
        {
            $data["_user"] = Tbl_user::where("id", Request::input("id"))->first();
            return view('trainee.renz_crud_edit', $data);
        }
        
    }
    public function edit_submit()
    {
        $fields = Request::input();
        $insert["first_name"]       =   $fields["first_name"];
        $insert["last_name"]        =   $fields["last_name"];
        $insert["age"]            =     $fields["age"];

        Tbl_user::where("id", Request::input("id"))->update($insert);
        return Redirect::to("/renz_crud")->send();
    }
}