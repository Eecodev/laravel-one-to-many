@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Category List</h1>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Project Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Url</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{route('admin.categories.show', $category->id)}}" class="btn btn-info border">Info</a>
                                    <form action="{{route('admin.categories.destroy', $category->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="cancel-btn btn btn-danger ms-3" data-item-title="{{$category->name}}">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </section>
@endsection
