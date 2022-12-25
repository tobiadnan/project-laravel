@extends('dashboard.layout.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col lg-8">
                <h1 class="mb-3">{{ $blog->title }}</h1>

                <p>
                    <a href="/dashboard/blogs" class="btn btn-success"><span data-feather="arrow-left">Back to My Blogs</span></a>
                    <a href="" class="btn btn-warning"><span data-feather="edit">Edit</span></a>
                    <a href="" class="btn btn-danger"><span data-feather="x-circle">Delete</span></a>
                </p>

                <img src="https://source.unsplash.com/1200x400?{{ $blog->category->name }}" alt="{{ $blog->category->name }}" class="img-fluid">

                <article class="my-3 fs-5">
                  {!! $blog->body !!}
                </article>

                <a href="/blog">Back</a>
            </div>
        </div>
    </div>
@endsection