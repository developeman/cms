<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Input;
use Redirect;

class ArticlesCtrl extends Controller {

	public function index()
	{
		$articles = DB::table('articles')->paginate(10);
		$cats = DB::table('cats')->where('ct_id',0)->get();
		return View('admin.articles.index',compact('cats','articles'));	
	}

	public function add()
	{
		DB::table('articles')->insert([
			'name'=>Input::get('name'),
			'cat_id'=>Input::get('cat'),
			'content'=>Input::get('art'),
			]);
		return Redirect::to('admin/articles');

	}

}
