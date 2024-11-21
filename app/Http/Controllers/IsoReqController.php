<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\iluminancia_medicione;
use App\Models\iluminancia_parameter;
class IsoReqController extends Controller
{
    public function index() {
		return view('isoreq.index');
	}

	public function iluminancia() {
		$registros = iluminancia_medicione::all();
		return view('iluminancia.index',compact('registros'));
	}
	public function iluminancia_mes() {
		$registros = iluminancia_parameter::all();
		return view('iluminancia.parameters',compact('registros'));
	}
}
