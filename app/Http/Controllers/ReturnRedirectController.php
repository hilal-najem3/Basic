<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReturnRedirectController extends Controller
{
    public function Back($name)
    {
    	return redirect()->route($name);
    }
}
