@extends('admin.layout')
@section('content')
	
		
<div>
	<ul class="nav nav-tabs" role="tablist">
	    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">عرض كل الأقسام</a></li>
	    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">إضافة قسم جديد</a></li>  
	    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">إضافة قسم جديد</a></li>  
    </ul>

	<div class="tab-content">
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



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>