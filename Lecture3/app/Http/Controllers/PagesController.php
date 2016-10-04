<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function about(){
		// echo 'OK URL';
		return view('pages.about');
	}

	public function contact(){
		// echo 'OK URL';
		// return view('pages.contact')
	}
}
