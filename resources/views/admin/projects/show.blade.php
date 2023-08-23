@extends('layouts.admin')

@section('content')
    <div class="container mt-4 text-white">
        <h1>{{$project->title}}</h1>
        <p class="mt-4">{{$project->description}}</p>
        <div class="col-4">
            <img class="img-fluid" src="{{ asset('storage/'.$project->cover_image) }}" alt="">
        </div>
    </div>
    

@endsection