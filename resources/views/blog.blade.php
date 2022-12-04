@extends('template.main')
@section('container')

<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/blog">
            
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif

            @if (request('user'))
                <input type="hidden" name="user" value="{{ request('user') }}">
            @endif

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" 
                value="{{ request('search') }}">
                <button class="btn btn-danger" type="button" >Cari</button>
            </div>
        </form>
    </div>
</div>

@if ($post->count())
<div class="card md-3">
    <img src="https://source.unsplash.com/1200x400/?tech {{ $post[0]-> category->name }}" class="card-img-top" alt="contoh">
    <div class="card-body text-center">
        <h3 class="card-title">
            <a href="/blog/{{ $post[0]->slug }}" class="text-decoration-none text-dark">{{ $post[0]->title }}</a>
        </h3>
        <p>
            <small class="text-muted">
                By. <a href="/blog?user={{ $post[0]->user->id }}" class="text-decoration-none">{{ $post[0]->user->name }}</a>, category <a href="/blog?category={{ $post[0]->category->slug }}" class="text-decoration-none">{{ $post[0]->category->name }}</a> {{ $post[0]->created_at->diffforhumans() }}
            </small>

            <p class="card-text">{{ $post[0]->bagian }}</p>
            <a href="/blog/{{ $post[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>

        </p>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach ($post->skip(1) as $pos)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute рх-3 ру-2" style= "background-color: rgba(0, 0,0, 0.7)"><a href="/blog?category={{ $pos->category->slug }}" class="text-white text-decoration-none">{{ $pos->category->name  }}</a></div>

                    <img src="https://source.unsplash.com/500x400/?tech {{ $pos->category->name }}"
                    class="card-img-top" alt="{{ $pos->category->name }}">
                    
                    <div class="card-body">
                    <h5 class="card-title"> {{ $pos->title }}</h5>
                        <p><small class="text-muted">
                                By. <a href="/blog?user={{ $pos->user->id }}" class="text-decoration-none"> {{ $pos->user->name }}</a> {{ $pos->created_at->diffForhumans()}}
                        </small></p>

                    <p class="card-text">{{ $pos->bagian }}</p>
                    <a href="/blog/{{ $pos->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
     </div>
</div>

@else
     <p class="text-center fs-4">Tidak Ada Artikel.</p>
@endif

<div class="d-flex justify-content-center">
    {{ $post->links() }}
</div>

@endsection
