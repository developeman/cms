@extends('admin.layout')
@section('content')

@section('title') Users System @endsection 
	@foreach($users as $user)
<div>
   <ul class="nav nav-tabs" role="tablist">
    <li role="presentation"><a href="{!! Url('/') !!}/admin/users#home" onclick="return confirm('سيتم تجاهل التعديلات هل انت متأكد ؟')" aria-controls="home" role="tab" >عرض كل الأعضاء</a></li>
    <li role="presentation"><a href="{!! Url('/') !!}/admin/users#profile" onclick="return confirm('سيتم تجاهل التعديلات هل انت متأكد ؟')" aria-controls="profile" role="tab" >إضافة عضو جديد</a></li>
    <li role="presentation" class="active"><a href="#edit" aria-controls="edit" role="tab" data-toggle="tab">{!! $user->name !!}</a></li>
  
   </ul>

	<div class="tab-content">
	  <div role="tabpanel" class="tab-pane fade in active" id="edit">
	  {!! Form::open() !!}

	  {!! Form::Label('اسم العضو') !!}
	  {!! Form::text('name',$user->name,['class'=>'form-control']) !!}

	  {!! Form::Label('البريد الإلكترونى') !!}
	  {!! Form::email('email',$user->email,['class'=>'form-control']) !!}

	  {!! Form::Label('كلمة المرور') !!}
	  {!! Form::text('password',NULL,['autocomplete'=>'off','class'=>'form-control','placeholder'=>"اتركها فارغة حتى لا تتغير"]) !!}
	  <div class="col-lg-3 col-md-3">
	  {!! Form::Label('الصلاحيات') !!}
	  </div>

	  <div class="col-lg-9 col-md-9">
		<?php 
			$pre = explode(',',$user->pre);
		    function hasRole($role,$array)
			{
				if(in_array($role,$array))
				{
					echo "checked";
				}	
			}
		?>

	  <div class="col-lg-6 col-md-3">
	  <label><input type="checkbox" name="pre[]" {!! hasRole('settings',$pre) !!}  value="settings" /> إعدادات الموقع</label>
	  </div>

	  <div class="col-lg-6 col-md-3">
	  <label><input type="checkbox" name="pre[]"  {!! hasRole('users',$pre) !!}  value="users"/> الاعضاء</label>
	  </div> 

	  <div class="col-lg-6 col-md-3">
	  <label><input type="checkbox" name="pre[]" {!! hasRole('cats',$pre) !!} value="cats" /> الأقسام</label>
	  </div>

	  <div class="col-lg-6 col-md-3">
	  <label><input type="checkbox" name="pre[]" {!! hasRole('articles',$pre) !!} value="articles" /> المقالات</label>
	  </div>


	  <div class="col-lg-6 col-md-3">
	  <label><input type="checkbox" name="pre[]" {!! hasRole('pagesSys',$pre) !!} value="pagesSys" /> نظام الصفحات</label>
	  </div>


	  <div class="col-lg-6 col-md-3">
	  <label><input type="checkbox" name="pre[]" {!! hasRole('mail',$pre) !!} value="mail" /> القائمة البريدية</label>
	  </div>
	  </div>

	  <br>
	  <div class="line"></div>

	  <div class="col-lg-12 col-md-3">
	  {!! Form::submit('تعديل',['class'=>'btn btn-primary']) !!}
	  </div>
	
	  {!! Form::close() !!}

	  </div>

	</div>

</div>
@endforeach
@endsection 
@stop
