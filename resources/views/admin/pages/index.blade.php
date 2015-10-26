@extends('admin.layout')
@section('content')

<div>

  <!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
	<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">عرض كل الصفحات</a></li>
	<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">إضافة صفحة جديدة</a></li>
</ul>

<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="home">
	<table class="table table-responsive table-striped">
		<thead>
			<th>#</th>
			<th>ترتيب</th>
			<th>اسم الصفحة</th>
			<th>خيارات</th>
		</thead>
		<tbody>
    	{!! Form::open(['url'=>'admin/pages/sort']) !!}
			@foreach($pages as $page)
			<tr>
				<td>{!! $page->id !!}</td>
				<td>{!! Form::input('number',$page->id,$page->sort,['class'=>'form-control', 'style' => 'width:75px;' ,'min'=>'0','max'=>'999'])!!}</td>
				<td>{!! $page->name !!}</td>
				<td>
  					<a href="{!! Url('/') !!}/admin/pages/edit/{!! $page->id !!}" class="btn btn-warning">تعديل</a>
					<a href="{!! Url('/') !!}/admin/pages/delete/{!! $page->id !!}" class="btn btn-danger" onclick="return confirm('هل انتا متأكد من حذف هذا الموضوع ؟')">حذف</a>
				</td>
			</tr>	
			@endforeach
			<tr>
	            <td class="success" colspan="7"> 
	                {!!  Form::submit('رتب',array('class'=>'btn btn-primary')) !!}
	                <input type='hidden' id='myInput' name='link' value='{!! Url("/")!!}<?= $_SERVER['REQUEST_URI']; ?>' />
	            </td>
        	</tr>
    	{!! Form::close() !!}

		</tbody>
	</table>
      <?php echo $pages->render(); ?>
	
  </div>
  <div role="tabpanel" class="tab-pane fade" id="profile">
	{!! Form::open() !!}
		{!! Form::label('اسم الصفحة') !!}
		{!! Form::text('name',NULL,['class'=>'form-control','id'=>'name']) !!}

		{!! Form::label('عرض فى الرئيسية') !!}
		{!! Form::select('display',['1'=>'نعم','0'=>'لا'],1,['class'=>'form-control']) !!}

		{!! Form::label('رابط الصفحة') !!}
		{!! Form::text('url',NULL,['class'=>'form-control disabled','id'=>'url','readonly'=>'on','dir','ltr']) !!}

		{!! Form::label('محتوى الصفحة') !!}
		{!! Form::textarea('content',NULL,['class'=>'form-control ckeditor']) !!}
		<br> 
		{!! Form::submit('إضافة',['class'=>'btn btn-primary']) !!}

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

</div>


@endsection 
@stop