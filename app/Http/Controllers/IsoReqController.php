<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IsoReqController extends Controller
{
    public function index() {
		return view('isoreq.index');
	}
}
