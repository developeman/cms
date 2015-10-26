@extends('admin.layout')
@section('content')

@foreach($pages as $page)
<ul class="nav nav-tabs" role="tablist">
	<li role="presentation"><a href="{!! Url('/') !!}/admin/pages" onclick="return confirm('سيتم تجاهل التعديلات هل انت متأكد ؟')" aria-controls="home" role="tab" data-toggle="">عرض كل الصفحات</a></li>
	<li role="presentation"><a href="{!! Url('/') !!}/admin/pages" onclick="return confirm('سيتم تجاهل التعديلات هل انت متأكد ؟')" aria-controls="profile" role="tab" data-toggle="">إضافة صفحة جديدة</a></li>
	<li role="presentation" class="active"><a href="#edit" aria-controls="profile" role="tab" data-toggle="tab">{!! $page->name !!}</a></li>
</ul>

<div class="tab-content">
<div role="tabpanel" class="tab-pane fade in active" id="edit">
	{!! Form::open() !!}
		{!! Form::label('اسم الصفحة') !!}
		{!! Form::text('name',$page->name,['class'=>'form-control','id'=>'name']) !!}

		{!! Form::label('عرض فى الرئيسية') !!}
		{!! Form::select('display',['1'=>'نعم','0'=>'لا'],$page->display,['class'=>'form-control']) !!}

		{!! Form::label('رابط الصفحة') !!}
		{!! Form::text('url',$page->url,['class'=>'form-control disabled','id'=>'url','readonly'=>'on','dir','ltr']) !!}

		{!! Form::label('محتوى الصفحة') !!}
		{!! Form::textarea('content',$page->content,['class'=>'form-control ckeditor']) !!}
		<br> 
		{!! Form::submit('تعديل',['class'=>'btn btn-primary']) !!}

	{!! Form::close() !!}

<script>
	$(document).ready(function(){
		$('#name').change(function get_data(){
			var str = $('#name').val();
			var name = str.replace(/ /g, "_");
			$('#url').val('{!! Url('/') !!}/'+ name);
		})
	})
	</script>
  </div>
  </div>

@endforeach


@endsection 
@stop