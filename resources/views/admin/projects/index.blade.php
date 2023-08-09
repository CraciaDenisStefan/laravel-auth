@extends('layouts.admin')

@section('content')

<div class="m-5">
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Data</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Apri</th>
          </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
          <tr >
            <th scope="row">{{$project->id}}</th>
            <td>{{$project->title}}</td>
            <td>{{$project->date}}</td>
            <td>${{$project->description}}</td>
            <td class="text-center">
              <a href="#"><i class="fa-solid fa-eye"></i></a>
              <a href="#"><i class="fa-solid fa-pen-to-square text-warning"></i></a>
              {{-- <form action="{{route('comics.destroy', $comic->id)}}" method="POST" onsubmit="return confirm('Sei sicuro di voler cancellare ?!?!?!?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn text-danger">
                  <i class="fa-solid fa-trash-can"></i>
                </button>
              </form> --}}
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>

</div>

@endsection