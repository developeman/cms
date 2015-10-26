<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use Input;
use Redirect;

class UsersCtrl extends Controller {
	
	public function index()
	{
		$pre = explode(',',Auth::admin()->get()->pre);
		if(in_array('users',$pre))
		{
			$users = DB::table('admins')->paginate(10);
			return View('admin.users.index',compact('users'));
		}else{
			return Redirect::to('/admin');
		}

	}

	public function add()
	{
		$pre=implode(',', Input::get('pre'));
		DB::table('users')->insert([
			'name'=>Input::get('name'),
			'email'=>Input::get('email'),
			'password'=>bcrypt(Input::get('password')),
			'pre'=>$pre
			]);
		return Redirect::to('/admin/users');
	}

	public function edit($id)
	{
		$users = DB::table('admins')->where('id',$id)->get();
		return View('admin.users.edit',compact('users'));
	}
	public function do_edit($id)
	{
		$pre=implode(',', Input::get('pre'));
		if(Input::has('password')){
		$users = DB::table('admins')->where('id',$id)->update([
			'name'=>Input::get('name'),
			'email'=>Input::get('email'),
			'password'=>bcrypt(Input::get('password')),
			'pre'=>$pre
			]);	
		}else{

		$users = DB::table('admins')->where('id',$id)->update([
			'name'=>Input::get('name'),
			'email'=>Input::get('email'),
			'pre'=>$pre
			]);
		}
		return Redirect::to('/admin/users');
	}
	public function delete($id)
	{
		$users = DB::table('admins')->where('id',$id)->get();
		foreach ($users as $user) {}
		if($user->superman == 1){
			return Redirect::to('/admin/users');
		}else{
		$delete = DB::table('admins')->where('id',$id)->delete();
		}
		return Redirect::to('/admin/users');
	}


}