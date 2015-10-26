<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Input;
use Redirect;

class PagesCtrl extends Controller {

	public function index()
	{
		$pages = DB::table('pages')->OrderBy('sort','asc')->paginate(10);
		return View('admin.pages.index',compact('pages'));
	}
	public function add()
	{
		DB::table('pages')->insert([
			'name'=>Input::get('name'),
			'content'=>Input::get('content'),
			'display'=>Input::get('display'),
			'url'=>Input::get('url'),
			]);
		return Redirect::to('/admin/pages');
	}
	public function edit($id)
	{
		$pages = DB::table('pages')->where('id',$id)->get();
		return View('admin.pages.edit',compact('pages'));
	}
	public function do_edit($id)
	{
		DB::table('pages')->where('id',$id)->update([
			'name'=>Input::get('name'),
			'content'=>Input::get('content'),
			'display'=>Input::get('display'),
			'url'=>Input::get('url'),
			]);
		return Redirect::to('/admin/pages');
	}

	public function delete($id)
	{
		DB::table('pages')->where('id',$id)->delete();
		return Redirect::to('/admin/pages');
	}


	public function sort() {
		unset($_POST['_token']);
		foreach ($_POST as $k => $v) {
			DB::table('pages')
				->where('id', $k)
				->update(['sort' => $v]);
		}
		return Redirect::to(Input::get('link'));
	}
}
