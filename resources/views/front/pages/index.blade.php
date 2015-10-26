@extends('front.layout')
@section('content')

@foreach($pages as $page)

@section('title')
{!! $page->name !!}
@endsection

<p>{!! $page->content !!}</p>

@endforeach

@endsection 
@stop