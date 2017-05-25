<?php
namespace App\Http\Controllers;
use Request;
use DB;
use App\Models\Tbl_customer; 
use Redirect;
use Carbon\Carbon;
class CrudController extends Controller
{
    public function index()
    {
    	$data["_customer"] = Tbl_customer::get();
        return view("trainee.crud" , $data);
    }
    public function add()
    {
    	if(Request::isMethod("post"))
    	{
    		$this->add_submit();
    	}
    	else
    	{
    		return view('trainee.crud_add');
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

    	Tbl_customer::insert($insert);

    	return Redirect::to("/crud")->send();
    }
    public function delete()
    {
    	Tbl_customer::where("customer_id", Request::input("id"))->delete();
    	return Redirect::to("/crud")->send();
    }
    public function edit()
    {
    	if(Request::isMethod("post"))
    	{
    		$this->edit_submit();
    	}
    	else
    	{
    		$data["customer"] = Tbl_customer::where("customer_id", Request::input("id"))->first();
    		return view('trainee.crud_edit', $data);
    	}
    	
    }
    public function edit_submit()
    {
    	$fields = Request::input();
    	$insert["first_name"] 		= 	$fields["first_name"];
    	$insert["last_name"] 		= 	$fields["last_name"];
    	$insert["email"] 			= 	$fields["email"];
    	$insert["contact_number"] 	= 	$fields["contact_number"];

    	Tbl_customer::where("customer_id", Request::input("id"))->update($insert);
    	return Redirect::to("/crud")->send();
    }
}