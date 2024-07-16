@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection