<?php
namespace App\Http\Controllers;
set_time_limit (200);

class PageController extends Controller
{
	public function adminlogin()
    {
        return view('adminlogin');
    }
}

?>