@extends('admin.layout')
@section('content')
	@foreach($set as $data)
	{!! Form::open() !!}
	{!! Form::label('اسم الموقع') !!}
	{!! Form::text('title',$data->title,['class'=>'form-control']) !!}

	{!! Form::label('وصف الموقع') !!}
	{!! Form::textarea('description',$data->description,['class'=>'form-control']) !!}

	{!! Form::label('meta description') !!}
	{!! Form::text('meta_description',$data->meta_description,['class'=>'form-control']) !!}

	{!! Form::label('البريد الإلكترونى') !!}
	{!! Form::text('email',$data->email,['class'=>'form-control']) !!}

	{!! Form::label('حالة الموقع') !!}
	{!! Form::select('status',['1'=>'مفتوح','0'=>'مغلق'],$data->status,['class'=>'form-control']) !!}

	{!! Form::label('نص الحاله') !!}
	{!! Form::textarea('status_msg',$data->status_msg,['class'=>'form-control']) !!}

	{!! Form::label('نص حقوق الملكية') !!}
	{!! Form::text('copy',$data->copy,['class'=>'form-control']) !!}

	{!! Form::label('facebook') !!}
	{!! Form::text('facebook',$data->facebook,['class'=>'form-control']) !!}

	{!! Form::label('google +') !!}
	{!! Form::text('google',$data->google,['class'=>'form-control']) !!}

	{!! Form::label('twitter') !!}
	{!! Form::text('twitter',$data->twitter,['class'=>'form-control']) !!}

	{!! Form::label('youtube') !!}
	{!! Form::text('youtube',$data->youtube,['class'=>'form-control']) !!}

	{!! Form::label('instegram') !!}
	{!! Form::text('instegram',$data->instegram,['class'=>'form-control']) !!}

	<br>
	{!! Form::submit('حفظ',['class'=>'btn btn-primary']) !!}

	{!! Form::close() !!}
	@endforeach

@endsection 
@stop
