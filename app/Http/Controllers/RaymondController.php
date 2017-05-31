<?php
namespace App\Http\Controllers;
use Request;
use DB;
use App\Models\Tbl_admin; 
use Redirect;
use Carbon\Carbon;
class RaymondController extends Controller
{

    public function login()
    {
      return view("myhome.home");
    }

    public function login_verify()
    {
        $uname = Request::input("user");
        $pass = Request::input("password");

        $check_if_is_true = Tbl_admin::where(['username'=>$uname,'password'=>$pword])->get();
        if(count($check_if_is_true)>0)
        {
            return view("trainee.mond");
        }
        else{
            return view("myhome.home");
            
        }




    }

    public function index()
    {
        $data["_customer"] = Tbl_admin::get();
        return view("trainee.mond" , $data);
    }
    public function add()
    {
        if(Request::isMethod("post"))
        {
            $this->add_submit();
        }
        else
        {
            return view('trainee.mond_register');
        }
        
    }
    public function add_submit()
    {
         
        $fields = Request::input();
        $insert["first_name"]       =   $fields["first_name"];
        $insert["last_name"]        =   $fields["last_name"];
        $insert["gender"]           =   $fields["Gender"];
        $insert["email"]            =   $fields["email"];
        $insert["contact_number"]   =   $fields["contact_number"];
        $insert["bday"]             =   $fields["Bday"];
        $insert["created_date"]     =   Carbon::now();

        Tbl_admin::insert($insert);
         return Redirect::to("/monde")->send();
       
    }
    public function delete()
    {
        Tbl_admin::where("user_id", Request::input("id"))->delete();
        return Redirect::to("/monde")->send();
    }
    public function edit()
    {
        if(Request::isMethod("post"))
        {
            $this->edit_submit();
        }
        else
        {
            $data["customer"] = Tbl_admin::where("user_id", Request::input("id"))->first();
            return view('trainee.mond_edit', $data);
        }
        
    }
    public function edit_submit()
    {
        $fields = Request::input();
        $insert["first_name"]       =   $fields["first_name"];
        $insert["last_name"]        =   $fields["last_name"];
        $insert["gender"]           =   $fields["Gender"];
        $insert["email"]            =   $fields["email"];
        $insert["contact_number"]   =   $fields["contact_number"];
        $insert["bday"]             =   $fields["bday"];

        Tbl_admin::where("user_id", Request::input("id"))->update($insert);
        return Redirect::to("/monde")->send();
    }
}

