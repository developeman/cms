@extends('admin.layout')
@section('content')

		
<div>
	<ul class="nav nav-tabs" role="tablist">
	    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">عرض كل الأقسام</a></li>
	    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">إضافة قسم جديد</a></li>  
    </ul>

	<div class="tab-content">
		<div role="tabpanel" class="tab-pane fade in active" id="home">
			<table class="table table-responsive table-striped">
				<thead>
					<th>#</th>
					<th>اسم القسم</th>
					<th>خيارات</th>
				</thead>
				<tbody>
						@foreach ($cats as $cat)
						<tr>
							<td>{!! $cat->id !!}</td>
							<td>
								<div class="col-lg-12">
									{!! $cat->name !!}
								<?php
									$subcat = DB::table('cats')->where('ct_id',$cat->id)->get();
								?>
									<ol>
									@foreach($subcat as $sub)
									<li>	{!! $sub->name !!}</li>
									@endforeach
										
									</ol>
								</div>
								
							</td>
							<td>
			  					<a href="{!! Url('/') !!}/admin/cats/edit/{!! $cat->id !!}" class="btn btn-warning">تعديل</a>
								<a href="{!! Url('/') !!}/admin/cats/delete/{!! $cat->id !!}" class="btn btn-danger" onclick="return confirm('هل انتا متأكد من حذف هذا القسم ؟')">حذف</a>
							</td>
						</tr>
						@endforeach
				</tbody>
			</table>
      <?php echo $cats->render(); ?>
			
		</div>
		<div role="tabpanel" class="tab-pane fade" id="profile">
			{!! Form::open() !!}
				{!! Form::label('اسم القسم') !!}
				{!! Form::text('name',NULL,['class'=>'form-control']) !!}
				{!! Form::label('نوع القسم') !!}
				{!! Form::select('type',['0'=>'رئيسى',1=>'فرعى'],null,['class'=>'form-control','id'=>'type']) !!}
				<div id="main_cat" style="display:none">
					
				{!! Form::label('اسم القسم الرئيسى') !!}
				{!! Form::select('ct_id',$list,null,['class'=>'form-control','id'=>'main']) !!}
	
				</div>
				<br>
				{!! Form::submit('إضافة',['class'=>'btn btn-primary']) !!}

			{!! Form::close() !!}
	 	</div>
	</div>

	<script>
	$(document).ready(function(){
		$('#type').change(function get_data(){
			if($('#type').val() == 0){
			  $('#main_cat').hide('slow');
			}else{
			  $('#main_cat').show('slow'); 
			}
		})
	})
	</script>
</div>
@endsection 
@stop
