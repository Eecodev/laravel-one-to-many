@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>{{$category->name}}</h1>
        {{-- <p>{{$category->description}}</p> --}}
        {{-- <div>
            <img src="{{asset('storage/' . $project->image)}}" alt="{{$project->title}}">
        </div> --}}
    </section>
@endsection

