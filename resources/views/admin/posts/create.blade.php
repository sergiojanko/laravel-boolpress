@extends('layouts.app')

@section('content')
    <div class="container">
        <header>
            <h1>Crea nuovo post</h1>
        </header>

        <section class="form">
            <form method="POST" action="{{ route('admin.posts.store') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Image url</label>
                    <input type="text" class="form-control" id="image" name="image" placeholder="inserisci l'url dell'immagine">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="desciption" name="description" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">SALVA</button>
            </form>
        </section>
    </div>
@endsection