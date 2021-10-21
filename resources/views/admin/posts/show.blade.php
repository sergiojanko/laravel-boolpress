@extends('layouts.app')

@section('content')
    <ul>
        <li>{{$post->title}}</li>
        <li>{{$post->description}}</li>
        <li><img src="{{$post->image}}" alt="image"></li>
        <li>{{$post->created_at}}</li>
    </ul>
@endsection