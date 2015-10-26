@extends('admin.layout')
@section('content')

@section('title') Users System @endsection 
<div>
	
   <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">عرض كل الأعضاء</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">إضافة عضو جديد</a></li>
  
   </ul>

	<div class="tab-content">
	  <div role="tabpanel" class="tab-pane fade in active" id="home">
	  	<table class="table table-striped table-responsive">
	  		<thead>
	  			<th>#</th>
	  			<th>اسم العضو</th>
	  			<th>البريد الإلكترونى</th>
	  			<th>خيارات</th>
	  		</thead>
	  		<tbody>
	  			@foreach($users as $user)
	  			<tr>
	  				<td>{!! $user->id !!}</td>
	  				<td>{!! $user->name !!}</td>
	  				<td>{!! $user->email !!}</td>
	  				<td>
	  				@if(Auth::admin()->get()->superman == 1)
	  				<a href="{!! Url('/') !!}/admin/users/edit/{!! $user->id !!}" class="btn btn-warning">تعديل</a>
	  				@else
	  				<a href="{!! Url('/') !!}/admin/users/edit/{!! $user->id !!}" class="btn btn-warning disabled">تعديل</a>
	  				@endif

	  				@if($user->superman == 1)
	  				<a href="{!! Url('/') !!}/admin/users/delete/{!! $user->id !!}" class="btn btn-danger disabled" onclick="return confirm('هل انتا متأكد من حذف العضو {!! $user->name !!} ؟')">حذف</a>
	  				@else
	  				<a href="{!! Url('/') !!}/admin/users/delete/{!! $user->id !!}" class="btn btn-danger" onclick="return confirm('هل انتا متأكد من حذف العضو {!! $user->name !!} ؟')">حذف</a>
	  				@endif
	  				</td>
	  			</tr>
	  			@endforeach
	  		</tbody>
	  	</table>
      <?php echo $users->render(); ?>
	  	
	  </div>
	  <div role="tabpanel" class="tab-pane fade" id="profile">
	  {!! Form::open() !!}

	  {!! Form::Label('اسم العضو') !!}
	  {!! Form::text('name',NULL,['class'=>'form-control']) !!}

	  {!! Form::Label('البريد الإلكترونى') !!}
	  {!! Form::email('email',NULL,['class'=>'form-control']) !!}

	  {!! Form::Label('كلمة المرور') !!}
	  {!! Form::text('password',NULL,['class'=>'form-control']) !!}

	  <div class="col-lg-3 col-md-3">
	  {!! Form::Label('الصلاحيات') !!}
	  </div>

	  <div class="col-lg-9 col-md-9">

	  <div class="col-lg-6 col-md-3">
	  <label><input type="checkbox" name="pre[]" value="settings" /> إعدادات الموقع</label>
	  </div>

	  <div class="col-lg-6 col-md-3">
	  <label><input type="checkbox" name="pre[]" value="users"/> الاعضاء</label>
	  </div> 

	  <div class="col-lg-6 col-md-3">
	  <label><input type="checkbox" name="pre[]" value="cats" /> الأقسام</label>
	  </div>




	  <div class="col-lg-6 col-md-3">
	  <label><input type="checkbox" name="pre[]" value="articles" /> المقالات</label>
	  </div>


	  <div class="col-lg-6 col-md-3">
	  <label><input type="checkbox" name="pre[]" value="pagesSys" /> نظام الصفحات</label>
	  </div>


	  <div class="col-lg-6 col-md-3">
	  <label><input type="checkbox" name="pre[]" value="mail" /> القائمة البريدية</label>
	  </div>
	  </div>

	  <br>
	  <div class="line"></div>

	  <div class="col-lg-12 col-md-3">
	  {!! Form::submit('إضافة',['class'=>'btn btn-primary']) !!}
	  </div>
	
	  {!! Form::close() !!}

	  </div>

	</div>

</div>


@endsection 
@stop
