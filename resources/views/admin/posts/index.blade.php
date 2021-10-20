@extends('layouts.app')

@section('content')
@forelse ($posts as $post)
<ul>
    <li>{{ $post->title }}</li>
    <li>{{ $post->created_at }}</li>
    <li><a href="" class="btn btn-primary"></a>Modifica</li>
    <li><a href="" class="btn btn-danger"></a>Elimina</li>
</ul>
    @empty
    <ul>
        <li>Non ci sono Post!</li>
    </ul>
    @endforelse
@endsection