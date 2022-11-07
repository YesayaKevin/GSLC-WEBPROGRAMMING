@extends('layouts.main')

@section('container')
    <div class="flex ml-10 flex-col text-white mt-24 space-y-4">
        <img class="mx-auto" src="muka-ganteng.jpg" alt="{{ $name }}" width="200px" height="400px">
        <h4 class="mx-auto">Name: {{ $name }}</h4>
        <h4 class="mx-auto">Email: {{ $email }}</h4>
        <h4 class="mx-auto">Address: {{ $address }}</h4>
        <a class="mx-auto bg-slate-700 text-white rounded-md p-2 hover:text-slate-400 drop-shadow-xl" href="/articles">Click here to see articles</a>
    </div>
@endsection