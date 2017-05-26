<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tbl_momai extends Model
{
	protected $table = 'employees';
	protected $primaryKey = "employee_id";
    public $timestamps = false;
}