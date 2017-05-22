<?php namespace IB001\Http\Controllers;

use IB001\Http\Requests;
use IB001\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FrontController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function partidas()
	{
		return view('partidas');
	}

	public function equipos()
	{
		return view('equipos');
	}

	public function contacto()
	{
		return view('contacto');
	}
}
