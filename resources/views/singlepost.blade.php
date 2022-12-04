@extends('template.main')
@section('container')

<div class="container">
     <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3"> {{ $post->title }}</h1>

            <p>By. <a href="blog?user={{ $post->user->id }}" class="text-decoration-none"> {{ $post->user->name }}</a> Category <a href="/blog?category= {{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}
            </a></p>

            <img src="https://source.unsplash.com/1200x400? 
            {{ $post->category->name }}" alt="{{
            $post->category->name }}" class="img-fluid">

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>

            <a href="/blog">Kembali</a>
        </div>
    </div>
 </div>

@endsection
