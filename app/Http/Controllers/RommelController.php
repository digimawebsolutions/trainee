<?php

namespace App\Http\Controllers;
use Request;
use DB;
use App\Models\tbl_product; 
use Redirect;

class RommelController extends Controller
{
    function index()
    {
        //return view("trainee.rommel");
        $data["_product"] = tbl_product::get();
        return view("trainee.rommel_crud" , $data);
    }

   	public function add()
    {
    	if(Request::isMethod("post"))
    	{
    		$this->add_submit();
    	}
    	else
    	{
    		return view('trainee.rommel_crud_add');
    	}
    }

    public function add_submit()
    {
        $fields = Request::input();
        $insert["product_name"]               =   $fields["product_name"];
        $insert["product_description"]        =   $fields["product_description"];
        $insert["product_price"]              =   $fields["product_price"];
        $insert["product_quantity"]           =   $fields["product_quantity"];

        tbl_product::insert($insert);

        return Redirect::to("/rommel")->send();
    }

    public function delete()
    {
        tbl_product::where("product_id", Request::input("id"))->delete();
        return Redirect::to("/rommel")->send();
    }

    public function edit()
    {
        if(Request::isMethod("post"))
        {
            $this->edit_submit();
        }
        else
        {
            $data["product"] = tbl_product::where("product_id", Request::input("id"))->first();
            return view('trainee.rommel_crud_edit', $data);
        }
    }

    public function edit_submit()
    {
        $fields = Request::input();
        $insert["product_name"]               =   $fields["product_name"];
        $insert["product_description"]        =   $fields["product_description"];
        $insert["product_price"]              =   $fields["product_price"];
        $insert["product_quantity"]           =   $fields["product_quantity"];

        tbl_product::where("product_id", Request::input("id"))->update($insert);
        return Redirect::to("/rommel")->send();
    }
}
