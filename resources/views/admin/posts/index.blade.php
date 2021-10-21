@extends('layouts.app')

@section('content')
@forelse ($posts as $post)
<ul>
    <li>{{ $post->title }}</li>
    <li>{{ $post->created_at }}</li>
    <li><a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary">Vai</a></li>  
    <li><a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-primary">Modifica</a></li>  
    <li>
        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="delete-button">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Elimina</button>
        </form>
    </li>
</ul>
    @empty
    <ul>
        <li>Non ci sono Post</li>
    </ul>
    @endforelse
@endsection

@section('scripts')
    <script>
        const deleteButtons = document.querySelectorAll('.delete-button');
        deleteButtons.forEach(form => {
            form.addEventListener('submit', function(e){
                e.preventDefault();
                const confirm = window.confirm('Sei sicuro di volere eliminare il post?')
                if (confirm) this.submit();
            })
        });
    </script>
@endsection