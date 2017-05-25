<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tbl_admin extends Model
{
	protected $table = 'tbl_admin';
	protected $primaryKey = "user_id";
    public $timestamps = false;
    }