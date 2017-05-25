<?php
namespace App\Http\Controllers;
use Request;
use DB;
use App\Models\Tbl_customer; 

class TraineeController extends Controller
{
    public function home()
    {
        return view("trainee.home");
    }
    public function home_ajax_customer()
    {
        $data["_customer"] = tlb_momai::limit(5)->get();
        echo json_encode($data);
    }

    public function boroms()
    {
        $x = Request::input("x");
        $y = Request::input("y");
        $z = ($x+$y);

        $data["answer"] = $z;
        $data["x"] = $x;
        $data["y"] = $y;
        return view('trainee.boroms', $data);
    }
    public function mai()
    {
        $data["_customer"] = Tbl_customer::limit(5)->get();
        return view('trainee.mai', $data);
       
    }
    public function boroms2()
    {
        echo "Mark Anthony Broom";
    }
    public function josh()
    {
        $_x = array(2, 10, 20, 1, 10, 40, 75, 125, 93, 20);
        $data["max"] = $this->josh_get_max($_x);
        $data["min"] = $this->josh_get_min($_x, $data["max"]);
        return view('trainee.joshua', $data);
    }
    public function josh_get_max($_array_of_numbers)
    {
        $max = 0;

        foreach($_array_of_numbers as $num)
        {
            $max = ($num > $max ? $num : $max);

            // if($num > $max)
            // {
            //     $max = $num;
            // }
        }

        return $max;
    }
    public function josh_get_min($_array_of_numbers, $max)
    {
        $min = $max;

        foreach($_array_of_numbers as $num)
        {
            if($num < $min)
            {
                $min = $num;
            }
        }

        return $min;
    }
}