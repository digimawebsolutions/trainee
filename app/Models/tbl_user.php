<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class tbl_customer extends Model
{
	protected $table = 'tbl_user';
	protected $primaryKey = "id";
    public $timestamps = false;
}

    