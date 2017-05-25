<?php
namespace App\Http\Controllers;
use Request;
use App\Models\Tbl_customer; 

class CrudController extends Controller
{
    public function index()
    {
        return view("trainee.crud");
    }
}