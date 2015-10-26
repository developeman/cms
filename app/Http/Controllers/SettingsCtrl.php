<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Input;
use Redirect;

class SettingsCtrl extends Controller {

	public function index()
	{
		$set = DB::table('settings')->get();
		if(count($set) == 0){
			return View('admin.settings.index');
		}else{
			return View('admin.settings.edit',compact('set'));
		}
	}
	public function new_exist()
	{
		$set = DB::table('settings')->get();
		if(count($set) == 0){
			DB::table('settings')->insert([
				'title' => Input::get('title'),
				'description' => Input::get('description'),
				'meta_description' => Input::get('meta_description'),
				'email' => Input::get('email'),
				'status_msg' => Input::get('status_msg'),
				'copy' => Input::get('copy').'<br>	تصميم و تطوير <a href="http://Develope-Man.com" target="_blank">Develope Man</a>',
				'facebook' => Input::get('facebook'),
				'twitter' => Input::get('twitter'),
				'google' => Input::get('google'),
				'youtube' => Input::get('youtube'),
				'instegram' => Input::get('instegram'),
				'status' => Input::get('status'),
				]);
			return Redirect::to('/admin/settings');
		}else{
			DB::table('settings')->update([
				'title' => Input::get('title'),
				'description' => Input::get('description'),
				'meta_description' => Input::get('meta_description'),
				'email' => Input::get('email'),
				'status_msg' => Input::get('status_msg'),
				'copy' => Input::get('copy').'<br>	تصميم و تطوير <a href="http://Develope-Man.com" target="_blank">Develope Man</a>',
				'facebook' => Input::get('facebook'),
				'twitter' => Input::get('twitter'),
				'google' => Input::get('google'),
				'youtube' => Input::get('youtube'),
				'instegram' => Input::get('instegram'),
				'status' => Input::get('status'),
				]);
			return Redirect::to('/admin/settings');			
		}
	}

}
