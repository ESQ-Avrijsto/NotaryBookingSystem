@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $posts->title }}</h2>
                <div class="tools p-2 rounded-3">
                    <a href="/dashboard/posts" class="text-decoration-none badge bg-primary fs-6" title="Back"><span data-feather="arrow-left"></span></a>
                    <a href="/dashboard/posts/{{ $posts->slug }}/edit" class="text-decoration-none badge bg-warning fs-6" title="Edit"><span data-feather="edit"></span></a>
                    <form action="/dashboard/posts/{{ $posts->slug }}" method="POST" class=" d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0 fs-6" title="Delete" onclick="return confirm('Are you sure you want to delete this post: {{ $posts->title }}? ')"><span data-feather="trash-2"></button>
                    </form>
                </div>

            @if ($posts->image)
                <img src="{{ asset('storage/' . $posts->image) }}" alt="{{ $posts->category->name }}" class="img-fluid rounded-3">
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts->category->name }}" alt="{{ $posts->category->name }}" class="img-fluid mb-3">
            @endif

            <article class="fs-5">
                {!! $posts->body !!}
            </article>

            <a class="btn btn-primary d-block my-5" href="/blog">Back to posts</a>
        </div>
    </div>
</div>
@endsection