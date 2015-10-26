<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class PagesFrontCtrl extends Controller {

	public function index($id)
	{
		$pages = DB::table('pages')->where('id',$id)->get();
		return View('front.pages.index',compact('pages'));
	}

}
