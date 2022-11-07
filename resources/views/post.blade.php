@extends('layouts.main')

@section('container')
    <article class="text-white ml-10 mt-10 space-y-6">
        <h1 class="font-bold text-xl">{{ $post["title"] }}</h1>
        <h5 class="font-bold text-md">{{ $post["author"] }}</h5>
        <p class="text-sm">{{ $post["body"] }}</p>
    </article>
@endsection