<?php
namespace App\Http\Controllers;
use Request;
use DB;
use App\Models\Tbl_josh; 
use Redirect;
use Carbon\Carbon;
class JoshController extends Controller
{
    public function index()
    {
    	$data["_customer"] = Tbl_josh::get();
        return view("trainee.josh" , $data);
    }
    public function add()
    {
    	if(Request::isMethod("post"))
    	{
    		$this->add_submit();
    	}
    	else
    	{
    		return view('trainee.josh_add');
    	}
    	
    }
    public function add_submit()
    {
    	$fields = Request::input();
    	$insert["first_name"] 		= 	$fields["first_name"];
    	$insert["last_name"] 		= 	$fields["last_name"];
    	$insert["email"] 			= 	$fields["email"];
    	$insert["contact_number"] 	= 	$fields["contact_number"];
    	$insert["created_date"] 	= 	Carbon::now();

    	Tbl_josh::insert($insert);

    	return Redirect::to("/josh")->send();
    }
    public function delete()
    {
    	Tbl_josh::where("customer_id", Request::input("id"))->delete();
    	return Redirect::to("/josh")->send();
    }
    public function edit()
    {
    	if(Request::isMethod("post"))
    	{
    		$this->edit_submit();
    	}
    	else
    	{
    		$data["customer"] = Tbl_josh::where("customer_id", Request::input("id"))->first();
    		return view('trainee.josh_edit', $data);
    	}
    	
    }
    public function edit_submit()
    {
    	$fields = Request::input();
    	$insert["first_name"] 		= 	$fields["first_name"];
    	$insert["last_name"] 		= 	$fields["last_name"];
    	$insert["email"] 			= 	$fields["email"];
    	$insert["contact_number"] 	= 	$fields["contact_number"];

    	Tbl_josh::where("customer_id", Request::input("id"))->update($insert);
    	return Redirect::to("/josh")->send();
    }
}