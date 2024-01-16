@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Edit {{$project->title}}</h1>
        <form action="{{ route('admin.projects.update', $project->id) }}" enctype="multipart/form-data"  method="POST">
        @csrf
        @method('PUT')
     <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                required minlength="3" maxlength="200" value="{{ old('title', $project->title) }}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="category_id">Select Category</label>
        <select type="text" class="form-control @error('title') is-invalid @enderror" name="category_id" id="category_id"
            required minlength="3" maxlength="200" value="{{ old('category_id') }}">
            <option value="">Select a Category</option>
            @foreach ($categories as $category)
                <option value="{{$category_id}}" {{old('category_id', $project->category_id) == $category->id ? 'selected' : ''}}></option>
            @endforeach
        </select>
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="url">Url</label>
        <input type="url" class="form-control @error('url') is-invalid @enderror" name="url" id="url" value="{{old('url')}}">
        @error('url')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description">Body</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10">
        {{ old('description', $project->description) }}
        </textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
                <label for="image">Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" value="{{old('image', $project->image)}}">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
    </div>
    <button type="submit" class="btn btn-success">Save</button>
    <button type="reset" class="btn btn-primary">Reset</button>

        </form>
    </section>
@endsection

