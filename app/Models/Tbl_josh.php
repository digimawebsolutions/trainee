<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tbl_customer extends Model
{
	protected $table = 'tbl_customer';
	protected $primaryKey = "customer_id";
    public $timestamps = false;
}