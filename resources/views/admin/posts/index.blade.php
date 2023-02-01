@extends('layouts.app');

@section('content')
     <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Slug</th>
                <th scope="col">Title</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('admin.posts.show', ['post' => $post]) }}" class="btn btn-primary">Visita</a>
                    </td>
                    <td>
                        <a href="{{ route('admin.posts.edit', ['post' => $post]) }}" class="btn btn-warning">Edita</a>
                    </td>
                    <td>
                        <button class="btn btn-danger btn-delete-me" data-id="{{ $post->id }}">Elimina</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
@endsection
