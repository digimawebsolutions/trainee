<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BrainController extends Controller
{

    private $fullname;

    function index()
    {
        $myFName = 'Mark Brain M. Oliver I';
        $this->setFullName($myFName);
        echo $this->getFullName();
    }

    /*FullName Mutator and Accessor*/
    function setFullName($fname)
    {
        $this->fullname = $fname;
    }

    function getFullName()
    {
        return $this->fullname;
    }
    /*End Fullname*/
}

