@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <article class="text-white space-y-2 my-8 flex-col ml-10">
            <h2 class="underline font-bold text-xl hover:text-slate-800"><a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a></h2>
            <h3 class="font-bold text-md">By: {{ $post["author"] }}</h3>
            <p class="text-sm">{{ $post["body"] }}</p>
        </article>
    @endforeach
@endsection