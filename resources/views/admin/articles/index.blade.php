@extends('admin.layout')
@section('content')

<div>

  <!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
	<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">عرض كل المواضيع</a></li>
	<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">إضافة موضوع جديد</a></li>
</ul>

<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="home">
	<table class="table table-responsive table-striped">
		<thead>
			<th>#</th>
			<th>اسم الموضوع</th>
			<th>القسم</th>
			<th>خيارات</th>
		</thead>
		<tbody>
			@foreach($articles as $art)
			<tr>
				<td>{!! $art->id !!}</td>
				<td>{!! $art->name !!}</td>
				<td>
					<?php 
					$cats_name = DB::table('cats')->where('id',$art->cat_id)->get()
					?>
					@foreach($cats_name as $cat_name)
					{!! $cat_name->name !!}
					@endforeach
				</td>
				<td>
  					<a href="{!! Url('/') !!}/admin/articles/edit/{!! $art->id !!}" class="btn btn-warning">تعديل</a>
					<a href="{!! Url('/') !!}/admin/articles/delete/{!! $art->id !!}" class="btn btn-danger" onclick="return confirm('هل انتا متأكد من حذف هذا الموضوع ؟')">حذف</a>
				</td>
			</tr>	
			@endforeach
		</tbody>
	</table>
      <?php echo $articles->render(); ?>
	
  </div>
  <div role="tabpanel" class="tab-pane fade" id="profile">
	{!! Form::open() !!}
		{!! Form::label('اسم الموضوع') !!}
		{!! Form::text('name',NULL,['class'=>'form-control']) !!}
		{!! Form::label('القسم') !!}
		<select class="form-control" name="cat">
			@foreach($cats as $cat)
			<option value="{!! $cat->id !!}"> --{!! $cat->name !!}</option>
			 <?php
				$subcats = DB::table('cats')->where('ct_id',$cat->id)->get();
			  ?>
				@foreach($subcats as $sub)
				<option value="{!! $sub->id !!}"> ----{!! $sub->name !!}</option>
				@endforeach
			@endforeach
		</select>
		{!! Form::label('محتوى الموضوع') !!}
		{!! Form::textarea('art',NULL,['class'=>'form-control ckeditor']) !!}
		<br> 
		{!! Form::submit('إضافة',['class'=>'btn btn-primary']) !!}

	{!! Form::close() !!}


  </div>
</div>

</div>


@endsection 
@stop