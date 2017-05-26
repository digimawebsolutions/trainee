<?php
namespace App\Http\Controllers;
use Request;
use DB;
use App\Models\Tbl_josh; 
use Redirect;
use Carbon\Carbon;
class FlatController extends Controller
{
    public function index()
    {
    	
        return view("trainee.header");
    }
    
}