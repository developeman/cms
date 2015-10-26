<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Redirect;
use DB;
use Input;


class CatsCtrl extends Controller {

	//
	public function index()
	{
		$cats = DB::table('cats')->where('ct_id',0)->paginate(10);
		$list = DB::table('cats')->where('ct_id',0)->lists('name','id');
		return View('admin.cats.index',compact('cats','list'));
	}
	
	public function add()
	{
		if(Input::get('type') == 0)
		{
			DB::table('cats')->insert([
			'name'=>Input::get('name'),
			'ct_id'=>0
			]);
		}else{
			DB::table('cats')->insert([
			'name'=>Input::get('name'),
			'ct_id'=>Input::get('ct_id'),
			]);
		}
		return Redirect::to('/admin/cats');
	}

	public function edit($id)
	{
		$cats = DB::table('cats')->where('id',$id)->get();
		$list = DB::table('cats')->where('ct_id',0)->lists('name','id');
		return View('admin.cats.edit',compact('cats','list'));
	}

	public function do_edit($id)
	{
	}

	public function delete($id)
	{
		DB::table('cats')->where('id',$id)->delete();
		return Redirect::to('/admin/cats');
	}
}
