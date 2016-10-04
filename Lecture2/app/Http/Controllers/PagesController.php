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
	public function aboutme(){
		// echo 'OK URL';
		$name='Nguyen Van Vuong';
		$lop='12T2';
		$khoa='Khoa Cong Nghe Thong Tin';
		$school='Truong Dai Hoc Bach Khoa Da Nang';

		$data=[];
		$data['name']   = $name;
		$data['lop']    = $lop;
		$data['khoa']   = $khoa;
		$data['school'] = $school;
		return view("pages.aboutme",$data);
	}
}
