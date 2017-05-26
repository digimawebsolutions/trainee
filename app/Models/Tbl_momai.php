<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tbl_momai extends Model
{
	protected $table = 'tbl_user';
	protected $primaryKey = "customer_id";
    public $timestamps = false;
}