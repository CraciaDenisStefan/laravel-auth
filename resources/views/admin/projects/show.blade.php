@extends('layouts.admin')

@section('content')
    <div class="container mt-4 text-white">
        <div class="col-12 col-sm-6 col-md-3 my-5">
            <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Torna alla Dashboard</a>
          </div>
        <h1>{{$project->title}}</h1>
        <p class="mt-4">{{$project->description}}</p>
        <div class="col-4">
            <img class="img-fluid" src="{{ asset('storage/'.$project->cover_image) }}">
        </div>
    </div>
    

@endsection