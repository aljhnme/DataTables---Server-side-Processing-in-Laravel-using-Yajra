<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Datatables;

class ajaxController extends Controller
{
    function index()
    {
    	return view('user.index');
    }


    function getdata()
    {
      $data=Users::select('first_name','last_name');
      return Datatables::of($data)->make(true);
    }
}
