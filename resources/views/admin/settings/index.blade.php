@extends('admin.layout')
@section('content')
	{!! Form::open() !!}
	{!! Form::label('اسم الموقع') !!}
	{!! Form::text('title',NULL,['class'=>'form-control']) !!}

	{!! Form::label('وصف الموقع') !!}
	{!! Form::textarea('description',NULL,['class'=>'form-control']) !!}

	{!! Form::label('meta description') !!}
	{!! Form::text('meta_description',NULL,['class'=>'form-control']) !!}

	{!! Form::label('البريد الإلكترونى') !!}
	{!! Form::text('email',NULL,['class'=>'form-control']) !!}

	{!! Form::label('حالة الموقع') !!}
	{!! Form::select('status',['1'=>'مفتوح','0'=>'مغلق'],1,['class'=>'form-control']) !!}

	{!! Form::label('نص الحاله') !!}
	{!! Form::textarea('status_msg',NULL,['class'=>'form-control']) !!}

	{!! Form::label('نص حقوق الملكية') !!}
	{!! Form::text('copy',NULL,['class'=>'form-control']) !!}

	{!! Form::label('facebook') !!}
	{!! Form::text('facebook',NULL,['class'=>'form-control']) !!}

	{!! Form::label('google +') !!}
	{!! Form::text('google',NULL,['class'=>'form-control']) !!}

	{!! Form::label('twitter') !!}
	{!! Form::text('twitter',NULL,['class'=>'form-control']) !!}

	{!! Form::label('youtube') !!}
	{!! Form::text('youtube',NULL,['class'=>'form-control']) !!}

	{!! Form::label('instegram') !!}
	{!! Form::text('instegram',NULL,['class'=>'form-control']) !!}
	<br>
	{!! Form::submit('حفظ',['class'=>'btn btn-primary']) !!}

	{!! Form::close() !!}


@endsection 
@stop
