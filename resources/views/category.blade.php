@extends('template.main')
@section('container')

<h1 class="mb-5">
    Category : {{ $category }}
</h1>
    @foreach ($posts as $pos)
        <article class="mb-5">
            <h3><a href="/blog/<?=$pos->slug; ?>">{{ $pos->title }}</a></h2>

                <p>By <a href="/authors/{{ $pos->user->id}}" class="text-decoration-none">{{ $pos->user->name }}</a>, Category <a href="/categories/{{ $pos->category->slug }}" class="text-decoration-none">{{ $pos->category->name }}</a></p>
            <p>{{ $pos->bagian}}</p>
        </article>
    @endforeach

@endsection